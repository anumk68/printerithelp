@extends('layouts.app')
@section('content')
<section class="printer_help_itbannner">
    <div class="slick-slider-banner">
        <div class="element element-1">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-md-6 col-sm-12">
                        <div class="under_banner_content">
                            <span>Printer IT Help</span>
                            <h1>Expert Printer Setup and Support Services in the USA</h1>
                            <p>Printer IT Help offers reliable printer setup and support services for Epson, HP, Canon,
                                and Brother printer setup and support services. We ensure smooth working performance for
                                home and business users, from installation to troubleshooting.
                            </p>
                            <div class="flex_banner_images">
                                <img src="{{ asset('public/assets/images/printer_google_1.png') }}" alt="install_epson_printer" class="support_icon">
                                <img src="{{ asset('public/assets/images/google_logo_8.webp') }}" alt="hp_printer_phone_support" class="support_icon">
                                <img src="{{ asset('public/assets/images/google_logo_9.png') }}" alt="install_canon_printer" class="support_icon">
                                <img src="{{ asset('public/assets/images/printer_google_4.png') }}" alt="epson_printer_support" class="support_icon">
                            </div>
                            <div class="d-flex justify-content-lg-start justify-content-center gap-2">
                                <a class="book_btn common_btn text-white" data-bs-toggle="modal"  href="#exampleModalToggle">Book Appointment</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6 col-sm-12">
                        <div class="form_banner">
                        <form id="contactForm"
                            class="bg-light p-xl-5 p-sm-4 px-2 py-3 border_radius_6 position-relative overflow-hidden"
                            method="POST" action="{{route('submit.all_contact')}}" autocomplete="off">
                            @csrf
                            <input type="hidden" name="form_type" value="home_form">
                            <div class="corner-animation z-1"></div>
                            <div class="position-relative z-1">
                                <h2 class="fw-semibold text_blue text-center mb-4 position-relative z-2">Request Your
                                    Printing Service Now</h2>

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
                                        <input type="number" name="phone" class="form-control"
                                            placeholder="Your Phone Number" maxlength="10"
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
        </div>
        <div class="element element-2">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-md-6 col-sm-12">
                        <div class="under_banner_content">
                            <span>Printer IT Help</span>
                            <h2>Reliable Printer Installation and Support Services in the USA</h2>
                            <p>Printer IT Help provides professional printer installation and support services for
                                Epson, HP, Canon, and Brother printers, ensuring seamless performance for home and
                                business users.</p>
                            <div class="flex_banner_images">
                                <img src="{{ asset('public/assets/images/printer_google_1.png') }}" alt="brother_printer_support_number" class="support_icon">
                                <img src="{{ asset('public/assets/images/google_logo_8.webp') }}" alt="install_epson_printer" class="support_icon">
                                <img src="{{ asset('public/assets/images/google_logo_9.png') }}" alt="hp_printer_phone_support" class="support_icon">
                                <img src="{{ asset('public/assets/images/printer_google_4.png') }}" alt="install_canon_printer" class="support_icon">
                            </div>
                            <div class="d-flex justify-content-lg-start justify-content-center gap-2">
                                <!-- <button class="book_btn text-white">Book Appointment</button> -->
                                <a class="book_btn common_btn text-white" data-bs-toggle="modal"  href="#exampleModalToggle">Book Appointment</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6 col-sm-12">
                        <div class="form_banner">
                            <form id="contactForm" class="bg-light p-xl-5 p-sm-4 px-2 py-3 border_radius_6 position-relative overflow-hidden" method="POST" action="{{route('contact.submit')}}">
                                @csrf
                                <input type="hidden" name="form_type" value="home_form">
                                <div class="corner-animation z-1"></div>
                                    <div class="position-relative z-1">
                                        <h2 class="fw-semibold text_blue text-center mb-4 position-relative z-2">Request Your Printing Service Now</h2>

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
                                            <input type="text" name="" placeholder="Model Number">
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <input type="text" name="" placeholder="Your Name">
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <input type="text" name="" placeholder="Your Email">
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <div class="country-select">
                                                <select>
                                                  <option value="+1">USA +1</option>
                                                  <option value="+44">UK +44</option>
                                                  <option value="+91">India +91</option>
                                                  <option value="+61">Australia +61</option>
                                                  <!-- Add more options as needed -->
                                                </select>
                                              </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <input type="number" class="form-control" placeholder="Your Phone Number" maxlength="10" oninput="this.value = this.value.slice(0, 10);">

                                        </div>
                                        <div class="col-md-12">
                                            <textarea name="message" placeholder="Describe issue" required=""></textarea>
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
        </div>
    </div>
