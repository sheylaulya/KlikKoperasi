@extends('layouts/apps')

@section('css')
  <link rel="stylesheet" href="{{ asset('assets/css/detail.css') }}">
@endsection

@section('content')
<div class="containers">

    <div class="left-r">
        <a href="/product">
            <div class="back">
                <iconify-icon icon="material-symbols:arrow-back-rounded"></iconify-icon>
                <p>Kembali</p>
            </div>
        </a>
        <img src="/images/{{ $product->image }}" alt="">
    </div>
    <div class="right-r">
        <div class="first-row">
            <h1>{{ $product->nama }}</h1>
            <p>12 Terjual</p>
            <h2>Rp. {{ $product->harga }}</h2>
        </div>
        <div class="sec-r">
            <div class="tgl-expired">
                <p>Tanggal Kadaluarsa</p>
                <p>{{ $product->kadaluarsa }}</p>
            </div>
            <div class="weight">
                <p>Berat Satuan</p>
                <p>{{ $product->berat_satuan }}</p>
            </div>
            <div class="stock">
                <p>Stok</p>
                <p>{{ $product->stok }}</p>
            </div>
        </div>
        <div class="third-r">
            <div class="komposisi">
                <p>Komposisi</p>
                <p>{{ $product->komposisi }}</p>
            </div>
            <div class="desk">
                <p>Deskripsi</p>
                <p>{{ $product->deskripsi }}</p>
            </div>
        </div>
    </div>
</div>
@endsection