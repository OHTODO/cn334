<style>
    .textH1 {
        font-size: 30px;
        text-align: center;
    }

    .card {
        margin-left: auto;
        margin-right: auto;
        margin-top: 15%;
        background: #f2f2f2;
        width: 500px;
        height: auto;
        box-shadow: 2px 2px 8px;
        border-radius: 30px;
        padding: 50px;
        opacity: 10px;
    }
</style>

<body style="background: #bdc3c7;
        background: -webkit-linear-gradient(to right, #bdc3c7, #2c3e50);
        background: linear-gradient(to right, #bdc3c7, #2c3e50);">
<x-guest-layout>
    <!-- <x-jet-authentication-card> -->
    <div class="card">
        <h1 class="textH1">Want to reset password ?</h1>
        <x-slot name="logo">
            
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-jet-button>
                    {{ __('Email Password Reset Link') }}
                </x-jet-button>
            </div>
        </form>
    </div>
    <!-- </x-jet-authentication-card> -->
</x-guest-layout>
