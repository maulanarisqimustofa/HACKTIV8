@extends('user.layouts.app')

@section('main-content')

<br>
<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Contact</h2>
            @foreach($DataContact as $key => $contact)
            <p>{{ $contact->content}}</p>
            @endforeach
        </div>
        <div>
        </div>
    </div>
</section><!-- End Contact Section -->
<br>
<br>
<br>
<br>
<br>
@endsection