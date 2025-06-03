@extends('layouts.app')

@section('content')

<div class="error-container text-center" style="margin-top:100px; margin-bottom:100px;flex-direction: column; align-items: center; justify-content: center;font-family: 'Arial', sans-serif;">
    <h1 style="font-size: 6rem; color: #3C90B4; font-weight: bold;">404</h1>
    <h2 style="font-size: 2rem; color: #555;">Oops! The page you're looking for doesn't exist.</h2>
    <a href="{{ route('home') }}" class="btn btn-primary home-link" style="background-color: #007bff; border: none; padding: 10px 20px; font-size: 1.1rem; border-radius: 5px; text-decoration: none; color: white;">
        <i class="fas fa-home" style="margin-right: 10px;"></i> Go Back to Home
    </a>
</div>

@endsection

@section('scripts')
<script>
    $(document).ready(function () {
        $('.slick-slider-banner').slick({
            fade: true,
            speed: 1000,
            autoplay: true,
            autoplaySpeed: 7000,
            arrows: false,
            dots: true,
        });
    });
</script>
@endsection
