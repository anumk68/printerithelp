@extends('layouts.app')


@section('content')

<section class="about_banner py_8" style="background-image: url({{asset('public/assets/images/banner_bg_about.jpg')}});">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="blog_banner">
                    <h1>Blog</h1>
                </div>
            </div>
     
        </div>
    </div>
</section>

<section class="blog_page_one py_8">
    <div class="container">
            <div class="row">
            @foreach ($blogs as $blog)
                <div class="col-md-4 mb-4" onclick="window.location.href='{{url('blog/' . $blog->slug)}}'" style="cursor:pointer;">
                    <div class="under_blog_one">
                        <div class="img_blog_one">
                            <img src="{{ asset('public/' . $blog->banner) }}" alt="{{$blog->banner_alt}}" >
                        </div>
                        <div class="under_blog_txt">
                            <h2><a href="{{url('blog/' . $blog->slug)}}">{{$blog->title}}</a></h2>
                            <p>{{$blog->meta_description}}</p>
                        </div>
                        <div class="blog_btn">
                           <a href="{{url('blog/' . $blog->slug)}}" class="common_btn">Read More</a>
                        </div>
                    </div>
                </div>
            @endforeach

         </div>
    </div>
</section>


@endsection