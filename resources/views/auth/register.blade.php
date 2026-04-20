<x-guest-layout>

<div class="min-h-screen grid md:grid-cols-2">

    <!-- 🔵 KIRI -->
    <div class="hidden md:flex items-center justify-center bg-blue-600 text-white p-10">

        <div class="max-w-md">
            <h1 class="text-4xl font-bold mb-4">
                Gabung Sekarang 🚀
            </h1>

            <p class="text-lg text-white/80">
                Buat akun dan temukan berbagai event seru, workshop, konser, dan seminar hanya di MyEvent.
            </p>
        </div>

    </div>

    <!-- ⚪ KANAN -->
    <div class="flex items-center justify-center bg-gray-100 p-6">

        <div class="w-full max-w-md bg-white rounded-2xl shadow-sm p-8">

            <!-- TITLE -->
            <h2 class="text-2xl font-bold text-center mb-2">
                Daftar Akun
            </h2>
            <p class="text-center text-gray-500 text-sm mb-6">
                Buat akun untuk mulai eksplor event 🎉
            </p>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <div>
                    <x-input-label for="name" :value="__('Name')" />
                    <x-text-input 
                        id="name" 
                        name="name"
                        type="text"
                        :value="old('name')" 
                        required autofocus autocomplete="name"
                        class="block mt-1 w-full rounded-lg border border-gray-300 bg-white text-gray-900 focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                    />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Email -->
                <div class="mt-4">
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input 
                        id="email" 
                        name="email"
                        type="email"
                        :value="old('email')" 
                        required autocomplete="username"
                        class="block mt-1 w-full rounded-lg border border-gray-300 bg-white text-gray-900 focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                    />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Password')" />
                    <x-text-input 
                        id="password" 
                        name="password"
                        type="password"
                        required autocomplete="new-password"
                        class="block mt-1 w-full rounded-lg border border-gray-300 bg-white text-gray-900 focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                    />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div class="mt-4">
                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                    <x-text-input 
                        id="password_confirmation" 
                        name="password_confirmation"
                        type="password"
                        required autocomplete="new-password"
                        class="block mt-1 w-full rounded-lg border border-gray-300 bg-white text-gray-900 focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                    />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <!-- BUTTON -->
                <div class="mt-6">

                    <button type="submit" 
                        class="w-full bg-blue-600 text-white py-2 rounded-lg font-semibold hover:bg-blue-700 transition">
                        Register
                    </button>

                    <p class="text-center text-sm text-gray-500 mt-4">
                        Sudah punya akun?
                        <a href="{{ route('login') }}" class="text-blue-600 hover:underline">
                            Login
                        </a>
                    </p>

                </div>

            </form>

        </div>

    </div>

</div>

</x-guest-layout>