</section>


<!-- <section id="marquee">
    <div class="container">
        <div class="pic-container">
            <div class="pic">
                <a href="{{route('brother-printer-support')}}"><img src="{{ asset('public/assets/images/brother-printer.png') }}" alt=""></a>
            </div>
            <div class="pic">
                <a href="{{route('expert-canon-printer-support-services')}}"><img src="{{ asset('public/assets/images/canon-printer.png') }}" alt=""></a>
            </div>
            <div class="pic">
                <a href="{{route('epson-printer')}}"><img src="{{ asset('public/assets/images/epson-printer.png') }}" alt=""></a>
            </div>
            <div class="pic">
                <a href="{{route('hp-printer')}}"><img src="{{ asset('public/assets/images/hp-printer.png') }}" alt=""></a>
            </div>
            <div class="pic">
                <img src="{{ asset('public/assets/images/marque_logo_1.png')}}" alt="install_epson_printer">
            </div>
            <div class="pic">
                <img src="{{ asset('public/assets/images/marque_logo_2.avif')}}" alt="hp_printer_phone_support">
            </div>
            <div class="pic">
                <img src="{{ asset('public/assets/images/marque_logo_5.png')}}" alt="install_canon_printer">
            </div>
            <div class="pic">
                <img src="{{ asset('public/assets/images/marque_logo_1.png')}}" alt="epson_printer_support">
            </div>
            <div class="pic">
                <img src="{{ asset('public/assets/images/marque_logo_2.avif')}}" alt="brother_printer_support_number">
            </div>
            <div class="pic">
                <img src="{{ asset('public/assets/images/marque_logo_5.png')}}" alt="install_epson_printer">
            </div>
            <div class="pic">
                <img src="{{ asset('public/assets/images/marque_logo_1.png')}}" alt="hp_printer_phone_support">
            </div>
            <div class="pic">
                <img src="{{ asset('public/assets/images/marque_logo_2.avif')}}" alt="install_canon_printer">
            </div>
            <div class="pic">
                <img src="{{ asset('public/assets/images/marque_logo_5.png')}}" alt="epson_printer_support">
            </div>
            <div class="pic">
                <img src="{{ asset('public/assets/images/marque_logo_1.png')}}" alt="brother_printer_support_number">
            </div>
            <div class="pic">
                <img src="{{ asset('public/assets/images/marque_logo_2.avif')}}" alt="install_canon_printer">
            </div>
            <div class="pic">
                <img src="{{ asset('public/assets/images/marque_logo_5.png')}}" alt="hp_printer_phone_support">
            </div>
        </div>
    </div>
</section> -->

<section id="marquees">
    <div class="container">
        <div class="pic-containers">
            <div class="pic">
                <a href="{{route('brother-printer-support')}}"><img src="{{ asset('public/assets/images/brother-printer.png') }}" alt=""></a>
            </div>
            <div class="pic">
                <a href="{{route('expert-canon-printer-support-services')}}"><img src="{{ asset('public/assets/images/canon-printer.png') }}" alt=""></a>
            </div>
            <div class="pic">
                <a href="{{route('epson-printer')}}"><img src="{{ asset('public/assets/images/epson-printer.png') }}" alt=""></a>
            </div>
            <div class="pic">
                <a href="{{route('hp-printer')}}"><img src="{{ asset('public/assets/images/hp-printer.png') }}" alt=""></a>
            </div>

            <div class="pic">
                <a href="{{route('brother-printer-support')}}"><img src="{{ asset('public/assets/images/brother-printer.png') }}" alt=""></a>
            </div>
            <div class="pic">
                <a href="{{route('expert-canon-printer-support-services')}}"><img src="{{ asset('public/assets/images/canon-printer.png') }}" alt=""></a>
            </div>
            <div class="pic">
                <a href="{{route('epson-printer')}}"><img src="{{ asset('public/assets/images/epson-printer.png') }}" alt=""></a>
            </div>
            <div class="pic">
                <a href="{{route('hp-printer')}}"><img src="{{ asset('public/assets/images/hp-printer.png') }}" alt=""></a>
            </div>


            <div class="pic">
                <a href="{{route('brother-printer-support')}}"><img src="{{ asset('public/assets/images/brother-printer.png') }}" alt=""></a>
            </div>
            <div class="pic">
                <a href="{{route('expert-canon-printer-support-services')}}"><img src="{{ asset('public/assets/images/canon-printer.png') }}" alt=""></a>
            </div>
            <div class="pic">
                <a href="{{route('epson-printer')}}"><img src="{{ asset('public/assets/images/epson-printer.png') }}" alt=""></a>
            </div>
            <div class="pic">
                <a href="{{route('hp-printer')}}"><img src="{{ asset('public/assets/images/hp-printer.png') }}" alt=""></a>
            </div>

        </div>
    </div>
