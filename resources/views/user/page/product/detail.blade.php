@extends('user.layouts.app1')

@section('main-content')
<!-- ======= Portfolio Details Section ======= -->
<section id="portfolio-details" class="portfolio-details">
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-8">
                <div class="portfolio-details-slider swiper">
                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide">
                            <img src="{{asset('public/foto/'.$DataProduk->image)}}" alt="">
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="portfolio-info">
                    <h3>{{ $DataProduk->nama }}</h3>
                    <ul>
                        <li><strong>Category</strong>:</li>
                        @foreach($DataProduk->kategori as $kategori)
                        {{ $kategori->kategori }}
                        @endforeach
                        <li><strong>Price</strong>: Rp. {{ $DataProduk->harga }}</li>
                    </ul>
                </div>
                <div class="portfolio-description">
                    <h2>Description</h2>
                    <p>
                        {{ $DataProduk->deskripsi }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</section><!-- End Portfolio Details Section -->
@endsection


<div id="preloader"></div>
<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>