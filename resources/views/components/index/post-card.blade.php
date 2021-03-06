<div class="card lg:mx-0 uk-animation-slide-bottom-small">
    <!-- post header-->
    <div class="flex justify-between items-center lg:p-4 p-2.5">
        <div class="flex flex-1 items-center space-x-4">
            <a href="{{ route('profile', $post->author->username) }}">
                <img src="{{ $post->author->prof_image }}"
                    class="bg-gray-200 border border-white rounded-full w-10 h-10">
            </a>
            <div class="flex-1 capitalize">
                <a href="{{ route('profile', $post->author->username) }}" class="text-black dark:text-gray-100 font-semibold">
                    {{ $post->author->fullname}}</a>
                <div class="text-gray-700 flex items-center space-x-2 font-medium">
                    {{$post->created_at->diffForHumans()}} <span> </span>
                    @if($post->who_can_see == '2') <ion-icon name="globe-outline"></ion-icon> @endif
                    @if($post->who_can_see == '1') <ion-icon name="people"></ion-icon> @endif
                    @if($post->who_can_see == '0') <ion-icon name="person"></ion-icon> @endif
                </div>
            </div>
        </div>
        @if($post->author->id == auth()->id())
        <div>
            <a href="#"> <i class="icon-feather-more-horizontal text-2xl hover:bg-gray-200 rounded-full p-2 transition -mr-1 dark:hover:bg-gray-700"></i>
            </a>
            <div class="bg-white w-56 shadow-md mx-auto p-2 mt-12 rounded-md text-gray-500 hidden text-base border border-gray-100 dark:bg-gray-900 dark:text-gray-100 dark:border-gray-700"
                uk-drop="mode: click;pos: bottom-right;animation: uk-animation-slide-bottom-small">
                <ul class="space-y-1">
                    <li>
                        <button uk-toggle="target: #post-edit{{ $post->id }}" type="button"
                            class=" w-full flex items-center px-3 py-2 hover:bg-gray-200 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                            <i class="uil-edit-alt mr-1"></i> Edit Post
                        </button>
                        <x-modal id="post-edit{{ $post->id }}" title="Edit Post">
                            <form method="POST" action="{{ route('post.update', $post->id) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="flex flex-1 items-start space-x-4 p-5">
                                    <img src="{{ $post->author->prof_image }}"
                                        class="bg-gray-200 border border-white rounded-full w-11 h-11">
                                    <div class="flex-1 pt-2">
                                        <textarea name="content"
                                            class="uk-textare rounded-xl border-0 text-black shadow-none focus:shadow-none text-xl font-medium resize-none"
                                            rows="5"
                                            placeholder="What's Your Mind ?">{{ $post->content }}</textarea>
                                        @if($post->img || $post->video)
                                        <div class="ml-auto w-40 h-40">
                                            @if($post->img)
                                            <img src="{{ $post->img }}" class="w-40 h-40">
                                            <div class="checkbox">
                                                <input id="remove_image{{ $post->id }}" type="checkbox"
                                                    name="remove_image">
                                                <label for="remove_image{{ $post->id }}" class="mb-0">
                                                    <span><span class="checkbox-icon"></span>Remove image</span>
                                                </label>
                                            </div>
                                            @endif
                                            @if($post->video)
                                            <video controls width="400" class="float-right">
                                                <source src="{{ Storage::url($post->video) }}">
                                                Your browser does not support HTML videos.
                                            </video>
                                            <div class="checkbox">
                                                <input id="remove_video{{ $post->id }}" type="checkbox"
                                                    name="remove_video">
                                                <label for="remove_video{{ $post->id }}" class="mb-0">
                                                    <span><span class="checkbox-icon"></span>Remove video</span>
                                                </label>
                                            </div>
                                            @endif
                                        </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="p-4 space-x-4 w-full">
                                    <div
                                        class="flex bg-gray-50 border border-purple-100 rounded-2xl p-2 shadow-sm items-center">
                                        <div class="ml-1"> Change image or video </div>
                                        <div class="flex flex-1 items-center justify-end space-x-2">
                                            <input name="image" type="file" hidden id="image{{ $post->id }}" accept="image/*">
                                            <label class="mb-0" for="image{{ $post->id }}">
                                                <svg class="bg-blue-100 h-9 p-1.5 rounded-full text-blue-600 w-9 cursor-pointer"
                                                    fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                                                    </path>
                                                </svg>
                                            </label>
                                            <input name="video" type="file" hidden id="video{{ $post->id }}"
                                                accept="video/mp4,video/x-m4v,video/*">
                                            <label class="mb-0" for="video{{ $post->id }}">
                                                <svg class="text-red-600 h-9 p-1.5 rounded-full bg-red-100 w-9 cursor-pointer"
                                                    fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z">
                                                    </path>
                                                </svg>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center w-full justify-between border-t p-3">
                                    <select name="who_can_see" class="selectpicker mt-2 story">
                                        <option value="2" {{ $post->who_can_see == 2 ? 'selected' : '' }}>Every one
                                        </option>
                                        <option value="1" {{ $post->who_can_see == 1 ? 'selected' : '' }}>Only my
                                            friends and their friends</option>
                                        <option value="0" {{ $post->who_can_see == 0 ? 'selected' : '' }}>Only me
                                        </option>
                                    </select>
                                    <div class="flex space-x-2">
                                        <button type="submit"
                                            class="bg-blue-600 flex h-9 items-center justify-center rounded-md text-white px-5 font-medium">
                                            Update </button>
                                    </div>
                                </div>
                            </form>
                        </x-modal>
                    </li>
                    <li>
                        @if($post->allow_comments)
                        <a id="comments-switch{{ $post->id }}" onclick="comments_switch({{ $post->id }},false)" href="#" class="flex items-center px-3 py-2 hover:bg-gray-200 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                            <i class="uil-comment-slash mr-1"></i> Disable comments
                        </a>
                        @else
                        <a id="comments-switch{{ $post->id }}" onclick="comments_switch({{ $post->id }},true)" href="#" class="flex items-center px-3 py-2 hover:bg-gray-200 hover:text-gray-800 rounded-md dark:hover:bg-gray-800">
                            <i class="uil-comment mr-1"></i> Enable comments
                        </a>
                        @endif
                    </li>
                    <li>
                        <hr class="-mx-2 my-2 dark:border-gray-800">
                    </li>
                    <li>
                        <button uk-toggle="target: #post-delete{{ $post->id }}" type="button"
                            class="flex items-center w-full px-3 py-2 text-red-500 hover:bg-red-100 hover:text-red-500 rounded-md dark:hover:bg-red-600">
                            <i class="uil-trash-alt mr-1"></i> Delete
                        </button>
                        <div id="post-delete{{ $post->id }}" uk-modal>
                            <div class="uk-modal-dialog uk-modal-body rounded-md">
                                <h2 class="text-xl">Are you sure you want to delete this post?</h2>
                                <p class="text-gray-500 mb-8">This action can't be undone.</p>
                                <form action="{{ route('post.destroy',  $post->id ) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="bg-red-500 text-white text-lg rounded-xl p-2 absolute bottom-4 right-4">Delete</button>
                                </form>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        @endif
    </div>

    <div class="p-3 pt-0 border-b dark:border-gray-700">
        <p>{{ $post->content }}</p>
        @if($post->img)
        <div uk-lightbox>
            <a href="{{ $post->img }}">
                <img src="{{ $post->img }}" alt="" class="w-full object-cover">
            </a>
        </div>
        @endif
        @if($post->image && $post->video)
            <hr class="my-2 dark:border-gray-800 mb-3"> 
        @endif
        @if($post->video)
        <video controls width="400" class="mx-auto">
            <source src="{{ Storage::url($post->video) }}">
            Your browser does not support HTML videos.
        </video>
        @endif
    </div>

    <div class="p-4 space-y-3">
        <div class="flex space-x-4 lg:font-bold">
            @if ($post->likedBy(auth()->user()))
            <div onclick="like({{ $post->id.','.$post->author->id}})" class="flex items-center space-x-2 cursor-pointer hover:text-blue-700">
                <div class="p-2 pt-3 rounded-full  text-black lg:bg-gray-100 dark:bg-gray-600 ">
                    <ion-icon id="like-icon{{ $post->id }}" name="thumbs-up" class="w-5 h-5 text-blue-500 @if($post->likedBy(auth()->user())) text-blue-500 @endif"></ion-icon>
                </div>
                <div id="like{{ $post->id }}" > Unlike</div>
            </div>
            @else
                <div onclick="like({{ $post->id.','.$post->author->id }})" class="flex items-center space-x-2 cursor-pointer hover:text-blue-700">
                    <div class="p-2 pt-3 rounded-full  text-black lg:bg-gray-100 dark:bg-gray-600 ">
                        <ion-icon id="like-icon{{ $post->id }}" name="thumbs-up" class="w-5 h-5"></ion-icon>
                    </div>
                    <div id="like{{ $post->id }}" > Like</div>
                </div>
            @endif
        </div>
        <a id="like-section{{ $post->id }}" uk-toggle="target:#all-likers{{ $post->id }}" class="flex items-center space-x-3 pt-2 hover:underline cursor-pointer"> 
            <div id="likers-images{{ $post->id }}" class="flex items-center">{{-- TODO maybe on click display modal with all users who like and columns for mutual and not mutual --}}
                @foreach ($post->likes->take(-3) as $liker) {{-- -3 means 3 from the end --}}              
                    @if($loop->iteration > 3 )
                        @break
                    @endif
                <img src="{{ $liker->user->prof_image }}" alt=""
                    class="w-6 h-6 rounded-full border-2 border-white dark:border-gray-900 -ml-2">
                @endforeach
            </div>
            <div id="has-likes{{ $post->id }}" class="dark:text-gray-100">
                {{-- this complicated relations displays latest user's first and last name who liked exactly this post --}}
                @if($post->likes->count())
                <span id="who-likes{{ $post->id }}">
                    Liked by <strong id="last-liker{{ $post->id }}"> {{ $post->likes->last()->user->fullname }}</strong>
                </span>
                <span id="likes{{ $post->id }}">
                    @if ($post->likes->count()>1)
                        and <strong > {{ $post->likes->count()-1 .' '. trans_choice('post.others',$post->likes->count()-1) }}  </strong>
                    @endif
                </span>
                @else
                    <strong>No one has liked yet</strong>
                @endif
            </div>
        </a>
        <div id="all-likers{{ $post->id }}" uk-modal>
            <div class="uk-modal-dialog uk-modal-body">
                <button class="uk-modal-close-default" type="button" uk-close></button>
                <h2 class="uk-modal-title">
                    <nav class="responsive-nav border-b extanded mb-2 -mt-2">
                        <ul uk-switcher="connect: #likers{{ $post->id }}; animation: uk-animation-fade">
                            <li class="uk-active"><a class="active" href="#"> All <span> {{ $post->likes->count() }} </span></a></li>
                            <li><a href="#">Your friends <span> 
                                @php $i=0; @endphp
                                @foreach ($post->likes as $liker)
                                    @if($liker->user->friendWith(auth()->user()))
                                        @php $i++; @endphp
                                    @endif
                                @endforeach
                                {{ $i }}
                            </span> </a></li>
                        </ul>
                    </nav>
                </h2>
                <div class="px-2 uk-switcher" id="likers{{ $post->id }}">
                    <div>
                        @forelse($post->likes as $liker)
                            @if(in_array($liker->user->id, Cache::get('invited_users'))){{-- true or false if is invited --}} 
                                <x-index.friend :user="$liker->user" :preview="false" :invited="true"/>
                            @elseif($liker->user->friendWith(auth()->user())) {{-- are friends --}}
                                <x-index.friend :user="$liker->user" :preview="false" :friends="true"/>
                            @else  {{-- not invited and not friend --}}
                                <x-index.friend :user="$liker->user" :preview="false" />
                            @endif
                        @empty{{-- THIS SHOULD BE DONE IN OTHER WAY - loading all likers for every post is unnecessary --}}
                            <div class="text-lg text-center pt-3 text-gray-400">
                                No one liked this post yet.
                            </div>
                        @endforelse
                    </div>
                    <div>
                        @foreach($post->likes as $liker)
                            @if($liker->user->friendWith(auth()->user()))
                                <x-index.friend :user="$liker->user" :preview="false" :friends="true"/>
                            @endif
                        @endforeach
                        @if ($i==0)
                            <div class="text-lg text-center pt-3 text-gray-400">
                                No one from your friends liked this post.
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        @if($post->allow_comments)
            <div class="border-t py-4 space-y-4 dark:border-gray-600">
                @if ($allComments)
                    @foreach ($post->comments as $comment)
                        <x-index.post-comment :comment="$comment"/>

                    @endforeach
                @else
                    @if($post->comments->count())            
                        <x-index.post-comment :comment="$post->comments[0]"/>
                    @else
                        <p class="text-center italic">There is no comments yet</p>
                    @endif
                @endif
            </div>
            @if($post->comments->count() > 1 && !$allComments)
                <a href="{{ route('post.show', $post->id) }}" class="hover:text-blue-600 hover:underline"> View {{ $post->comments->count()-1 }} more Comments </a>
            @endif
            <form method="POST" action="{{ route('comment.add', $post) }}">
                @csrf
                <div class="bg-gray-100 rounded-full relative dark:bg-gray-800 border-t">
                    <input name="content" placeholder="Add your Comment.." class="bg-transparent max-h-10 shadow-none px-5">
                </div>
            </form>
        @else
        <div class="bg-gray-100 rounded-full relative dark:bg-gray-800 border-t">
            <input disabled placeholder="Comments are disabled" class="bg-transparent max-h-10 shadow-none px-5">
        </div>
        @endif
    </div>
</div>