</section>

<section class="about_section py_8">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="about_img">
                    <img src="{{ asset('public/assets/images/about.jpg') }}" alt="install_canon_printer">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <h2>Printer IT Help: Trusted Experts for Reliable Printer Support Services</h2>
                <p>At Printer IT Help, we are your go-to experts for seamless printer setup and support services across
                    the USA. Whether you need to install an Epson printer, configure a Canon printer, or troubleshoot an
                    HP printer, we ensure efficient solutions tailored to your specific needs. Our experienced team
                    specializes in handling significant brands like Epson, HP, Canon, and Brother, providing reliable
                    <a href="{{route('epson-printer')}}">Epson printer support</a> and assistance through our HP printer phone support. For quick help, contact
                    our Brother printer support number for fast, professional service. With a commitment to quality and
                    customer satisfaction, we simplify complex printer tasks, ensuring optimal performance for both home
                    and business users. Let Printer IT Help make your printing experience hassle-free and efficient.
                </p>
                <div class="about_us_btn">
                    <div class="d-flex justify-content-lg-start justify-content-center mb-3">
                        <a href="{{route('contact')}} " class="common_btn" >Contact US</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="our_services_sec bg-light py_8">
    <div class="container">
        <div class="heading_our_services">
            <h2>Our Expert Printer Services: Installation, Support and Troubleshooting</h2>
            <p>Explore our expert services, including printer installation, troubleshooting, and maintenance for Epson,
                HP, Canon, and Brother printers. We offer reliable support for home and business users.
                </p>
        </div>

        <div class="row justify-content-center pt-lg-4">
            <div class="col-lg-4 col-md-6 col-sm-12  mb-3 ">
                <div class="service_card">
                    <div class="services_img">
                        <img src="{{ asset('public/assets/images/hp_print_services1.jpg')}}" alt="epson_printer_support">
                    </div>
                    <div class="under_txt_services">
                        <h3>HP Printer Support</h3>
                        <p>Get expert assistance with all HP printer setup, troubleshooting & maintenance.</p>
                        <a href="{{route('hp-printer')}}" class="common_btn">Explore More</a>
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12  mb-3">
                <div class="service_card">
                    <div class="services_img">
                        <img src="{{ asset('public/assets/images/hp_print_services2.jpg')}}" alt="brother_printer_support_number">
                    </div>
                    <div class="under_txt_services">
                        <h3>Epson Printer Support</h3>
                        <p>Reliable support for Epson printers, from setup to complex issues.</p>
                   <a href="{{route('epson-printer')}}" class="common_btn">Explore More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12  mb-3">
                <div class="service_card">
                    <div class="services_img">
                        <img src="{{ asset('public/assets/images/hp_print_services3.jpg')}}" alt="install_epson_printer">
                    </div>
                    <div class="under_txt_services">
                        <h3>Brother Printer Support</h3>
                        <p>Fast and efficient solutions for Brother printer problems and setup.</p>
                           <a href="{{route('brother-printer-support')}}" class="common_btn">Explore More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12  mb-3">
                <div class="service_card">
                    <div class="services_img">
                        <img src="{{ asset('public/assets/images/hp_print_services4.jpg')}}" alt="hp_printer_phone_support">
                    </div>
                    <div class="under_txt_services">
                        <h3>Canon Printer Support</h3>
                        <p>Professional Canon printer support for smooth installation & fixes.
                        </p>
                          <a href="{{route('expert-canon-printer-support-services')}}" class="common_btn">Explore More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12  mb-3">
                <div class="service_card">
                    <div class="services_img">
                        <img src="{{ asset('public/assets/images/hp_print_services5.jpg')}}" alt="install_canon_printer">
                    </div>
                    <div class="under_txt_services">
                        <h3>Installation & Troubleshooting</h3>
                        <p>Complete printer installation and troubleshooting services for all brands.
                        </p>
                           <a href="{{route('printer-installation-troubleshooting-service')}}" class="common_btn">Explore More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="main_home_page contact_bg_img position-relative py_8">
    <div class="footer_bg_layer"></div>
    <div class="container bg-light box_shadow border_radius_6 position-relative p-sm-4 p-3">
        <div class="row align-items-center">
            <div class="col-lg-6 col-12 d-flex justify-content-center aos-init aos-animate" data-aos="fade-right"
                data-aos-easing="linear" data-aos-duration="600">
                <div class="overflow-hidden mx-auto">
                    <img src="{{asset('public/assets/images/service-printer.jpg')}}" alt="epson_printer_support"
                        class="about_img border_radius_6 w-100">
                </div>
            </div>
            <div class="col-lg-6 col-12 mt-4 mt-lg-0 aos-init aos-animate" data-aos="fade-left" data-aos-easing="linear"
                data-aos-duration="600">
                <h2 class="text-center text-lg-start fw-semibold text-black mb-3">Industry-Specific Technical Support
                    for All Your Printer Needs</h2>
                <p>We have dedicated printer support services tailored for various industries to make printing seamless.
                    Whether in health, education, or business, our team will expertly assist you in setting up,
                    configuring, and troubleshooting any printer from top brands such as HP, Epson, Canon, and Brother.
                    We understand every industry's requirements and can provide reliable solutions for installing the
                    printer and <a href="{{route('printer-installation-troubleshooting-service')}}">troubleshooting</a> your printing tasks. After-sales Leave the technical support to us while
                    you attend to what is essential to you.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="why_choose_us py_8">
    <div class="container">
        <div class="heading_why_choose">
            <h2>Why Printer IT Help is Your
                Trusted Choice for Expert Printer Services Expert Technicians
            </h2>
            <p>Our certified technicians have extensive experience providing efficient and reliable printer
                installation, support, and repairs for all major brands, including HP, Epson, Canon, and Brother.
            </p>
        </div>
        <div class="row pt-lg-4">
            <div class="col-lg-4 col-sm-6 col-12 mb-3">
                <div class="our_solution_category">
                    <div class="choose_cards_box">
                        <div class="choose_card">
                            <div class="hover_color_bubble"></div>
                            <div class="img_why_choose">
                                <img src="{{ asset('public/assets/images/Services.png')}}" alt="brother_printer_support_number">
                            </div>
                            <div class="solu_title">
                                <h5>Tailored Solutions for Your Needs</h5>
                            </div>
                            <div class="solu_description">
                                <p>Every printer is unique, and so are your needs. Printer IT Help provides customized
                                    solutions that address specific issues and improve the performance of your printer,
                                    ensuring you get the most out of your device.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12 mb-3">
                <div class="our_solution_category">
                    <div class="choose_cards_box">
                        <div class="choose_card">
                            <div class="hover_color_bubble"></div>
                            <div class="img_why_choose">
                                <img src="{{ asset('public/assets/images/Fast_Responsive_Time.png')}}" alt="install_epson_printer">
                            </div>
                            <div class="solu_title">
                                <h5>Fast Response Time</h5>
                            </div>
                            <div class="solu_description">
                                <p>We know how time-sensitive any printer issue may be. Our team's fast responses and
                                    solutions ensure minimal downtime and seamless operations for our home and business
                                    users.

                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12 mb-3">
                <div class="our_solution_category">
                    <div class="choose_cards_box">
                        <div class="choose_card">
                            <div class="hover_color_bubble"></div>
                            <div class="img_why_choose">
                                <img src="{{ asset('public/assets/images/solution.png')}}" alt="hp_printer_phone_support">
                            </div>
                            <div class="solu_title">
                                <h5>Comprehensive Services</h5>
                            </div>
                            <div class="solu_description">
                                <p>From printer installation to ongoing troubleshooting and maintenance, we offer a full
                                    range of services that meet your specific needs, whether at home or in a business
                                    environment.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12 mb-3">
                <div class="our_solution_category">
                    <div class="choose_cards_box">
                        <div class="choose_card">
                            <div class="hover_color_bubble"></div>
                            <div class="img_why_choose">
                                <img src="{{ asset('public/assets/images/affordable_price.png')}}" alt="install_canon_printer">
                            </div>
                            <div class="solu_title">
                                <h5>Affordable Pricing</h5>
                            </div>
                            <div class="solu_description">
                                <p>We provide high-quality printer services at competitive prices, ensuring you receive
                                    the best value for your money without compromising service quality or customer
                                    satisfaction.

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12 mb-3">
                <div class="our_solution_category">
                    <div class="choose_cards_box">
                        <div class="choose_card">
                            <div class="hover_color_bubble"></div>
                            <div class="img_why_choose">
                                <img src="{{ asset('public/assets/images/support.png')}}" alt="epson_printer_support">
                            </div>
                            <div class="solu_title">
                                <h5>Industry-Specific Support</h5>
                            </div>
                            <div class="solu_description">
                                <p>Whether you are in healthcare, education, or retail, we offer tailored printer
                                    support services designed to meet your industry's unique requirements for optimal
                                    performance.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12 mb-3">
                <div class="our_solution_category">
                    <div class="choose_cards_box">
                        <div class="choose_card">
                            <div class="hover_color_bubble"></div>
                            <div class="img_why_choose">
                                <img src="{{ asset('public/assets/images/custmore_Satisfication.png')}}" alt="brother_printer_support_number">
                            </div>
                            <div class="solu_title">
                                <h5>Customer Satisfaction</h5>
                            </div>
                            <div class="solu_description">
                                <p>Our primary focus is customer satisfaction. We go the extra mile to ensure every
                                    service is performed efficiently and provide solutions that keep your printers
                                    working at peak efficiency.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contact_bg_img py_8">
    <div class="contact_bg_layer pointer_events"></div>
    <div class="container position-relative">
        <div class="row justify-content-between align-items-center pt-3">
            <div class="col-lg-6 col-12 aos-init aos-animate get_in_home" data-aos="fade-right" data-aos-easing="linear"
                data-aos-duration="600">
                <h2 class="fw-semibold text-white mb-1"> Get in Touch with Printer IT Help: We're Here to Assist You
                </h2>
                <div class="form_line mb-3 mt-1"></div>
                <p class="text-white fw-normal mb-3">At Printer IT Help, we are committed to providing exceptional <a href="{{route('contact')}}">customer service and support</a> for all your printer needs. Whether you need assistance with printer installation, troubleshooting, or ongoing maintenance, our team of experts is here to help. We understand the importance of having your printers up and running smoothly, so we offer fast, reliable, and personalized support.
                </p>

            </div>
            <div class="col-lg-5 col-12 mt-md-4 mt-3 mt-lg-0 aos-init aos-animate" data-aos="fade-left"
                data-aos-easing="linear" data-aos-duration="600">
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
</section>

