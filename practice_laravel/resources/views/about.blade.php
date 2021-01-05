<!-- extends untuk lokasi file -->
@extends('template.base')

<!-- section mendefinisikan isi dari yield -->
@section('content')
<!-- isi konten page about -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>About Us</h2>
        </div>

        <div class="row">
			<div class="col-lg-6 order-1 order-lg-2">
				<img src="assets/img/about-img.jpg" class="img-fluid" alt="">
			</div>
			<div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1">
				<h2>VISI</h2>		
				<p>
			      Menjadi perguruan tinggi yang berdaya saing internasional dalam pengembangan pengetahuan berbasis teknologi informasi yang fokus pada bidang Healthcare, Agro-Industry, Tourism, dan Small-Medium Enterprise di tahun 2027
			    </p>
				<h2>MISI</h2>
				<ul>
					<li><i class="icofont-check-circled"></i> Menyelenggarakan dan mengembangkan pendidikan berstandar internasional berbasis teknologi informasi yang fokus pada bidang Healthcare, Agro-Industry, Tourism, dan Small-Medium Enterprise.</li>
					<li><i class="icofont-check-circled"></i> Menyelenggarakan penelitian dan menyebarluaskan hasilnya untuk pengembangan ilmu dan pengetahuan dan teknologi.</li>
					<li><i class="icofont-check-circled"></i> Menerapkan dan memanfaatkan ilmu pengetahuan dan teknologi bagi kemaslahatan masyarakat.</li>
					<li><i class="icofont-check-circled"></i> Menerapkan Good University Governance dan menjalin kerjasama nasional maupun internasional.</li>
				</ul>
			</div>
        </div>

      </div>
    </section>
    <!-- End About Us Section -->
@endsection