@extends('user.layouts.app')

@section('main-content')
<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <br>
            <h2>Works</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>
        @foreach($DataPortfolio as $key => $portfolio)
        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                <div class="portfolio-wrap">
                    <img src="{{asset('public/foto/'.$portfolio->image)}}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                        <h4>{{ $portfolio->title}}</h4>
                        <div class="portfolio-links">
                            <a href="{{asset('public/foto/'.$portfolio->image)}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="{{ $portfolio->title}}"><i class="bx bx-plus"></i></a>
                            <a href="{{url('/works.'.$portfolio ->id_portfolio.'.edit')}}" class="portfolio-details-lightbox" data-glightbox="type: external" title="Portfolio Details"><i class="bx bx-link"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
</section><!-- End Portfolio Section -->
@endsection
