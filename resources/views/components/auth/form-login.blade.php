<x-layout.layout :showSideBar="false">
    <x-slot name="title">Register now!</x-slot>

    <x-slot name="styles">
        <link rel="preconnect" href="https://fonts.gstatic.com/">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">
        <style>
            input , .bootstrap-select.btn-group button{
                background-color: #f3f4f6  !important;
                height: 44px  !important;
                box-shadow: none  !important; 
            }
        </style>
    </x-slot>
           <x-auth.top-bar />
            <!-- Content-->
            <div>
                <div class="lg:p-12 max-w-xl lg:my-0 my-12 mx-auto p-6 space-y-">
                    <form action="{{ route('login') }}" method="POST" class="lg:p-10 p-6 space-y-3 relative bg-white shadow-xl rounded-md">
                        @csrf
                        <h1 class="lg:text-2xl text-xl font-semibold mb-6"> Login </h1>
                        <!-- Session Status -->
                        <x-flash-messages.auth-session-status class="mb-4 p-4 bg-green-100 rounded-xl" :status="session('status')" />

                        <!-- Validation Errors -->
                        <x-flash-messages.auth-validation-errors class="mb-4 p-4 bg-red-100 rounded-xl" :errors="$errors"/>
                        
                        <div>
                            <label class="mb-0  @error('email') text-red-500 @enderror"> Email Address </label>
                            <input name="email" type="email" class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full @error('email') border-2 border-red-500 @enderror" value="{{ old('email') }}">
                        </div>
                        <div>
                            <label class="mb-0 @error('password') text-red-500 @enderror"> Password </label>
                            <input name="password" type="password" class="bg-gray-100 h-12 mt-2 px-3 rounded-md w-full @error('password') border-2 border-red-500 @enderror">
                        </div>
                        <div class="checkbox">
                            <input id="remember_me" type="checkbox"  name="remember">
                            <label for="remember_me" class="mb-0">
                                <span><span class="checkbox-icon"></span>{{ __('Remember me') }}</span>
                            </label>
                        </div>
                        <div>
                            @if (Route::has('password.request'))
                                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                            @endif
                        <button type="submit" class="bg-blue-600 font-semibold p-2 mt-5 rounded-md text-center text-white w-full">
                            Log In!
                        </button>
                        </div>
                    </form>
                    <a href="{{ route('auth.google') }}">
                        <button class="bg-red-500 font-semibold p-2 mt-5 rounded-md text-center text-white w-full">
                            Log In with Google Account! <ion-icon name="logo-google" class="w-5 h-5 md hydrated fixed ml-24"></ion-icon>
                        </button>
                    </a>
                    <a href="{{ route('auth.github') }}">
                        <button class="bg-gray-700 font-semibold p-2 mt-5 rounded-md text-center text-white w-full">
                            Log In with Github Account! <ion-icon name="logo-github" class="w-5 h-5 md hydrated fixed ml-24"></ion-icon>
                        </button>
                    </a>
                </div>
            </div>
</x-layout.layout>