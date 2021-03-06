@props(['user','preview'=>true,'invited'=>false, 'friends'=>false ])
<div class="flex items-center space-x-4 rounded-md p-2 hover:bg-gray-50">
    <a href="{{ route('profile', $user->username) }}" class="w-12 h-12 flex-shrink-0 overflow-hidden rounded-full relative">
        <img src="{{ $user->prof_image }}" class="absolute w-full h-full inset-0 " alt="">
    </a>
    <div class="flex-1">
        <a href="{{ route('profile', $user->username) }}" class="text-sm font-semibold capitalize">{{ $user->fullname}}</a>
        {{--  @if($user->id != auth()->id())
        TODO mutual friends too many queries
            @if (auth()->user()->mutual_friends($user))
                <div class="text-xs text-gray-500 mt-0.5"> <b>{{ auth()->user()->mutual_friends($user) }} mutual</b> friends</div>
            @endif
        @endif
        --}}
    </div>
    @if($user->id != auth()->id())
    <div class="flex items-center justify-center h-8 px-3 rounded-md text-sm border font-semibold bg-blue-500 text-white" >
        @if($friends)
            <div>Friends &check;</div>
        @elseif($invited)             
            <button class="add_friend{{ $user->id }}" onclick="remove_friend({{ $user->id }})" >Invite was sent &check;</button>
        @else{{-- not invited and not friends --}}
            <button class="add_friend{{ $user->id }}" onclick="add_friend({{ $user->id }})" ><ion-icon name="person-add-outline" class="w-5 h-5 pt-1"></ion-icon></button>
        @endif
    </div>
    @endif
</div>
@if($preview)
<div uk-drop="pos: left-center ;animation: uk-animation-slide-left-small" class="uk-drop uk-drop-left-center" style="left: 1348.38px; top: 211px;">
    <div class="contact-list-box">
        <div class="contact-avatar">
            <img src="{{ $user->prof_image }}" alt="">
        </div>
        <div class="contact-username mt-2">{{$user->fullname}}</div>
        <p class="-mt-1"> 
            <span class="text-gray-400">{{'@'.$user->username }}</span>
            @if($user->about_me)
                <hr class="my-1">
            @endif
            <p>{{ $user->about_me }}</p>
            {{--TODO maybe in future add this instead about me <ion-icon name="people" class="text-lg mr-1"></ion-icon> Become friends with 
            <strong> Stella Johnson </strong> and <strong> 14 Others</strong> --}}
        </p>
        <div class="contact-list-box-btns">
            <a href="{{ route('profile', $user->username) }}" class="flex-1 block bg-blue-500">
                <button type="button" class="button primary w-full">
                    <ion-icon name="person-circle-outline" class="w-5 h-5"></ion-icon> &nbsp;View Profile
                </button>
            </a>
        </div>
    </div>
</div>
@endif