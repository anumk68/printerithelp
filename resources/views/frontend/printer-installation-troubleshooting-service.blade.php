@extends('layouts.app')
@section('content')
<section class="about_banner py_8" style="background-image: url(public/assets/images/installation_printer1.jpg);">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <div class="banner_heading">
                    <h1>Installation & Troubleshooting</h1>
                    <p>We, at Printer It Help, provide you with professional Installation & Troubleshooting services for all types of printers. Whether it is installing a new device or technical issues with your device, we make sure our solutions are smooth and efficient. Let us take the hassle out of your printer setup and maintenance.
                    </p>
                </div>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                @include('frontend.forms.services_form',['service' => 'installation_service','page' => 'INSTALLATION'])
            </div>
        </div>
    </div>
</section>

<section class="about_section py_8">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6">
                <div class="about_img">
                <img src="{{ asset('public/assets/images/installation_printer2.jpg')}}" alt="">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 ">
                <h2>Fast and Expert Printer Installation & Troubleshooting Assistant</h2>
                <p>At Printer It Help, we provide fast and expert assistance for all your printer installation and troubleshooting needs. Whether you need Help setting up a new printer or resolving connectivity, quality, or error issues, our skilled technicians are here to ensure everything runs smoothly. We offer both on-site and remote support to address your printer problems quickly. With Printer It Helps, you can count on reliable, efficient, and affordable services to promptly get your printer back to peak performance.
                </p>
                <div class="about_us_btn">
                        <div class="d-flex justify-content-lg-start justify-content-center mb-3">
                            <a href="{{route('contact')}}" class="common_btn">Contact us</a>
                        </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about_section color_second py_8">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <h2>Professional Printer Installation and Troubleshooting Support</h2>
                <p>At Printer It Help, we offer <a href="{{route('about.show')}}">professional printer installation</a> and troubleshooting support to ensure your devices run smoothly. Our expert technicians handle everything from setting up new printers to resolving issues like connectivity, print quality, and error messages. We provide fast and reliable solutions, whether on-site or remotely. With Printer It Help, you can count on efficient, affordable service for all your printer needs. Let us take the hassle out of your printer setup and maintenance.
                </p>
               
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="about_img">
                <img src="{{ asset('public/assets/images/installation_printer3.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="our_services_main py_8">
    <div class="container">
            <div class="services_main">
            <h2>Our Services</h2>
            <p>Printer It Help has provided comprehensive printer installation, troubleshooting, and maintenance services tailored to your needs. Our expert team ensures that fast, reliable, and efficient solutions are provided to ensure your printer performs at its best.</p>
            </div>
        <div class="row pt-lg-4">
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="service_clr_card">
                    <div class="solu_title">
                        <h3 class="text-black text-center">Complete Printer Support</h3>
                    </div>
                    <div class="solu_description">
                        <p class="text-black text-center">Printer It Help is committed to providing end-to-end services in the installation and troubleshooting process of HP, Epson, Brother, and Canon printers. From wireless setup to setting up drivers, we ensure performance with no hassles.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12 mt-3 mt-sm-0">

                <div class="service_clr_card2">
                    <div class="solu_title">
                        <h3 class="text-black  text-center">Expert Installation Services</h3>
                    </div>
                    <div class="solu_description">
                        <p class="text-black  text-center">
                            Our professionals are trained to help with professional printer installation. Whether connecting a printer to a network or doing first-time installation, we make it seamless and hassle-free.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12 mt-3 mt-lg-0">

                <div class="service_clr_card">
                    <div class="solu_title">
                        <h3 class="text-black  text-center">Reliable Troubleshooting Assistance</h3>
                    </div>
                    <div class="solu_description">
                        <p class="text-black  text-center">Are you facing printer issues? Our experts handle everything from paper jams to resolving error codes. We diagnose the problem and get your printer back in perfect working order.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12 mt-3">

                <div class="service_clr_card2">
                    <div class="solu_title">
                        <h3 class="text-black  text-center">Printer Installation Services</h3>
                    </div>
                    <div class="solu_description">
                        <p class="text-black text-center">Our expert team provides professional installation services for all major printer brands, including HP, Epson, Brother, and Canon. Whether it's a wit's or wireless connection, we ensure your printer is configured correctly for optimal performance.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12 mt-3">
                <div class="service_clr_card">
                    <div class="solu_title">
                        <h3 class="text-black text-center">Printer Troubleshooting Services</h3>
                    </div>
                    <div class="solu_description">
                        <p class="text-black text-center">Resolve printer issues like paper jams, error codes, slow printing, and connectivity problems with our reliable troubleshooting services. We diagnose and fix issues quickly so your printing experience remains stress-free.

                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12 mt-3">
                <div class="service_clr_card2">
                    <div class="solu_title">
                        <h3 class="text-black text-center">Printer Maintenance Support</h3>
                    </div>
                    <div class="solu_description">
                        <p class="text-black text-center">Regular maintenance is key to avoiding breakdowns. We offer cleaning, updates, and performance optimization services to extend the life of your printer and improve its efficiency.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="main_section py_8" style="background-image: url(public/assets/images/installation_printer4.jpg);">
    <div class="container">
        <div class="main_content_under">
            <h2>Why Choose Us for Installation & Troubleshooting?</h2>
            <p>We offer expert printer installation and troubleshooting services for HP, Epson, Brother, and Canon printers. Our fast, reliable, and affordable solutions ensure your printer runs smoothly. Trust our team for hassle-free support, which is available 24/7!</p>
        </div>
    </div>
