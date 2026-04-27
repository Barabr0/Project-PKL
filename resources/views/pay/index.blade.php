@extends('layouts.master')

@section('title', 'Beli Tiket Event')

@section('content')

<div class="max-w-6xl mx-auto px-4 py-8">

    <!-- Banner -->
    <div class="rounded-xl overflow-hidden mb-6 h-64 md:h-96">
        <img src="{{ $gambar }}" class="w-full h-full object-cover">
    </div>

    <!-- Judul -->
    <h2 class="text-center font-bold text-2xl text-blue-700 mb-6 uppercase">
        {{ $title }}
    </h2>

    <!-- Layout -->
    <div class="grid md:grid-cols-3 gap-6">

        <!-- KIRI -->
        <div class="md:col-span-2 space-y-4">

            <!-- Ticket Card -->
            <div class="border rounded-xl p-4 bg-white shadow-sm hover:shadow-md transition">
                <div class="flex justify-between items-start">
                    <div>
                        <h3 class="font-bold text-lg text-gray-800">
                            {{ $type === 'movie' ? 'Tiket Reguler' : 'General Admission' }}
                        </h3>
                        <p class="text-sm text-gray-500 mt-1">
                            {{ $type === 'movie' ? 'Akses menonton film pilihan Anda.' : 'Tiket masuk event standar.' }}
                        </p>
                    </div>
                </div>

                <div class="mt-6 flex justify-between items-center border-t pt-4">
                    <span class="font-bold text-blue-600 text-xl ticket-price" data-price="{{ $price }}">
                        Rp {{ number_format($price, 0, ',', '.') }}
                    </span>

                    <div class="flex items-center space-x-3 bg-gray-50 border rounded-lg px-2 py-1">
                        <button type="button" 
                            onclick="updateTicket(this, -1)"
                            class="w-10 h-10 rounded-md flex items-center justify-center text-gray-500 hover:bg-white hover:shadow focus:outline-none transition-all">
                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4" /></svg>
                        </button>
                        <input type="number" name="qty" value="0" min="0" max="10" 
                            class="ticket-qty w-10 text-center bg-transparent border-none p-0 focus:ring-0 font-bold text-gray-800 text-lg" readonly>
                        <button type="button" 
                            onclick="updateTicket(this, 1)"
                            class="w-10 h-10 rounded-md flex items-center justify-center text-blue-600 hover:bg-white hover:shadow focus:outline-none transition-all">
                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" /></svg>
                        </button>
                    </div>
                </div>
            </div>

            @if($type === 'event')
            <!-- Additional Ticket Card for Events -->
            <div class="border rounded-xl p-4 bg-white shadow-sm hover:shadow-md transition">
                <div class="flex justify-between items-start">
                    <div>
                        <h3 class="font-bold text-lg text-gray-800">VIP Ticket</h3>
                        <p class="text-sm text-gray-500 mt-1">Akses eksklusif, baris depan, dan merchandise.</p>
                    </div>
                </div>

                <div class="mt-6 flex justify-between items-center border-t pt-4">
                    <span class="font-bold text-blue-600 text-xl ticket-price" data-price="{{ $price * 2 }}">
                        Rp {{ number_format($price * 2, 0, ',', '.') }}
                    </span>

                    <div class="flex items-center space-x-3 bg-gray-50 border rounded-lg px-2 py-1">
                        <button type="button" 
                            onclick="updateTicket(this, -1)"
                            class="w-10 h-10 rounded-md flex items-center justify-center text-gray-500 hover:bg-white hover:shadow focus:outline-none transition-all">
                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4" /></svg>
                        </button>
                        <input type="number" name="qty_vip" value="0" min="0" max="10" 
                            class="ticket-qty w-10 text-center bg-transparent border-none p-0 focus:ring-0 font-bold text-gray-800 text-lg" readonly>
                        <button type="button" 
                            onclick="updateTicket(this, 1)"
                            class="w-10 h-10 rounded-md flex items-center justify-center text-blue-600 hover:bg-white hover:shadow focus:outline-none transition-all">
                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" /></svg>
                        </button>
                    </div>
                </div>
            </div>
            @endif

        </div>

        <!-- KANAN -->
        <div>
            <div class="bg-white border rounded-2xl p-6 shadow-lg sticky top-24">
                <h3 class="font-bold text-lg mb-4 border-bottom pb-2">Detail Pesanan</h3>

                <div class="space-y-3 mb-6">
                    <div class="flex justify-between text-sm text-gray-600">
                        <span>Jumlah Tiket</span>
                        <span id="subtotal-qty" class="font-semibold text-gray-900">0</span>
                    </div>
                    <div class="flex justify-between text-lg font-bold border-t pt-3 mt-3">
                        <span>Total Bayar</span>
                        <span id="subtotal-price" class="text-blue-700">Rp 0</span>
                    </div>
                </div>

                <button class="w-full bg-blue-600 text-white py-4 rounded-xl font-bold text-lg hover:bg-blue-700 hover:shadow-lg transform active:scale-95 transition-all">
                    Bayar Sekarang
                </button>
                
                <p class="text-center text-xs text-gray-400 mt-4 italic">
                    *Harga sudah termasuk pajak dan biaya layanan.
                </p>
            </div>
        </div>

    </div>

</div>

<script>
    function updateTicket(btn, change) {
        let input = btn.parentElement.querySelector('input');
        let currentVal = parseInt(input.value) || 0;
        let newVal = currentVal + change;
        
        if (newVal >= 0 && newVal <= parseInt(input.max)) {
            input.value = newVal;
            calculateTotal();
        }
    }

    function calculateTotal() {
        let items = document.querySelectorAll('.ticket-qty');
        let totalTickets = 0;
        let totalPrice = 0;

        items.forEach(item => {
            let qty = parseInt(item.value) || 0;
            if (qty > 0) {
                let priceElement = item.closest('.border').querySelector('.ticket-price');
                let price = parseInt(priceElement.getAttribute('data-price')) || 0;
                
                totalTickets += qty;
                totalPrice += (qty * price);
            }
        });

        // Format to Rupiah
        let formatter = new Intl.NumberFormat('id-ID', {
            style: 'currency',
            currency: 'IDR',
            minimumFractionDigits: 0
        });

        document.getElementById('subtotal-qty').innerText = totalTickets;
        document.getElementById('subtotal-price').innerText = formatter.format(totalPrice);
    }
</script>

@endsection