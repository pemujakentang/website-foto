<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <label for="name" class="block font-medium text-sm text-gray-700" > Name </label>
            <input id="name" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            @if ($errors->has('name'))
                <ul class="text-sm text-red-600 space-y-1">
                    @foreach ($errors->get('name') as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <label for="email" class="block font-medium text-sm text-gray-700" >Email</label>
            <input id="email" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            @if ($errors->has('email'))
                <ul class="text-sm text-red-600 space-y-1">
                    @foreach ($errors->get('email') as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
        </div>

        <!-- Phone -->
        <div class="mt-4">
            <label for="phone" class="block font-medium text-sm text-gray-700" >Phone Number</label>
            <input id="phone" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" type="text" name="phone" :value="old('phone')" required autofocus autocomplete="phone" />
            @if ($errors->has('phone'))
                <ul class="text-sm text-red-600 space-y-1">
                    @foreach ($errors->get('phone') as $error)
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
            required autocomplete="new-password" />

            @if ($errors->has('password'))
                <ul class="text-sm text-red-600 space-y-1 mt-2 ">
                    @foreach ($errors->get('password') as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <label for="password_confirmation"class="block font-medium text-sm text-gray-700">Confirm Password</label>

            <input id="password_confirmation" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
            type="password"
            name="password_confirmation"
            required autocomplete="new-password" />

            @if ($errors->has('password_confirmation'))
                <ul class="text-sm text-red-600 space-y-1 mt-2 ">
                    @foreach ($errors->get('password_confirmation') as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <button type="submit" class="ms-4 inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                {{ __('Register') }}
            </button>
        </div>
    </form>
</x-guest-layout>