{{-- <section class="latest_blog_sec py_8">
    <div class="container">
        <div classs="latest_blog_heading">
            <h2 class="text-center" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="200"> All Printer
                Setup - Latest <span class="text_blue">Blogs</span> Update</h2>
        </div>
        <div class="row responsive pt-md-4 pt-1 justify-content-center">
            
            @php
                $blogs = App\Models\Blog::orderBy('id','desc')->limit(6)->get();
            @endphp
            @foreach ($blogs as $blog)
                
            <div class="col-4 px-md-3 px-sm-2 px-3" data-aos="zoom-in-up" data-aos-easing="linear"
                data-aos-duration="600">
                <div class="blogs_card">
                    <div class="overflow-hidden">
                        <img src="{{ asset('public/' . $blog->banner) }}" alt="{{$blog->banner_alt}}" class="w-100 blog_img">
                    </div>
                    <div class="p-3">
                        <div class="latest_blog_underimg">
                            <img src="{{ asset('public/assets/images/png/watch.png') }}" alt="install_epson_printer">
                            <a href="{{url('blog-details/' . $blog->slug)}}" class="fw-medium text-black">20 Nov 2024</a>
                        </div>
                        <h3 class="text-black mt-3">{{$blog->title}}</h3>
                        <p class="text-black opacity-75 fw-normal">{{$blog->meta_description}}</p>
                        <a href="{{url('blog-details/' . $blog->slug)}}"><button class="common_btn text-white">Read More</button></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section> --}}



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