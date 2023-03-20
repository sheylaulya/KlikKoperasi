@extends('layouts/apps')

@section('css')
  <link rel="stylesheet" href="{{ asset('assets/css/detail.css') }}">
@endsection

@section('content')
<div class="containers">

    <div class="left-r">
        <a href="/products">
            <div class="back">
                <iconify-icon icon="material-symbols:arrow-back-rounded"></iconify-icon>
                <p>Kembali</p>
            </div>
        </a>
        <img src="{{asset('assets/image/chitato.jpg')}}" alt="">
    </div>
    <div class="right-r">
        <div class="first-row">
            <h1>Chitato Sapi Panggang</h1>
            <p>12 Terjual</p>
            <h2>Rp.9000</h2>
        </div>
        <div class="sec-r">
            <div class="tgl-expired">
                <p>Tanggal Kadaluarsa</p>
                <p>24 Agustus 2023</p>
            </div>
            <div class="weight">
                <p>Berat Satuan</p>
                <p>500g</p>
            </div>
            <div class="stock">
                <p>Stok</p>
                <p>20 Bungkus</p>
            </div>
        </div>
        <div class="third-r">
            <div class="komposisi">
                <p>Komposisi</p>
                <p>Kentang (65%), minyak kelapa sawit, bumbu rasa sapi panggang (mengandung kedelai, susu, ikan, gandum, ekstrak daging sapi (1%), penguat rasa mononatrium glutamat, dinatrium inosinat dinatrium guanilat)."</p>
            </div>
            <div class="desk">
                <p>Deskripsi</p>
                <p>Chitato terbuat dari kentang segar yang diiris bergelombang dan dibumbuhi dengan bumbu dari seluruh dunia. Keripik kentang CHITATO dengan beef barbeque. Dibuat dari kentang berkualitas yang menghasilkan rasa gurih. Renyahnya keripik menyatu dengan taburan bumbu spesial. Life is never flat.</p>
            </div>
        </div>
    </div>
</div>
@endsection