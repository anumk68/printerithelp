<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Meta Tags for SEO -->
  <title>{{ $metatitle ?? 'PrinterItHelp'}}</title>
  <meta name="description"
    content="{{ $metaDescription ?? 'PrinterItHelp provides IT-related solutions, offering expert advice, troubleshooting, and printer help services. Explore our wide range of IT services for businesses and individuals.'}}">
  <meta name="keywords"
    content="{{ $metaKeywords ?? 'IT services, printer help, troubleshooting, printer repair, IT support, tech solutions'}}">
  <meta name="author" content="PrinterItHelp Team">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
    crossorigin="anonymous" referrerpolicy="no-referrer">
  <!-- Open Graph Meta Tags (for social media sharing) -->
  <meta property="og:title" content="{{ $metatitle ?? 'PrinterItHelp'}}">
  <meta property="og:description"
    content="{{ $metaDescription ?? 'PrinterItHelp provides IT-related solutions, offering expert advice, troubleshooting, and printer help services. Explore our wide range of IT services for businesses and individuals.'}}">
  <meta property="og:image" content="{{ $ogImage ?? asset('public/assets/images/png/og-image.png') }}">
  <meta property="og:url" content="{{ url()->current() }}">
  <meta property="og:type" content="website">
  <meta property="og:locale" content="en_US">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-WBXQRHK0TH"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());

    gtag('config', 'G-WBXQRHK0TH');
  </script>

  <meta name="google-site-verification" content="gucpAlq0x_fS-n9S8DmOa15trzwLn7mx0u4Ven1HE4s" />

  <meta name="msvalidate.01" content="E19DEA7C98146D53281BE3022CCEA861" />

  <!-- Toastr CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

<!-- Toastr JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


  <!-- Favicon for the website -->
  <link rel="shortcut icon" href="{{ asset('public/assets/images/png/favicon.png') }}" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('public/assets/css/style.css') }}">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
  <link rel="canonical" href="https://printerithelp.com/">
  <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>

  @yield('heads')
  <style>
    #contacts-list {
      overflow-y: auto;
      width: 300px;
      height: 500px;
      background-color: #ECECEC;
      border-radius: 0.75rem;
      border: 1px solid #D4D4D4;
      font-family: 'Inter';

    }

    #contacts-list h2 {
      padding: 20px;
    }

    .contact-container {

      height: 50px;
      display: flex;
      padding: 5px 0;
      cursor: pointer;
      border-bottom: 1px solid #D4D4D4;
    }

    .contact-container:hover {
      background-color: #007DF9;
      color: #fff;
      font-weight: bold;
    }

    .contact-name {
      padding: 0 20px;
      display: flex;
      flex-direction: column;
      justify-content: space-around;
    }

    /* toaster message */
    #toast-container > .toast {
        background-color:#51A351 !important;
        color:rgb(247, 247, 247) !important;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
        font-size: 14px;
        font-weight: bold;
        opacity: 1 !important;
    }

    /* Optional: override icon colors */
    
  </style>
</head>

