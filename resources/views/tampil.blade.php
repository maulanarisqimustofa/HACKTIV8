@extends('user.layouts.app')

@section('main-content')
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
  <div class="container d-flex flex-column align-items-center" data-aos="zoom-in" data-aos-delay="100">
  </div>
</section><!-- End Hero -->
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
<!-- ======= About Section ======= -->
<section id="portfolio" class="portfolio" style="margin-bottom: -100px;">
  <div class="container" data-aos="fade-up">
    <div class="section-title">
      <h4>Newest Product</h4>
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
<section id="portfolio" class="portfolio" style="margin-bottom: -80px;">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h4>Gift From Us</h4>
    </div>
    <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
      <div class="col-lg-4 col-md-6 portfolio-item filter-app">
        <div class="portfolio-wrap">
          <img src="{{ asset('public/user/assets/img/carousel_1.jpg') }}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <div class="portfolio-links">
              <a href="{{ asset('public/user/assets/img/carousel_1.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title=""><i class="bx bx-plus"></i></a>
              <a href="" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-card">
        <div class="portfolio-wrap">
          <img src="{{ asset('public/user/assets/img/carousel_2.jpg') }}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <div class="portfolio-links">
              <a href="{{ asset('public/user/assets/img/carousel_2.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title=""><i class="bx bx-plus"></i></a>
              <a href="" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <div class="portfolio-wrap">
          <img src="{{ asset('public/user/assets/img/hero-bg.jpg') }}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <div class="portfolio-links">
              <a href="{{ asset('public/user/assets/img/hero-bg.jpg') }}" data-gallery="portfolioGallery" class="portfolio-lightbox" title=""><i class="bx bx-plus"></i></a>
              <a href="" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section><!-- End Portfolio Section -->
<section id="portfolio" class="portfolio">
  <div class="container" data-aos="fade-up">
    <div class="section-title">
      <h2>Our Campaign</h2>
      <p style="text-align: left; width: 100%">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec aliquet venenatis dignissim. Mauris sit amet urna viverra, volutpat leo nec, aliquam lacus. Nam magna elit, vehicula non consectetur sit amet, volutpat id neque. Etiam sit amet porta eros. Nullam justo massa, pulvinar at tortor eget, rhoncus viverra dui. Quisque convallis placerat convallis. Mauris hendrerit lobortis neque at rhoncus. Fusce eu orci pharetra, dictum magna in, lacinia magna. Cras laoreet feugiat urna, ac pretium leo interdum vitae. Sed gravida fringilla libero a porta.</p>
      <br>
      <p style="text-align: left; width: 100%">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec aliquet venenatis dignissim. Mauris sit amet urna viverra, volutpat leo nec, aliquam lacus. Nam magna elit, vehicula non consectetur sit amet, volutpat id neque. Etiam sit amet porta eros. Nullam justo massa, pulvinar at tortor eget, rhoncus viverra dui. Quisque convallis placerat convallis. Mauris hendrerit lobortis neque at rhoncus. Fusce eu orci pharetra, dictum magna in, lacinia magna. Cras laoreet feugiat urna, ac pretium leo interdum vitae. Sed gravida fringilla libero a porta.</p>
    </div>
  </div>
</section>
@endsection