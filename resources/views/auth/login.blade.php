<head>
    <link href="{{ asset('Front/css') }}/style.css" rel="stylesheet">
</head>


<body class="body-login">
    <div class="form-login">

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <label for="email" value="{{ __('Email') }}"></label>
                <input id="email" placeholder="Email" class="block mt-1 w-full" type="email" name="email"
                    :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <label for="password" value="{{ __('Password') }}"></label>
                <input id="password" placeholder="Password" class="block mt-1 w-full" type="password" name="password"
                    required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <label class="control control-checkbox">
                        {{ __('Remember me') }}
                        <input type="checkbox" checked="checked" />
                        <div class="control_indicator"></div>
                    </label>
                </label>
            </div>
            <br>

            <div class="flex items-center justify-end mt-4">

                <button class="button-login ml-4">
                    {{ __('Log in') }}
                </button>
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900"
                        href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                    <a class="underline text-sm text-gray-600 hover:text-gray-900"
                        href="{{ route('password.request') }}">
                        {{ __('Register?') }}
                    </a>
                @endif
            </div>
        </form>
    </div>
</body>
