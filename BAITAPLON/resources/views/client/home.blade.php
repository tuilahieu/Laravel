@extends('client.layout')

@section('content')

{{-- BANNER --}}
<div class="w-full h-[420px] bg-cover bg-center flex items-center justify-center text-white text-4xl font-bold"
    style="background-image: url('https://s3-hni02.higiocloud.vn/gppm2/prod/cms/17732139866031750.jpg')">
    <!-- NEW COLLECTION 2026 -->
</div>

{{-- CATEGORY --}}
<div class="max-w-7xl mx-auto mt-12 px-4">
    <h2 class="text-2xl font-bold text-center mb-8">Danh mục nổi bật</h2>

    <div class="grid grid-cols-2 md:grid-cols-4 gap-6">

        @foreach($categories as $c)
        <a href="/shop?category={{ $c->slug }}"
            class="bg-white rounded-2xl shadow hover:shadow-lg transition hover:-translate-y-1">

            <div class="h-36 bg-gray-200 flex items-center justify-center rounded-t-2xl">
                <span class="text-gray-400 text-sm">Ảnh</span>
            </div>

            <div class="p-4 text-center">
                <h3 class="font-semibold text-gray-800">
                    {{ $c->name }}
                </h3>
            </div>

        </a>
        @endforeach

    </div>
</div>

{{-- PRODUCT --}}
<div class="max-w-7xl mx-auto mt-14 px-4">
    <h2 class="text-2xl font-bold text-center mb-8">Sản phẩm mới</h2>

    <div class="grid grid-cols-2 md:grid-cols-4 gap-6">

        @forelse($products as $p)
        <div class="bg-white rounded-2xl shadow hover:shadow-lg transition">

            {{-- IMAGE --}}
            <a href="/product/{{ $p->slug }}">
                <img src="{{ asset('storage/'.$p->image) }}"
                    class="w-full h-52 object-cover rounded-t-2xl">
            </a>

            {{-- INFO --}}
            <div class="p-4 text-center">

                <h3 class="text-sm font-medium mb-2 text-gray-800 line-clamp-2">
                    {{ $p->name }}
                </h3>

                {{-- PRICE --}}
                @if($p->sale_price)
                <p class="text-gray-400 line-through text-sm">
                    {{ number_format($p->price) }}đ
                </p>

                <p class="text-red-500 font-bold text-lg">
                    {{ number_format($p->sale_price) }}đ
                </p>
                @else
                <p class="font-bold text-lg text-gray-800">
                    {{ number_format($p->price) }}đ
                </p>
                @endif

                {{-- BUTTON --}}
                <a href="/product/{{ $p->slug }}"
                    class="mt-3 block bg-black text-white py-2 rounded-lg hover:bg-gray-800">
                    Xem chi tiết
                </a>

            </div>
        </div>

        @empty
        <p class="col-span-4 text-center text-gray-500">
            Chưa có sản phẩm
        </p>
        @endforelse

    </div>
</div>

@endsection