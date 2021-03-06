<div class="bg-white py-4 shadow dark:bg-gray-800">
    <div class="max-w-6xl mx-auto">
        <div class="flex items-center lg:justify-between justify-around">
            <a href="/">
                <img src="{{ asset('assets/images/logo.png') }}" alt="" class="w-32">
            </a>

            <div class="capitalize flex font-semibold my-2 space-x-3 text-sm">
                <a href="{{ route('login') }}" class="py-3 px-4">Login</a>
                <a href="{{ route('register') }}" class="bg-purple-500 purple-500 px-6 py-3 rounded-md shadow text-white">Register</a>
            </div>
        </div>
    </div>
</div>