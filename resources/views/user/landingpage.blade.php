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
                    lingkungan sekolah. Didirikan dengan tujuan untuk memberikan pelayanan terbaik bagi para pelajar dan
                    tenaga
                    pendidik di lingkungan sekolah, Koperasi Starbhak telah menjadi salah satu penyedia makanan dan
                    minuman
                    terkemuka di sekolah tersebut Koperasi Starbhak menyediakan berbagai macam menu makanan dan minuman
                    yang
                    berkualitas tinggi dan sesuai dengan standar gizi yang diperlukan untuk pertumbuhan dan perkembangan
                    pelajar. Menu-menu yang disediakan meliputi makanan ringan, makanan berat, minuman dingin dan panas,
                    serta
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
                            <img src="{{ asset('assets/image/enak.png')}}" alt="">
                        </div>
                        <div class="text">
                            <h1>Produk Enak!</h1>
                            <p>Kami menjual produk produk yang enak !</p>
                        </div>
                    </div>
                    <div class="card-exp">
                        <div class="icon">
                            <img src="{{ asset('assets/image/halal.png')}}" style="width: 80px" alt="">
                        </div>
                        <div class="text">
                            <h1>Produk Hala!</h1>
                            <p>Kami menjual produk produk yang sudah terjamin kehalalannya !</p>
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
        <div class="wrapper">
            <div class="containers">
                <div class="question">
                    Kok harga dagangannya sering naik turun sih
                </div>
                <div class="answercont">
                    <div class="answer">
                      halo sobat starbhak ! kami mohon maaf atas ketidaknyamanannya. Naik dan turunnya harga dangangan kami sudah ditentukan oleh SOP dan MOU yang berlaku, sehingga kami tidak dapat menentukan secara pasti harga produk yang kami jual akan tetap sama dalam jangka waktu yang lama. oleh karena itu, tetap stay tuned di website klikkoperasi untuk tahu harga harga produk terbaru kami ya !
                     <br><br>
                    </div>
                </div>
            </div>
            <div class="containers" id="containers2">
              <div class="question">
                  Gimana caranya jualan di koperasi starbhak min?
              </div>
              <div class="answercont">
                  <div class="answer">
                    halo sobat starbhak ! kamu mau jualan di koperasi starbhak tapi bingung caranya gimana? tenang aja caranya gampang banget ! kamu bisa langsung datang ke koperasi dan tanya sendiri caranya ke mba mba penjaga koperasi yang cantik cantik banget!. Kami tunggu inovasi makanan rumahannya ya !!
                   <br><br>
                  </div>
              </div>
          </div>
          <div class="containers" id="containers2">
            <div class="question">
                Min mba mba kantin jomblo ngga min? hehehe
            </div>
            <div class="answercont">
                <div class="answer">
                  halo sobat starbhak ! banyak juga nih yang tanya kaya gini. emang sih mba mba koperasi kita ini duo penjaga yang cantik dan ramah, hmmm tapi jomblo ga yaa wkwk?. enaknya langsung tanya sendiri aja sih wkwkwk
                 <br><br>
                </div>
            </div>
        </div>
        </div>
        
    </div>


    <script>
        let question = document.querySelectorAll(".question");

        question.forEach(question => {
            question.addEventListener("click", event => {
                const active = document.querySelector(".question.active");
                if (active && active !== question) {
                    active.classList.toggle("active");
                    active.nextElementSibling.style.maxHeight = 0;
                }
                question.classList.toggle("active");
                const answer = question.nextElementSibling;
                if (question.classList.contains("active")) {
                    answer.style.maxHeight = answer.scrollHeight + "px";
                } else {
                    answer.style.maxHeight = 0;
                }
            })
        })

    </script>
</div>
@endsection
