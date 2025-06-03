@extends('layouts.app')


@section('content')
<section class="about_banner py_8" style="background-image: url({{asset('public/assets/images/banner_bg_about.jpg')}});">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-12">
                <div class="blog_banner">
                    <h1>{{$blog->title}}</h1>
                </div>
            </div>
     
        </div>
    </div>
</section>


<section class="single_blog_page py_8">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="under_single_blog">
                    <div class="img_single">
                       <img src="{{ asset('public/' . $blog->banner) }}" alt="{{$blog->banner_alt}}" >
                    </div>
                    <div class="single_content">
                        <p>{!!$blog->description!!}</p>
                    </div>
                </div>

                <div class="flex_botton_inline">
                    <div class="btn_bll">
                        <a href="tel:18888752997" class="common_btn">Contact US</a>
                    </div>
                    <div class="btn_bll">
                        <a href="javascript:void(0);" onclick="parent.LiveChatWidget.call('maximize')" class="common_btn">Live Chat</a>
                    </div>
                    <div class="btn_bll">
                        <a href="{{ route('virtual_chat') }}" class="common_btn">Virtual Assistance</a>
                    </div>
                    <div class="btn_bll">
                        <a href="javascript:void(0);" onclick="openIframeModal('{{ route('iframe_index') }}');" class="common_btn">Download Drivers</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="recent_blogs">
                    <div class="blog-container">
                        <div class="blog-header">
                          <button class="menu-btn">&#9776;</button>
                          <h2>Recent Blogs</h2>
                        </div>
                      
                        <div class="blog-list">
                            @foreach ($blogs as $blog_latest)
                                
                                <div class="blog-item" onclick="window.location.href='{{url('blog/' . $blog_latest->slug)}}'" style="cursor:pointer;">
                                <img src="{{ asset('public/' . $blog_latest->banner) }}" alt="Canon Customer Support">
                                <p style="font-weight:bold;">{{ strlen($blog_latest->title) > 31 ? substr($blog_latest->title, 0, 49) . '...' : $blog_latest->title . '...' }}</p>
                                </div>
                            @endforeach
                        </div>
                      </div>
                </div>

                <div class="img_recently">
                    <img src="{{ asset('public/assets/images/printing_main_bloging.jpg') }}" alt="{{$blog_latest->banner_alt}}" alt="install_canon_printer">
                </div>

                <div class="form_banner form_recent_form">
                    <form id="contactForm" class="bg-light  p-sm-4 px-2 py-3 border_radius_6 position-relative overflow-hidden" method="POST" action="{{route('submit.all_contact')}}" autocomplete="off">
                        @csrf
                        <input type="hidden" name="form_type" value="home_form">
                        <div class="corner-animation z-1"></div>
                            <div class="position-relative z-1">
                                <h2 class="fw-semibold text_blue text-center mb-4 position-relative z-2">Contact Form</h2>

                            <div class="row">
                                <div class="col-md-6 mb-2">
                                    <select name="brand" id="brand">
                                        <option value="">Brand</option>
                                        <option value="hp">HP</option>
                                        <option value="epson">Epson</option>
                                        <option value="brother">Brother</option>
                                        <option value="canon">Canon</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <input type="text" name="model" placeholder="Model Number">
                                </div>
                                <div class="col-md-6 mb-2">
                                    <input type="text" name="name" placeholder="Your Name">
                                </div>
                                <div class="col-md-6 mb-2">
                                    <input type="text" name="email" placeholder="Your Email">
                                </div>
                                <div class="col-md-6 mb-2">
                                    <div class="country-select">
                                        <select name="code">
                                            @foreach ($codes as $code)
                                            <option value="{{ $code->code }}">{{ $code->country.' '.$code->code }}</option>
                                            @endforeach
                                        </select>
                                      </div>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <input type="number" class="form-control" name="phone" placeholder="Your Phone Number" maxlength="10" oninput="this.value = this.value.slice(0, 10);">

                                </div>
                                <div class="col-md-12">
                                    <textarea name="issue" placeholder="Describe issue" required=""></textarea>
                                </div>
                            </div>

                                    

                                <div class="d-flex justify-content-center mt-2">
                                    <button type="submit" class="common_btn text-white mt-md-3 mt-2">Enquire Now</button>
                                </div>
                            </div>
                    </form>
                </div>


                <div class="button_all" style="background-image: url({{asset('public/assets/images/about_bannner_bloginggg.png')}});">
                    <div class="flex_firstly">
                        <div class="btn_main_downloads">
                            <a href="tel:18888752997" class="common_btn">Contact US</a>
                        </div>
                        <div class="btn_main_downloads">
                            <a href="javascript:void(0);" onclick="parent.LiveChatWidget.call('maximize')" class="common_btn">Live Chat</a>
                        </div>
                    </div>
                    <div class="flex_firstly">
                        <div class="btn_main_downloads">
                            <a href="{{ route('virtual_chat') }}" class="common_btn">Virtual Assistance</a>
                        </div>
                        <div class="btn_main_downloads">
                            <a href="javascript:void(0);" onclick="openIframeModal('{{ route('iframe_index') }}');" class="common_btn">Download Drivers</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- //iframe -->
    <div id="iframeModal" style="display:none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; 
                        background-color: rgba(0, 0, 0, 0.7); z-index: 9999; justify-content: center; align-items: center;">
                        <div style="position: relative; width: 90%; max-width: 400px; height: 80%; background: #fff; border-radius: 10px; overflow: hidden;">
                            <button onclick="closeIframeModal()" style="position: absolute; top: 10px; right: 10px; z-index: 10000; background: #ff5a5a; color: white; border: none; padding: 5px 10px; border-radius: 4px; cursor: pointer;">X</button>
                            <iframe id="driversIframe" src="" style="width: 95%; height: 98%; border: none;margin-top:5%;justify-content:center;"></iframe>
                        </div>
                    </div>

</section>
<script>
    function openIframeModal(url) {
        const modal = document.getElementById('iframeModal');
        const iframe = document.getElementById('driversIframe');
        iframe.src = url;
        modal.style.display = 'flex';
    }

    function closeIframeModal() {
        const modal = document.getElementById('iframeModal');
        const iframe = document.getElementById('driversIframe');
        iframe.src = '';
        modal.style.display = 'none';
    }

</script>
@endsection