</section>

<section class="accordian_services py_8">
    <div class="container">
        <div class="heading_frequently">
            <h2>Frequently Asked Questions</h2>
            <p>We provide expert printer installation and troubleshooting for HP, Epson, Brother, and Canon printers. Our fast, reliable, and affordable services are designed to keep your printer running smoothly, and we offer 24/7 support to address any issues.</p>
        </div>
        <div class="row align-items-center">
            <div class="col-md-6 mb-3">
                <div class="img_accodian">
                <img src="{{ asset('public/assets/images/installation_printer5.jpg')}}" alt="">
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="accordian_main">
                    <div id="faqAccordion" class="accordion accordion-flush">
                        <div class="accordion-item bg-light">
                            <h2 class="accordion-header">
                                <button class="accordion-button fw-medium text-black" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse1" aria-expanded="true" aria-controls="flush-collapse1">
                                How do I install my printer for the first time?
                                </button>
                            </h2>
                            <div id="flush-collapse1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion" style="">
                                <div class="accordion-body text-black">To install your printer, follow the setup instructions in the user manual, including connecting it to your computer or network. If needed, we can assist you with the entire process.</div>
                            </div>
                        </div>
                        <div class="accordion-item bg-light">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-medium text-black" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse2" aria-expanded="false" aria-controls="flush-collapse2">
                                Why isn't my printer connecting to Wi-Fi or my computer?
                                </button>
                            </h2>
                            <div id="flush-collapse2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-black">Connectivity issues can arise due to incorrect network settings, outdated drivers, or hardware conflicts. We can guide you through troubleshooting steps to connect your printer.</div>
                            </div>
                        </div>
                        <div class="accordion-item bg-light">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-medium text-black" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse3" aria-expanded="false" aria-controls="flush-collapse3">
                                What should I do if my printer displays an error code?

                                </button>
                            </h2>
                            <div id="flush-collapse3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-black">Error codes often indicate specific problems, such as paper jams, connectivity issues, or ink problems. Our experts can help decode these error codes and provide solutions.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item bg-light">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-medium text-black" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse4" aria-expanded="false" aria-controls="flush-collapse4">
                                How can I fix paper jams in my printer?
                                </button>
                            </h2>
                            <div id="flush-collapse4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-black">Paper jams can be fixed by carefully removing the paper, ensuring no remnants are left behind, and checking the paper tray and feed mechanisms. If the issue persists, we can help further.</div>
                            </div>
                        </div>
                        <div class="accordion-item bg-light">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-medium text-black" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse5" aria-expanded="false" aria-controls="flush-collapse5">
                                Why is my printer producing low-quality or blurry prints?
                                </button>
                            </h2>
                            <div id="flush-collapse5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-black">Low ink levels, misaligned print heads, or incorrect settings can cause poor print quality. We can help you troubleshoot and optimize your printer for better results.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




@endsection
