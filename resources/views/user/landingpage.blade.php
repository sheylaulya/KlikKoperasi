@extends('layouts/apps')

@section('content')
<div class="container">
  <div class="hero">
    <div class="left-hero">
      <h1>Klik Koperasi,<br> Semua ada</h1>
      <p>Temukan Jajanan Murah, Enak dan Sehat</p>
      <a href="/product">
        <button class="btn-jajan">Jajan Sekarang!</button>
      </a>
    </div>
    <div class="right-hero mt-5">
      <div class="wrapper">
        <div class="card-minuman">
          <div class="bg-minuman">
            <img src="{{ asset('assets/image/minuman.png')}}" alt="">
          </div>
          <p>Minuman</p>
        </div>
        <div class="card-makanan">
          <div class="bg-makanan">
            <img src="{{ asset('assets/image/makanan.png')}}" alt="">
          </div>
          <p>Makanan</p>
        </div>
        <div class="card-eskrim">
          <div class="bg-eskrim">
            <img src="{{ asset('assets/image/eskrim.png')}}" alt="">
          </div>
          <p>Es Krim</p>
        </div>
        <div class="card-buatan">
          <div class="bg-buatan">
            <img src="{{ asset('assets/image/buatan.png')}}" alt="">
          </div>
          <p>Buatan Rumahan</p>
        </div>
      </div>
    </div>
  </div>

  <div class="content">
    <div class="company-profile">
      <div class="img-company">
        <img src="{{ asset('assets/image/koprasi.png')}}" alt="">
      </div>
      <div class="about-company">
        <h1>Koperasi Starbhak?</h1>
        <p>Koperasi Starbhak adalah sebuah koperasi yang bergerak dalam bidang penjualan makanan dan minuman di
          lingkungan sekolah. Didirikan dengan tujuan untuk memberikan pelayanan terbaik bagi para pelajar dan tenaga
          pendidik di lingkungan sekolah, Koperasi Starbhak telah menjadi salah satu penyedia makanan dan minuman
          terkemuka di sekolah tersebut Koperasi Starbhak menyediakan berbagai macam menu makanan dan minuman yang
          berkualitas tinggi dan sesuai dengan standar gizi yang diperlukan untuk pertumbuhan dan perkembangan
          pelajar. Menu-menu yang disediakan meliputi makanan ringan, makanan berat, minuman dingin dan panas, serta
          makanan sehat untuk para pelajar yang memerlukan asupan gizi yang lebih</p>
      </div>
    </div>

    <div class="user-experience">
      <div class="top-experience">
        <div class="left-experience">
          <h1>Kenyamanan Pelanggan adalah yang Utama Bagi Kami</h1>
        </div>
        <div class="right-experience">
          <div class="line"></div>
          <p>Note : <br>
            Kami akan memastikan pelanggan mendapatkan pelayanan terbaik</p>
        </div>
      </div>
      <div class="bot-experience">
        <div class="experience-wrap">
          <div class="card-exp">
            <div class="icon">
              <img src="{{ asset('assets/image/icon.png')}}" alt="">
            </div>
            <div class="text">
              <h1>Produk Baru!</h1>
              <p>Kami menjual produk produk yang fresh dan baru</p>
            </div>
          </div>
          <div class="card-exp">
            <div class="icon">
              <img src="{{ asset('assets/image/icon.png')}}" alt="">
            </div>
            <div class="text">
              <h1>Produk Baru!</h1>
              <p>Kami menjual produk produk yang fresh dan baru</p>
            </div>
          </div>
          <div class="card-exp">
            <div class="icon">
              <img src="{{ asset('assets/image/icon.png')}}" alt="">
            </div>
            <div class="text">
              <h1>Produk Baru!</h1>
              <p>Kami menjual produk produk yang fresh dan baru</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="faqs">
    <div class="header">
      <h1>Pertanyaan Yang Banyak Ditanyakan</h1>
      <p>Kami telah menampung pertanyaan pertanyaan yang sering ditayakan pelanggan, dan begini jawabannya</p>
    </div>
    <div class="wrap-faqs">
      <div class="card-faqs">
        <p>Min ko harga snacknya mahal mahal sih?</p>
        <button class="btn-more">+</button>
      </div>  
    </div>
  </div>
</div>
@endsection