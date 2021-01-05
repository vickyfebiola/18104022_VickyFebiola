<!-- extends untuk lokasi file -->
@extends('template.base')

<!-- section mendefinisikan isi dari yield -->
@section('content')
<!-- isi konten page home -->
    <section id="home" class="home">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2">
            <img src="assets/img/about-img.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1">
           
            <h2>IT Telkom Purwokerto</h2>
            <h2>Bridging Technology for Humanity</h2>
            <p>
              Institut Teknologi Telkom Purwokerto (ITTP) didirikan tahun 2002 dikelola oleh Yayasan Pendidikan Telkom di bawah naungan PT. Telkom Indonesia. ITTP merupakan perguruan tinggi swasta di Jawa Tengah yang fokus pada pengembangan ilmu pengetahuan berbasis teknologi informasi pada bidang Healthcare, Agro-Industry, Tourism, dan Small Medium Enterprise (HATS). ITTP mendapatkan akreditasi dari BAN-PT dengan peringkat “ BAIK SEKALI “ dan telah ISO 21001-2018. 
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->
@endsection