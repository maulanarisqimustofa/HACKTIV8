@extends('user.layouts.app')

@section('main-content')
<!-- ======= About Section ======= -->
<br>
<br>
<section id="services" class="services">
  <div class="container" data-aos="fade-up">
    <div class="section-title">
      <h4>Category</h4>
    </div>

    <div class="row" style="margin-bottom: -80px;">
      @foreach($DataKategori as $key => $kategori)
      <div class="col-lg-2 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
        <div class="icon-box iconbox-blue">
          <div class="icon">
            <img src="{{asset('public/foto/'.$kategori->image)}}" class="img-fluid" alt="">
          </div>
          <h4><a href="">{{ $kategori->kategori}}</a></h4>
        </div>
      </div>
      @endforeach
    </div>
</section><!-- End Services Section -->
<br>
<br>
@endsection
