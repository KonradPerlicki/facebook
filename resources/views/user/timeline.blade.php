<x-layout.layout >
        <!-- Main Contents -->
        <div class="main_content">
            <div class="mcontainer">
                <!-- Session Status -->
                <x-flash-messages.auth-session-status class="mb-8 p-4 bg-green-100 rounded-xl" :status="session('status')" />
                
                <x-flash-messages.auth-validation-errors class="mb-8 p-4 bg-red-100 rounded-xl" :errors="$errors" />

                {{-- Top section --}}
                <div class="profile user-profile">
                    <div class="profiles_banner">
                        <img src="{{ Storage::url($user->background_image) }}" alt="">
                    </div>
                    <div class="profiles_content">
                        <div class="profile_avatar">
                            @if((auth()->user()->friendWith($user) && $user->available_story) || auth()->user()->available_story)
                                <div id="{{ $user->username }}" onclick="show_story('{{ $story->user->username }}')" uk-lightbox 
                                    class="profile_avatar_holder border-4 
                                    @if($user->viewed_story($user->available_story->id))
                                    border-gray-500
                                    @else
                                    border-blue-600
                                    @endif rounded-full cursor-pointer"> 
                                    <a class="uk-button" href="{{ Storage::url($story->image)}}"  data-caption="Added {{ $story->expires_at->addHours(-24)->diffForHumans() }} @if($story->user_id == auth()->id()) | Views: {{ $story->views }} @endif">
                                        <img src="{{ $user->prof_image }}" alt="">
                                    </a>
                                </div>
                                {{-- Script for marking story as read --}}
                                @if($story->user_id != auth()->id())
                                    <x-slot name="scripts">
                                        <script>
                                            function show_story(username){
                                                $.ajaxSetup({
                                                    headers: {
                                                        "X-CSRF-TOKEN": jQuery('meta[name="csrf-token"]').attr("content"),
                                                    },
                                                });
                                                $.ajax({
                                                    url: "/show-story",
                                                    type: "POST",
                                                    data: { username: username },
                                                    success: function () {
                                                        $("div[id='"+username+"']").removeClass('border-blue-600')
                                                        $("div[id='"+username+"']").addClass('border-gray-500')
                                                    },
                                                });
                                            }
                                        </script>
                                    </x-slot>
                                @endif
                            @elseif(!$user->available_story || $story->user_id != auth()->id())
                                <div class="profile_avatar_holder border-4 border-white"> 
                                    <img src="{{ $user->prof_image }}" alt="">
                                </div>    
                            @endif
                        </div>
                        <div class="profile_info">
                            <h1> {{ $user->fullname}} </h1>
                            <p> {{ $user->about_me }} </p>
                        </div>
                    </div>
                    <div class="flex justify-between lg:border-t flex-col-reverse lg:flex-row">
                        <nav class="responsive-nav pl-2 is_ligh -mb-0.5 border-transparent">
                            <ul  uk-switcher="connect: #timeline-tab; animation: uk-animation-fade">
                                <li><a href="#">Timeline</a></li>
                                <li><a href="#">Friends <span>{{ $friends->count() }}</span> </a></li>
                                <li><a href="#">Pages</a></li> 
                                <li><a href="#">Groups</a></li> 
                            </ul>
                        </nav>
                        <div class="flex items-center space-x-1.5 flex-shrink-0 pr-3  justify-center order-1">
                            @if($user->id == auth()->id())
                                @if(!$story){{-- If user doesn't have story --}}
                                    <a href="#add-story" uk-toggle class="uk-button uk-button-default flex items-center justify-center hover:text-gray-300 h-10 px-5 rounded-md bg-blue-600 text-white  space-x-1.5"> 
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd"></path>
                                        </svg>
                                        <span> Add Your Story </span>
                                    </a>
                                    {{-- Story Modal --}}
                                    <div id="add-story" uk-modal>
                                        <div class="uk-modal-dialog ">
                                            <form id="create-story" method="POST" action="{{ route('story.add', $user->id) }}" enctype="multipart/form-data">
                                            @csrf
                                                <button class="uk-modal-close-default" type="button" uk-close></button>
                                                <div class="uk-modal-header">
                                                    <h2 class="uk-modal-title">Add your story</h2>
                                                    <span class="text-gray-400">Story will be visible only for 24 hours</span>
                                                </div>
                                                <div class="uk-modal-body">
                                                    <div id="preview-story" class="border shadow-sm bg-gray-300 h-96 relative flex flex-col items-center justify-center rounded-md py-8 mt-2 z-10">
                                                        <label for="story-image" class="cursor-pointer py-36 px-48">
                                                                <div class="w-12 h-12 items-center mx-auto justify-center">
                                                                    <ion-icon name="image-outline" class="w-10 h-10"></ion-icon>
                                                                </div>
                                                                <div class="mt-2">Choose your photo</div>
                                                        </label>
                                                        <input onchange="readURL(this)" type="file" class="w-full hidden  h-full top-0 left-0 absolute opacity-0" id="story-image" name="image"  accept="image/*">
                                                        <p class="absolute bottom-0 font-medium" style="color:#EF4444;" id="imageReq"></p>
                                                    </div>
                                                </div>
                                                <div class="uk-modal-footer text-right w-full  p-3">
                                                    <div>
                                                        <button type="submit" class="bg-blue-600 h-9 rounded-md text-white px-5 font-medium">
                                                            Share </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    {{-- javascript for adding new story --}}
                                    <x-slot name="scripts">
                                        <script>
                                        function readURL(input) {
                                            if(input.files && input.files[0]) {
                                                var reader = new FileReader();
                                                reader.onload = function (e) {
                                                    $('#preview-story').css('background', 'transparent url('+e.target.result +') ');
                                                    $('#preview-story').css('background-size', 'cover');
                                                    $('#preview-story').css('background-position', 'center center');
                                                }
                                                reader.readAsDataURL(input.files[0]);
                                            }

                                            if(!$('#clear-preview').length){ //if exist it doesn't append delete button
                                                $('#preview-story').append('<div id="clear-preview" onclick="delete_preview()" class="bg-red-500 border-white w-6 h-6 absolute -right-2 -top-2 rounded-full border-2 text-white text-center cursor-pointer z-50">&#x2716;</div>')
                                            }
                                            if($('#imageReq').length){ //clear message
                                                $('#imageReq').html('')        
                                            }
                                            //delete label with text and icon
                                            $('#preview-story label').remove()
                                        }
                                        function delete_preview(){
                                            $('#story-image').val('')
                                            $('#preview-story').css('background', '')
                                            $('#clear-preview').remove()
                                            $('#preview-story').prepend('<label for="story-image" class="cursor-pointer py-36 px-48"><div class="w-12 h-12 items-center mx-auto justify-center"><ion-icon name="image-outline" class="w-10 h-10"></ion-icon></div><div class="mt-2">Choose your photo</div></label>')
                                        }

                                        $('#create-story').submit(function(e){
                                            if($('#story-image').val() == ''){
                                                $('#imageReq').html('You have to add your photo')        
                                                e.preventDefault()
                                            }
                                        });
                                        </script>
                                    </x-slot>
                                @else
                                <form method="POST" action="{{ route('story.destroy') }}">
                                    @csrf
                                    @method('DELETE')
                                    <button uk-tooltip="This action is irreversible" type="submit" class="w-full px-3 py-2 text-left text-red-500 hover:bg-red-50 hover:text-red-500 rounded-md dark:hover:bg-red-600">
                                        <ion-icon name="trash-outline" class="pr-2 text-xl align-middle"></ion-icon>  Delete my story
                                    </button>
                                </form>
                                @endif
                            @else
                                @if($user->friendWith(auth()->user())){{-- if both users are friends --}}
                                <div class="flex items-center justify-center hover:text-gray-300 h-10 px-5 rounded-md bg-blue-600 text-white  space-x-1.5"> 
                                    <span>Friends &check; </span>
                                </div>
                                <a href="#" class="flex items-center justify-center h-10 w-10 rounded-md bg-gray-100"> 
                                    <ion-icon name="ellipsis-horizontal" class="text-xl"></ion-icon>
                                </a>
                                <div class="bg-white w-56 shadow-md mx-auto p-2 mt-12 rounded-md text-gray-500 hidden border border-gray-100 dark:bg-gray-900 dark:text-gray-100 dark:border-gray-700"  
                                uk-drop="mode: click;pos: bottom-right;animation: uk-animation-slide-bottom-small; offset:5">
                                    <ul class="space-y-1">
                                        <li> 
                                            <a href="#" class="flex items-center px-3 py-2 hover:bg-gray-100 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                                                <i class="uil-envelope mr-1 pr-2 text-xl"></i>  Send Message 
                                            </a> 
                                        </li>
                                        <li>
                                            <hr class="-mx-2 my-2 dark:border-gray-800">
                                        </li>
                                        <li> 
                                            <form method="POST" action="{{ route('unfriend', $user->id) }}" class="text-red-500 hover:bg-red-50 hover:text-red-500 rounded-md dark:hover:bg-red-600">
                                                @csrf
                                                <button type="submit" class="w-full px-3 py-2 text-left">
                                                    <ion-icon name="stop-circle-outline" class="pr-2 text-xl align-middle"></ion-icon>  Unfriend
                                                </button>
                                            </form> 
                                        </li>
                                    </ul>
                                </div>
                                @else {{-- if invite was sent --}}
                                    @foreach (auth()->user()->invites as $invite)
                                        @if ($sent = $invite->invitedBy(auth()->user()) && $invite->receiver_id==$user->id)
                                        <button onclick="remove_friend({{ $user->id }}, true)"
                                            class="add_friend{{ $user->id }} flex items-center justify-center hover:text-gray-300 h-10 px-5 rounded-md bg-blue-600 text-white  space-x-1.5"> 
                                                <span> Sent &check; </span>
                                            </button>
                                            @break
                                        @endif
                                    @endforeach
                                    @if(!isset($sent)) {{-- if invite was not sent and are not friends --}}
                                    <button  onclick="add_friend({{ $user->id }}, true)"
                                        class="add_friend{{ $user->id }} flex items-center justify-center hover:text-gray-300 h-10 px-5 rounded-md bg-blue-600 text-white  space-x-1.5"> 
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd"></path>
                                            </svg>
                                            <span> Add Friend </span>
                                        </button>
                                    @endif
                                @endif
                            @endif          
                        </div>
                    </div>
                </div>
                
                <div class="uk-switcher lg:mt-8 mt-4" id="timeline-tab">
                    <!-- Timeline -->
                    <div class="md:flex md:space-x-6 lg:mx-16">
                        <div class="space-y-5 flex-shrink-0 md:w-7/12">
                           {{-- Create post form --}}
                           @if($user->id == auth()->id())
                            <x-forms.create-post :user="$user"/>
                           @endif
                            {{-- Posts TODO PAGINATION --}}
                            @foreach ($posts as $post)
                                {{-- TODO check this if it displays correctly --}}
                                <x-index.post-card :post="$post" :invites="auth()->user()->invites"/>
                            @endforeach
                            @if(!$posts->count())
                                <div class="text-center italic text-gray-400 p-5">This user doesn't have any posts</div>
                            @endif
                            {{ $posts->links() }}
                        </div>
                        <!-- Sidebar -->
                        <div class="w-full space-y-6">
                            {{-- About section --}}
                            <div class="widget card p-5">
                                <h4 class="text-lg font-semibold"> About </h4>
                                <ul class="text-gray-600 space-y-3 mt-3">
                                    @if($user->location)
                                        <x-user.about name="location">{{ $user->location }}</x-user.about>
                                    @endif
                                    @if($user->working_at)
                                        <x-user.about name="working_at">{{ $user->working_at }}</x-user.about>
                                    @endif
                                    @if($user->relationship)
                                        <x-user.about name="relationship">{{ $user->relationship }}</x-user.about>
                                    @endif
                                    <li class="flex items-center space-x-2"> 
                                        <ion-icon name="document-text-outline" class="rounded-full bg-gray-200 text-xl p-1 mr-3"></ion-icon>
                                        Total posts: <strong>{{-- -$user->posts->count() problem n+1? --}} 230 </strong>{{-- TODO count posts --}}
                                    </li>                                
                                </ul>
                            </div>
                            {{-- Friends SIDE --}}
                            <div class="widget card p-5 border-t">
                                <div class="flex items-center justify-between mb-4">
                                    <div>
                                        <h4 class="text-lg font-semibold"> Friends </h4>
                                        <p class="text-sm"> {{ $friends->count() }} {{ Str::plural('friend', $friends->count()) }}</p>
                                    </div>
                                </div>
                                <div class="grid grid-cols-3 gap-3 text-gray-600 font-semibold">
                                    @foreach ($friends as $friend)
                                        <x-user.friend :user="$friend->user"/>
                                    @endforeach
                                </div>
                            </div>
                            {{-- Groups SIDE --}}
                            <div class="widget card p-5 border-t">
                                <div class="flex items-center justify-between mb-2">
                                    <div>
                                        <h4 class="text-lg font-semibold"> Groups </h4>
                                    </div>
                                </div>
                                <div>
                                    <x-user.group />
                                    <x-user.group />
                                    <x-user.group />
                                    <x-user.group />
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- FRIENDS SECTION --}}
                    <div class="card md:p-6 p-2 max-w-3xl mx-auto">
                        <h2 class="text-xl font-semibold"> Friends</h2>
                        <div class="grid md:grid-cols-4 sm:grid-cols-3 grid-cols-2 gap-x-2 gap-y-4 mt-3">
                            @foreach ($friends as $friend)
                                <x-user.friend :user="$friend->user" :card="true"/>
                            @endforeach
                        </div>
                        {{-- TODO AJAX --}}
                        <div class="flex justify-center mt-6">
                            <a href="#" class="bg-white font-semibold my-3 px-6 py-2 rounded-full shadow-md dark:bg-gray-800 dark:text-white">
                                Load all ...</a>
                        </div>
                    </div>
                    {{-- GROUPS SECTION --}}
                    <div class="card md:p-6 p-2 max-w-3xl mx-auto">

                        <div class="flex justify-between items-start relative md:mb-4 mb-3">
                            <div class="flex-1">
                                <h2 class="text-2xl font-semibold"> Groups </h2>
                                <nav class="responsive-nav style-2 md:m-0 -mx-4">
                                    <ul>
                                        <li class="active"><a href="#"> Joined <span> 230</span> </a></li>
                                        <li><a href="#"> My Groups </a></li>
                                        <li><a href="#"> Discover </a></li> 
                                    </ul>
                                </nav>
                            </div>
                            <a href="create-group.html" data-tippy-placement="left" data-tippy="" data-original-title="Create New Album" class="bg-blue-100 font-semibold py-2 px-6 rounded-md text-sm md:mt-0 mt-3 text-blue-600">
                                Create       
                            </a>
                        </div>

                        <div class="grid md:grid-cols-2  grid-cols-2 gap-x-2 gap-y-4 mt-3"> 
                            <x-user.page name="Graphic Design"/>
                            <x-user.page name="Graphic Design"/>
                            <x-user.page name="Graphic Design"/>
                            <x-user.page name="Graphic Design"/>
                            <x-user.page name="Graphic Design"/>
                            <x-user.page name="Graphic Design"/>
                        </div>

                        <div class="flex justify-center mt-6">
                            <a href="#" class="bg-white dark:bg-gray-900 font-semibold my-3 px-6 py-2 rounded-full shadow-md dark:bg-gray-800 dark:text-white">
                                Load more ..</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout.layout>