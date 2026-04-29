<x-guest-layout>

<div class="min-h-screen grid md:grid-cols-2">

    <!-- 🔵 KIRI -->
    <div class="hidden md:flex items-center justify-center bg-blue-600 text-white p-10">

        <div class="max-w-md">
            <h1 class="text-4xl font-bold mb-4">
                {{ __('app.auth.login_welcome') }}
            </h1>

            <p class="text-lg text-white/80 leading-relaxed">
                {{ __('app.auth.login_subtitle') }}
            </p>
        </div>

    </div>

    <!-- ⚪ KANAN -->
    <div class="flex items-center justify-center bg-white p-6">

        <div class="w-full max-w-md bg-white rounded-2xl shadow-md p-8">

            <!-- TITLE -->
            <h2 class="text-2xl font-bold text-center mb-2">
                {{ __('app.auth.login_title') }}
            </h2>

            <p class="text-center text-gray-500 text-sm mb-6">
                {{ __('app.auth.login_sub') }}
            </p>

            <!-- STATUS -->
            <x-auth-session-status class="mb-4 text-center text-green-500" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- EMAIL -->
                <div>
                    <x-input-label for="email" :value="__('Email')" class="text-gray-700"/>
                    <x-text-input 
                        id="email" 
                        name="email"
                        type="email"
                        :value="old('email')" 
                        required autofocus autocomplete="username"
                        class="block mt-1 w-full rounded-lg border border-gray-300 bg-white text-gray-900 focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                    />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- PASSWORD -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Password')" class="text-gray-700"/>
                    <x-text-input 
                        id="password" 
                        name="password"
                        type="password"
                        required autocomplete="current-password"
                        class="block mt-1 w-full rounded-lg border border-gray-300 bg-white text-gray-900 focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                    />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- REMEMBER + FORGOT -->
                <div class="flex items-center justify-between mt-4 text-sm">

                    <label class="flex items-center text-gray-600">
                        <input type="checkbox" name="remember" class="mr-2 rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                        {{ __('app.auth.remember_me') }}
                    </label>

                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="text-blue-600 hover:underline">
                            {{ __('app.auth.forgot_password') }}
                        </a>
                    @endif

                </div>

                <!-- BUTTON -->
                <div class="mt-6">

                    <button type="submit" 
                        class="w-full bg-blue-600 text-white py-2.5 rounded-lg font-semibold hover:bg-blue-700 transition">
                        {{ __('app.auth.login_title') }}
                    </button>

                    <p class="text-center text-sm text-gray-500 mt-4">
                        {{ __('app.auth.no_account') }}
                        <a href="{{ route('register') }}" class="text-blue-600 hover:underline font-medium">
                            {{ __('app.auth.register_link') }}
                        </a>
                    </p>

                </div>

            </form>

        </div>

    </div>

</div>

</x-guest-layout>