<body>
  <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "Printer IT Help",
  "url": "https://printerithelp.com/",
  "logo": "https://printerithelp.com/public/assets/images/png/page-logo.png",
  "contactPoint": [
    {
      "@type": "ContactPoint",
      "telephone": "",
      "contactType": "technical support",
      "email": "contact@printerithelp.com",
      "areaServed": "US",
      "availableLanguage": "en"
    }
  ]
}
</script>
  @include('includes.header')

  @yield('content')

  @include('includes.footer')
  <!-- modal -->
  <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
    tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="form_banner modal_form">
        <form id="contactForm"
                        class="bg-light p-xl-5 p-sm-4 px-2 py-3 border_radius_6 position-relative overflow-hidden"
                        method="POST" action="{{route('submit.all_contact')}}" autocomplete="off">
                        @csrf
                        <input type="hidden" name="form_type" value="home_form">
                        <div class="corner-animation z-1"></div>
                        <div class="position-relative z-1">
                            <h2 class="fw-semibold text_blue text-center mb-4 position-relative z-2">Request Your Printing
                                Service Now</h2>

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
                                                <option value="{{ $code->code }}">{{ $code->country . ' ' . $code->code }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <input type="number" class="form-control" name="phone" placeholder="Your Phone Number"
                                        maxlength="10" oninput="this.value = this.value.slice(0, 10);">

                                </div>
                                <div class="col-md-12">
                                    <textarea name="issue" placeholder="Describe issue"></textarea>
                                </div>
                            </div>



                            <div class="d-flex justify-content-center mt-2">
                                <button type="submit" class="common_btn text-white mt-md-3 mt-2">Enquire Now</button>
                            </div>
                        </div>
                    </form>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2"
    tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalToggleLabel2">Modal 2</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Hide this modal and show the first with the button below.
        </div>
        <div class="modal-footer">
          <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal"
            data-bs-dismiss="modal">Back to first</button>
        </div>
      </div>
    </div>
  </div>
<!-- Start of LiveChat (www.livechat.com) code -->
<script>
    window.__lc = window.__lc || {};
    window.__lc.license = 19173094;
    window.__lc.integration_name = "manual_onboarding";
    window.__lc.product_name = "livechat";
    ;(function(n,t,c){function i(n){return e._h?e._h.apply(null,n):e._q.push(n)}var e={_q:[],_h:null,_v:"2.0",on:function(){i(["on",c.call(arguments)])},once:function(){i(["once",c.call(arguments)])},off:function(){i(["off",c.call(arguments)])},get:function(){if(!e._h)throw new Error("[LiveChatWidget] You can't use getters before load.");return i(["get",c.call(arguments)])},call:function(){i(["call",c.call(arguments)])},init:function(){var n=t.createElement("script");n.async=!0,n.type="text/javascript",n.src="https://cdn.livechatinc.com/tracking.js",t.head.appendChild(n)}};!n.__lc.asyncInit&&e.init(),n.LiveChatWidget=n.LiveChatWidget||e}(window,document,[].slice))
</script>
<noscript><a href="https://www.livechat.com/chat-with/19173094/" rel="nofollow">Chat with us</a>, powered by <a href="https://www.livechat.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a></noscript>
<!-- End of LiveChat code -->

  <!-- JavaScript Files -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init({
      once: true
    });
  </script>

  <script type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

  @yield('scripts')

  <!-- Slick Slider Configuration -->

  <script type="application/ld+json">
{
  "@context": "https://schema.org/", 
  "@type": "BreadcrumbList", 
  "itemListElement": [{
    "@type": "ListItem", 
    "position": 1, 
    "name": "About Us",
    "item": "https://printerithelp.com/about"  
  },{
    "@type": "ListItem", 
    "position": 2, 
    "name": "HP Printer",
    "item": "https://printerithelp.com/hp_printer"  
  },{
    "@type": "ListItem", 
    "position": 3, 
    "name": "Epson Printer",
    "item": "https://printerithelp.com/epson_printer"  
  },{
    "@type": "ListItem", 
    "position": 4, 
    "name": "Brother Printer",
    "item": "https://printerithelp.com/brother_printer"  
  },{
    "@type": "ListItem", 
    "position": 5, 
    "name": "Canon Printer",
    "item": "https://printerithelp.com/canon_printer"  
  },{
    "@type": "ListItem", 
    "position": 6, 
    "name": "Installation & Troubleshooting",
    "item": "https://printerithelp.com/installation_printer"  
  },{
    "@type": "ListItem", 
    "position": 7, 
    "name": "Contact Us",
    "item": "https://printerithelp.com/contact"  
  },{
    "@type": "ListItem", 
    "position": 8, 
    "name": "Blog",
    "item": "https://printerithelp.com/blog"  
  }]
}
</script>


  <script>
    $(document).ready(function () {
      $('.slick-slider').slick({
        fade: true,
        speed: 1000,
        autoplay: true,
        autoplaySpeed: 3000,
        arrows: false,
        dots: true,
      });
    });
  </script>

  <script>
    $('.responsive').slick({
      dots: true,
      infinite: true,
      speed: 300,
      slidesToShow: 3,
      slidesToScroll: 2,
      responsive: [
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 576,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
      ]
    });
  </script>

  <script>
    $('.testimonial').slick({
      dots: true,
      infinite: true,
      speed: 300,
      slidesToShow: 3,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 576,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
      ]
    });
  </script>
  <script>


  </script>

<script>
    @if(session('success'))
        toastr.success("{{ session('success') }}");
    @elseif(session('error'))
        toastr.error("{{ session('error') }}");
    @elseif(session('info'))
        toastr.info("{{ session('info') }}");
    @elseif(session('warning'))
        toastr.warning("{{ session('warning') }}");
    @endif
</script>


</body>

</html>