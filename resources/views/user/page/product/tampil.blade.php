@extends('user.layouts.app')

@section('main-content')
<!-- ======= About Section ======= -->
<br>
<br>
<section id="portfolio" class="portfolio" style="margin-bottom: -100px;">
  <div class="container" data-aos="fade-up">
    <div class="section-title">
      <h4>Product</h4>
    </div>
    @foreach($DataProduk as $key => $produk)
    <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
      <div class="col-lg-4 col-md-5 portfolio-item filter-app">
        <div class="portfolio-wrap">
          <img src="{{asset('public/foto/'.$produk->image)}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>{{ $produk->nama}}</h4>
            <div class="portfolio-links">
              <a href="{{asset('public/foto/'.$produk->image)}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="{{ $produk->nama}}"><i class="bx bx-plus"></i></a>
              <a href="{{url('/product.'.$produk ->id_produk.'.edit')}}" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
</section><!-- End Portfolio Section -->
<br>
<br>
@endsection
