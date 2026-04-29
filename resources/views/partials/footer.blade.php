<footer class="bg-gray-900 text-gray-300">
    <div class="max-w-7xl mx-auto px-6 py-12 grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-8">
        
        <!-- Brand -->
        <div class="col-span-2">
            <h2 class="text-white text-xl font-bold mb-4">Loket</h2>
            <p class="text-sm">
                {{ __('app.footer.tagline') }}
            </p>
        </div>

        <!-- Kolom 1 -->
        <div>
            <h3 class="text-white font-semibold mb-3">{{ __('app.footer.product') }}</h3>
            <ul class="space-y-2 text-sm">
                <li><a href="{{ route('buat-event') }}" class="hover:text-white">{{ __('app.footer.create_event') }}</a></li>
                <li><a href="/Jelajah" class="hover:text-white">{{ __('app.footer.find_event') }}</a></li>
                <li><a href="#" class="hover:text-white">{{ __('app.footer.promo') }}</a></li>
            </ul>
        </div>

        <!-- Kolom 2 -->
        <div>
            <h3 class="text-white font-semibold mb-3">{{ __('app.footer.company') }}</h3>
            <ul class="space-y-2 text-sm">
                <li><a href="/about-us" class="hover:text-white">{{ __('app.footer.about_us') }}</a></li>
                <li><a href="/career" class="hover:text-white">{{ __('app.footer.career') }}</a></li>
                <li><a href="/company-blog" class="hover:text-white">{{ __('app.footer.blog') }}</a></li>
            </ul>
        </div>

        <!-- Kolom 3 -->
        <div>
            <h3 class="text-white font-semibold mb-3">{{ __('app.footer.help') }}</h3>
            <ul class="space-y-2 text-sm">
                <li><a href="/bantuan" class="hover:text-white">{{ __('app.footer.faq') }}</a></li>
                <li><a href="/contact" class="hover:text-white">{{ __('app.footer.contact') }}</a></li>
                <li><a href="/term" class="hover:text-white">{{ __('app.footer.terms') }}</a></li>
            </ul>
        </div>

        <!-- Kolom 4 -->
        <div>
            <h3 class="text-white font-semibold mb-3">{{ __('app.footer.follow_us') }}</h3>
            <ul class="space-y-2 text-sm">
                <li><a href="#" class="hover:text-white">Instagram</a></li>
                <li><a href="#" class="hover:text-white">Twitter</a></li>
                <li><a href="#" class="hover:text-white">Facebook</a></li>
            </ul>
        </div>
    </div>

    <!-- Bottom -->
    <div class="border-t border-gray-700 text-center py-4 text-sm">
        © {{ date('Y') }} Loket. {{ __('app.footer.all_rights_reserved') }} 
    </div>
</footer>
