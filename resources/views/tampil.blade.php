@extends('user.layouts.app')

@section('main-content')
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
    <div class="container d-flex flex-column align-items-center" data-aos="zoom-in" data-aos-delay="100">
        <h1></h1>
        <h2>Maulana is backend developer based in <br> Jakarta, Indonesia</h2>

    </div>
</section><!-- End Hero -->
<!-- ======= About Section ======= -->
<section id="about" class="about">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
        @foreach($DataAbout as $key => $about)
            <h2>{{ $about->title}}</h2>
            <p>{{ $about->content}}</p>
            @endforeach
        </div>
        <br>
    </div>
    </div>
</section><!-- End About Section -->
@endsection

