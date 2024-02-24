<x-guest-layout>
    <!-- Session Status -->
    {{-- <x-auth-session-status class="mb-4" :status="session('status')" /> --}}


    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address or phone field -->
        <div>
            <label for="logininfo" class="block font-medium text-sm text-gray-700" > Email or Phone Number </label>
            <input id="logininfo" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" type="text" name="logininfo" :value="old('logininfo')" required />
            @if ($errors->has('logininfo'))
                <ul class="text-sm text-red-600 space-y-1">
                    @foreach ($errors->get('logininfo') as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
        </div>

        <!-- Password -->
        <div class="mt-4">
            <label for="password"class="block font-medium text-sm text-gray-700">Password</label>

            <input id="password" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            {{-- <x-input-error :messages="$errors->get('password')" class="mt-2" /> --}}
            @if ($errors->has('password'))
                <ul class="text-sm text-red-600 space-y-1 mt-2 ">
                    @foreach ($errors->get('password') as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <button type="submit" class="ms-3 inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                {{ __('Log in') }}
            </button>
        </div>
    </form>
</x-guest-layout>
