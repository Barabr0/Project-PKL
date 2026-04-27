@extends('layouts.master')

@section('title', 'Beli Tiket Film')

@section('content')

@php 
    $step = 1;
@endphp
<div class="max-w-6xl mx-auto px-4 py-8">

    <div class="rounded-xl overflow-hidden mb-6 h-64 md:h-96">
        <img src="{{ $gambar }}" class="w-full h-full object-cover">
    </div>

    <h2 class="text-center font-bold text-2xl text-blue-700 mb-6 uppercase">
        {{ $title }}
    </h2>

    <div class="grid md:grid-cols-3 gap-6">

        <div class="md:col-span-2 space-y-4">

            <div class="ticket-card border rounded-xl p-4 bg-white shadow-sm hover:shadow-md transition">
                <div class="flex justify-between items-start">
                    <div>
                        <h3 class="font-bold text-lg text-gray-800">Tiket Reguler</h3>
                        <p class="text-sm text-gray-500 mt-1">Akses menonton film pilihan Anda.</p>
                    </div>
                </div>

                <div class="mt-6 flex justify-between items-center border-t pt-4">
                    <span class="font-bold text-blue-600 text-xl ticket-price" data-price="{{ $price }}">
                        Rp {{ number_format($price, 0, ',', '.') }}
                    </span>

                    <div class="flex items-center space-x-3 bg-gray-50 border rounded-lg px-2 py-1">
                        <button type="button" onclick="updateTicket(this, -1)" class="w-10 h-10 flex items-center justify-center">-</button>
                        <input type="number" value="0" min="0" max="10" class="ticket-qty w-10 text-center bg-transparent border-none p-0 font-bold text-lg" readonly>
                        <button type="button" onclick="updateTicket(this, 1)" class="w-10 h-10 flex items-center justify-center">+</button>
                    </div>
                </div>
            </div>

        </div>

        <div>
            <div class="bg-white border rounded-2xl p-6 shadow-lg sticky top-24">
                <h3 class="font-bold text-lg mb-4">Detail Pesanan</h3>

                <div class="space-y-3 mb-6">
                    <div class="flex justify-between text-sm">
                        <span>Jumlah Tiket</span>
                        <span id="subtotal-qty" class="font-semibold">0</span>
                    </div>
                    <div class="flex justify-between text-lg font-bold border-t pt-3">
                        <span>Total Bayar</span>
                        <span id="subtotal-price">Rp 0</span>
                    </div>
                </div>

                <a href="{{ route('biodata', ['type' => 'movie', 'id' => $id_item]) }}" 
                   class="inline-block w-full text-center bg-blue-600 text-white py-4 rounded-xl font-bold text-lg hover:bg-blue-700 hover:shadow-lg transform active:scale-95 transition-all">
                    Bayar Sekarang
                </a>
            </div>
        </div>

    </div>

</div>

<script>
function updateTicket(btn, change) {
    let card = btn.closest('.ticket-card');
    let input = card.querySelector('.ticket-qty');
    let current = parseInt(input.value) || 0;
    let max = parseInt(input.max) || 10;
    let newVal = current + change;
    if (newVal < 0) newVal = 0;
    if (newVal > max) newVal = max;
    input.value = newVal;
    calculateTotal();
}

function calculateTotal() {
    let cards = document.querySelectorAll('.ticket-card');
    let totalQty = 0;
    let totalPrice = 0;

    cards.forEach(card => {
        let qty = parseInt(card.querySelector('.ticket-qty').value) || 0;
        let price = parseInt(card.querySelector('.ticket-price').dataset.price) || 0;
        totalQty += qty;
        totalPrice += qty * price;
    });

    let format = new Intl.NumberFormat('id-ID', {
        style: 'currency',
        currency: 'IDR',
        minimumFractionDigits: 0
    });

    document.getElementById('subtotal-qty').innerText = totalQty;
    document.getElementById('subtotal-price').innerText = format.format(totalPrice).replace(',00','');
}

window.onload = calculateTotal;
</script>

@endsection