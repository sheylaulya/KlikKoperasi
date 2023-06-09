@extends('layouts/apps')

@section('css')
  <link rel="stylesheet" href="{{ asset('assets/css/products.css') }}">
@endsection

@section('content')
<div class="container">
    
    <div class="first-r">
        <a href="/">
            <div class="back">
                <iconify-icon icon="material-symbols:arrow-back-rounded"></iconify-icon>
                <p>Kembali</p>
            </div>
        </a>
        <h1>
            Produk Produk Kami
        </h1>
    </div>
    <div class="product">
        @if ($products->count() <= 0)
        <div class="content-not-found">
            <div class="context">
              <img src="{{ asset('assets/image/not-found.png') }}" alt="">
              <div class="right-context">
                <div class="top">
                  <h4>Oops, produk tidak ditemukan</h4>
                  <p>Coba kata kunci lain atau silahkan kembali</p>
                </div>
                <label for="search-web">
                  <a href="/">
                    <button>Change Keyword</button>
                </a>
                </label>
              </div>
            </div>
          </div>
        @else
            
        @foreach ($products as $product)
        <a href="{{ route('lp.show',$product->id) }}">
            <div class="p-card">
                <div class="top-r">
                    <p>{{ $product->tipe}}</p>
                </div>
                <img src="/images/{{ $product->image }}" alt="">
                <div class="desc">
                    <p>{{ $product->nama }}</p>
                    <div class="l-row">
                        <p>Rp{{number_format($product->harga,0,',','.')}}</p>
                        <p>Tersisa {{$product->stok}}</p>
                    </div>
                </div>
            </div>
        </a>
        @endforeach
        
        @endif
    </div>
    
    {{-- <div class="pagination">
        <span>
            <div class="index">1</div>
            <div class="index">2</div>
            <div class="index">3</div>
           
        </span>
        <svg viewBox="0 0 100 100">
            <path
                d="m 7.1428558,49.999998 c -1e-7,-23.669348 19.1877962,-42.8571447 42.8571442,-42.8571446 23.669347,0 42.857144,19.1877966 42.857144,42.8571446" />
        </svg>
        <svg viewBox="0 0 100 100">
            <path
                d="m 7.1428558,49.999998 c -1e-7,23.669347 19.1877962,42.857144 42.8571442,42.857144 23.669347,0 42.857144,-19.187797 42.857144,-42.857144" />
        </svg>
    </div> --}}

</div>
@endsection