<style>
    body {
        backdrop-filter: blur(3px);
    }

    .card {
        margin-left: auto;
        margin-right: auto;
        margin-top: 10%;
        background: #f2f2f2;  /* fallback for old browsers */
        width: 500px;
        height: auto;
        box-shadow: 2px 2px 8px;
        border-radius: 30px;
        padding: 50px;
        opacity: 10px;
    }

    .loginH1 {
        font-size: 100px;
        text-align: center;
    }

    /* .right {
        padding-top: 220px;
        padding-left: 200px;
        width: 100%;
        margin-left: 75%;
        height: 100%;
        background-color: rgb(247, 247, 247);
        
    } */

    /* .form {
        padding: 20px;
    } */
/* https://www.linkpicture.com/q/Hug-an-anglophile.jpeg */
/* https://www.linkpicture.com/q/Морские-пейзажи-картины-фото.jpeg */

    /* .all {
        background-image: url("https://www.linkpicture.com/q/Wave-3.jpg");
        background-size: contain;
        background-repeat: no-repeat;
        /* width: 1300px; */
        height: 947px;
    } */
    
</style>
<body style="background-image: url('https://www.linkpicture.com/q/LPic61dd173c2e9584640947.jpg');">
<x-guest-layout>
    <div class="card">
        <div class="logo">
            <!-- <img src="https://www.linkpicture.com/q/Goal-PNG-File.png" /> -->
            <h1 class="loginH1">Login</h1>
            <x-slot name="logo">
                
            </x-slot>
        </div>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}" class="form">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </div>
</x-guest-layout>