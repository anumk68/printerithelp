<header>
  <div class="top_header">
    <div class="nav_contact bg_blue py-3">
      <div class="container">
        <div class="d-lg-flex justify-content-between align-items-center">
          <div class="d-lg-flex gap-5 mt-4 mt-lg-0">
            <div class="d-sm-flex gap-5 justify-content-sm-between align-items-sm-start">

              <div class="d-flex gap-3 align-items-center pe-xl-5">
                <img src="{{asset('public/assets/images/png/email.png')}}" alt="mail-icon" class="mail_icon">
                <div>
                  <a href="mailto:contact@printerithelp.com"
                    class="text-white fs_16 fw-normal link">contact@printerithelp.com</a>
                </div>
                <div>
                  <a href="tel: +1 8887684709" class="text-white fs_16 fw-normal link"><i
                      class="fa-solid fa-phone me-2"></i> +1 8887684709</a>
                </div>
              </div>
            </div>
          </div>
          <div class="d-lg-flex gap-3 d-none social_icons_print">
            <a href="https://www.instagram.com/printerithelp/"><i class="fa-brands fa-instagram"></i></a>
            <a href="https://www.facebook.com/printerithelp"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="https://www.youtube.com/@PrinterITHelp"><i class="fa-brands fa-youtube"></i></a>
            <a href="https://x.com/printer_it_help"><i class="fa-brands fa-x-twitter"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <!-- Logo -->
      <a class="navbar-brand header_logo" href="{{url('/')}}">
        <img src="{{asset('public/assets/images/png/page-logo.png')}}" alt="page-logo">
      </a>

      <!-- Toggle Button -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Centered Menu and Right Search/Call -->
      <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item">
            <a class="nav-link active" href="{{route('home')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('about.show')}}">About</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="servicesDropdown" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">
              Services
            </a>
            <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
              <li><a class="dropdown-item" href="{{route('hp-printer')}}">HP Printer Support</a></li>
              <li><a class="dropdown-item" href="{{route('epson-printer')}}">Epson Printer Support</a></li>
              <li><a class="dropdown-item" href="{{route('brother-printer-support')}}">Brother Printer Support</a></li>
              <li><a class="dropdown-item" href="{{route('expert-canon-printer-support-services')}}">Canon Printer
                  Support</a></li>
              <li><a class="dropdown-item" href="{{route('printer-installation-troubleshooting-service')}}">Installation
                  & Troubleshooting</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('blog.list')}}">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('contact')}}">Contact</a>
          </li>
        </ul>

        <!-- Right side: Search bar + Call Now button -->
        <div class="navbar-right d-flex align-items-center">
        <form class="d-flex me-3 position-relative" role="search">
            <input class="form-control search-input" type="search" id="blogSearch" placeholder="Search" aria-label="Search" autocomplete="off">
            <div id="searchResults" class="position-absolute bg-white border w-100" style="z-index: 999;margin-top:38px;"></div>
        </form>
          <a href="tel:+18886684607" class="btn btn-primary call-now-btn">Call Now</a>
        </div>
      </div>
    </div>
  </nav>

</header>

<section class="button_fixed">
  <div class="container-fluid g-0">
    <div class="btn_main_contact_us">
      <a href="javascript:void(0);" class="team-btn">Contact Us</a>
      <div class="contact-form">
        <div class="form_popup_class">
          <form id="contactForm" class="bg-light px-2 py-3 border_radius_6 position-relative overflow-hidden"
            method="POST" action="{{route('submit.all_contact')}}" autocomplete="off">
            @csrf
            <input type="hidden" name="form_type" value="home_form">
            <div class="corner-animation z-1"></div>
            <div class="position-relative z-1">
              <h2 class="fw-semibold text_blue text-center mb-4 position-relative z-2">Request Your Printing Service Now
              </h2>

              <div class="row">
                <div class="col-md-6 mb-3">
                  <select name="brand" id="brand">
                    <option value="">Brand</option>
                    <option value="hp">HP</option>
                    <option value="epson">Epson</option>
                    <option value="brother">Brother</option>
                    <option value="canon">Canon</option>
                    <option value="other">Other</option>
                  </select>
                </div>
                <div class="col-md-6 mb-3">
                  <input type="text" name="model" placeholder="Model Number">
                </div>
                <div class="col-md-6 mb-3">
                  <input type="text" name="name" placeholder="Your Name">
                </div>
                <div class="col-md-6 mb-3">
                  <input type="text" name="email" placeholder="Your Email">
                </div>
                <div class="col-md-6 mb-3">
                  <div class="country-select">
                    <select name="code">
                      @foreach ($codes as $code)
                      <option value="{{ $code->code }}">{{ $code->country.' '.$code->code }}</option>
                      @endforeach
                      <!-- Add more options as needed -->
                    </select>
                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <input type="number" name="phone" class="form-control" placeholder="Your Phone Number" maxlength="10"
                    oninput="this.value = this.value.slice(0, 10);">

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
  <script>
document.getElementById('blogSearch').addEventListener('input', function () {
    const query = this.value;
    if (query.length < 6) {
        document.getElementById('searchResults').innerHTML = '';
        return;
    }
    
    fetch(`/search-blogs?q=${query}`)
        .then(response => response.json())
        .then(data => {
            let resultsHTML = '';
            data.forEach(blog => { 
            resultsHTML += `<a href="{{ url('blog') }}/${blog.slug}" class="d-block px-2 py-1 text-decoration-none text-dark border-bottom">${blog.title}</a>`;
          });

            document.getElementById('searchResults').innerHTML = resultsHTML || '<div class="p-2 text-muted">No results found</div>';
        });
});
</script>
</section>
