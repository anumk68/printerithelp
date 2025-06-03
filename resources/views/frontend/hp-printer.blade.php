@extends('layouts.app')
@section('content')
<section class="about_banner py_8" style="background-image: url({{asset('public/assets/images/banner_bg_about.jpg')}});">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <div class="banner_heading">
                    <h1>HP Printer</h1>
                    <p>Discover the ultimate solutions for HP Printer setup, troubleshooting, and maintenance. From
                        driver updates to error fixes, ensure seamless printing with expert guidance. Get the most out
                        of your HP Printer with reliable support and services.
                    </p>
                </div>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">
                @include('frontend.forms.services_form',['service' => 'hp_service','page' => 'HP'])
            </div>
        </div>
    </div>
</section>

<section class="about_section py_8">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                <div class="about_img">
                    <img src="{{ asset('public/assets/images/hp__printer1.jpg')}}" alt="hp printer support phone number">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <span>About Us</span>
                <h2>HP Printer Support</h2>
                <p>Get fast, expert support with our HP Printer and Epson Printer solutions. Whether it's installation, setup, driver issues, or troubleshooting print quality problems, our dedicated team is ready to assist. We help resolve common issues like paper jams, connectivity problems, and error messages quickly and efficiently. Our team also guides updating firmware, configuring network settings, and optimizing printer performance. Don't let printer issues slow you down—contact HP Printer and <a href="{{route('epson-printer')}}">Epson Printer support</a> for reliable solutions and get your printer back to working like new!
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
            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                <h2>Contact HP Printer Support for Fast and Reliable Solutions</h2>
                <p>Need help with your HP printer? Contact our HP Printer Support phone number for quick and
                    professional assistance. Whether you're experiencing issues with printer setup, connectivity, or
                    print quality, our experienced technicians are ready to help. We provide troubleshooting solutions
                    for everyday problems like paper jams, error messages, slow printing, and more. Our support team can
                    guide you through driver installations, software updates, and network configurations to ensure your
                    printer functions optimally. Don't let technical issues slow you down—call our HP Printer Support
                    phone number now for immediate assistance and get back to printing without delays!
                </p>

            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                <div class="about_img">
                    <img src="{{ asset('public/assets/images/hp__printer2.jpg')}}" alt="hp printer support number">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="our_services_main py_8">
    <div class="container">
        <div class="services_main">
            <h2> Our Services</h2>
            <p>Our services provide expert solutions for printer setup, troubleshooting, and maintenance. We ensure
                your printers run smoothly with fast, reliable support for all major brands.
            </p>
        </div>
        <div class="row pt-lg-4">
            <div class="col-lg-4 col-sm-6 col-12">
                <div class="service_clr_card">
                    <div class="solu_title">
                        <h3 class="text-black text-center">HP Printer Support Phone Number</h3>
                    </div>
                    <div class="solu_description">
                        <p class="text-black text-center">Need urgent HP printer support? Simply call our HP Printer
                            Support Telephone Number for fast expert fixes. We are here to facilitate your installation,
                            troubleshoot issues, and resolve frequently encountered printer problems. Get instant help
                            from our printer experts to get your printer fixed when dealing with connectivity issues,
                            paper jam problems, or error codes.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12 mt-3 mt-sm-0">

                <div class="service_clr_card2">
                    <div class="solu_title">
                        <h3 class="text-black text-center">HP Printer Support Number</h3>
                    </div>
                    <div class="solu_description">
                        <p class="text-black text-center">Need help with your HP printer? Dial our HP Printer Support
                            Number for direct access to professional assistance. Our support team will guide you through
                            any issue with the printer so you get the right solution without delay. From setting up your
                            printer to handling advanced technical issues, our HP printer support team is here to assist
                            you every step of the way.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12 mt-3 mt-lg-0">

                <div class="service_clr_card">
                    <div class="solu_title">
                        <h3 class="text-black text-center">Plans for HP Printer Support</h3>
                    </div>
                    <div class="solu_description">
                        <p class="text-black text-center">Our plans on HP printer support are flexible enough for home
                            users and businesses. We will troubleshoot, maintain, update your drivers, and configure
                            networks on your HP printers. By having our support plans, you will have priority services
                            to ensure your printer stays in good running condition, with no unwanted downtime.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12 mt-3">

                <div class="service_clr_card2">
                    <div class="solu_title">
                        <h3 class="text-black text-center">HP Printer Phone Support</h3>
                    </div>
                    <div class="solu_description">
                        <p class="text-black text-center">Get fast, reliable solutions with our HP Printer Phone
                            Support. Our expert technicians are just a call away to help you resolve any issues with
                            your HP printer. Whether you're facing hardware failures, software errors, or connectivity
                            challenges, our HP printer phone support team provides real-time guidance, ensuring minimal
                            disruption to your workflow.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12 mt-3">
                <div class="service_clr_card">
                    <div class="solu_title">
                        <h3 class="text-black text-center">HP Printer Installation Assistance</h3>
                    </div>
                    <div class="solu_description">
                        <p class="text-black text-center">Struggling with setting up your new HP printer? Call our HP
                            Printer Installation Assistance number to get step-by-step help from our experts. Whether
                            it's connecting to Wi-Fi, configuring print settings, or integrating with your devices, we
                            ensure smooth setup and quick resolution of any installation concerns.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12 mt-3">
                <div class="service_clr_card2">
                    <div class="solu_title">
                        <h3 class="text-black text-center"> HP Printer Maintenance Services</h3>
                    </div>
                    <div class="solu_description">
                        <p class="text-black text-center">Ensure your HP printer is always performing at its best with
                            our Maintenance Services. Our team offers regular checks, cleaning, and software updates to
                            prevent common printer issues and extend the lifespan of your device. We offer both one-time
                            and subscription-based maintenance plans tailored to your needs.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="main_section py_8" style="background-image: url(public/assets/images/hp__printer4.jpg);">
    <div class="container">
        <div class="main_content_under">
            <h2>Why Choose HP Printer?</h2>
            <p>HP printers are known for their reliability, high-quality print output, and innovative features. Whether
                you need a printer for home use, office tasks, or professional printing, HP offers a wide range of
                models designed to meet your needs. HP printers are equipped with user-friendly interfaces, fast
                printing speeds, and energy-efficient technologies. Additionally, HP provides excellent customer
                support, regular updates, and a variety of services, ensuring a seamless printing experience. Choose HP
                for durable, efficient, and high-performance printing solutions.</p>
        </div>
    </div>
</section>

<section class="accordian_services py_8">
    <div class="container">
        <div class="heading_frequently">
            <h2>Frequently Asked Questions - HP Printer Support</h2>
            <p>Find answers to common issues and queries regarding HP printer setup, troubleshooting, and maintenance.
                Below are frequently asked questions to help you quickly and efficiently resolve problems.</p>
        </div>
        <div class="row align-items-center">
            <div class="col-md-6 mb-3">
                <div class="img_accodian">
                    <img src="{{ asset('public/assets/images/hp__printer3.jpg')}}" alt="plans support hp printer">
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="accordian_main">
                    <div id="faqAccordion" class="accordion accordion-flush">
                        <div class="accordion-item bg-light">
                            <h2 class="accordion-header">
                                <button class="accordion-button text-black" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapse1" aria-expanded="true"
                                    aria-controls="flush-collapse1">
                                    How do I set up my HP printer?
                                </button>
                            </h2>
                            <div id="flush-collapse1" class="accordion-collapse collapse show"
                                data-bs-parent="#faqAccordion" style="">
                                <div class="accordion-body text-black">To set up your HP printer, unpack the device,
                                    connect it to a power source, install the ink cartridges, and load paper into the
                                    tray. Then, download the necessary drivers from the HP support website and follow
                                    the on-screen instructions for wireless setup.</div>
                            </div>
                        </div>
                        <div class="accordion-item bg-light">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed text-black" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#flush-collapse2" aria-expanded="false"
                                    aria-controls="flush-collapse2">
                                    Why is my HP printer not printing?
                                </button>
                            </h2>
                            <div id="flush-collapse2" class="accordion-collapse collapse"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-black">If your HP printer isn't printing, ensure it's
                                    connected to your computer or Wi-Fi network. Also, check for low ink, paper jams, or
                                    any errors in the print queue. Restart both the printer and computer and check the
                                    print settings.</div>
                            </div>
                        </div>
                        <div class="accordion-item bg-light">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed text-black" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#flush-collapse3" aria-expanded="false"
                                    aria-controls="flush-collapse3">
                                    How can I fix HP printer connectivity issues?
                                </button>
                            </h2>
                            <div id="flush-collapse3" class="accordion-collapse collapse"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-black">Make sure your printer is connected to the
                                    correct network for connectivity issues. Restart the printer and the router, and
                                    check that the wireless settings are correctly configured. If using USB, ensure the
                                    cable is properly connected.</div>
                            </div>
                        </div>
                        <div class="accordion-item bg-light">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed text-black" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#flush-collapse4" aria-expanded="false"
                                    aria-controls="flush-collapse4">
                                    How do I resolve a paper jam in my HP printer?

                                </button>
                            </h2>
                            <div id="flush-collapse4" class="accordion-collapse collapse"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-black">To fix a paper jam, open the printer's access
                                    panel and gently pull out the jammed paper, ensuring no small pieces remain inside.
                                    Afterward, reload the paper correctly and try printing again.</div>
                            </div>
                        </div>
                        <div class="accordion-item bg-light">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed text-black" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#flush-collapse5" aria-expanded="false"
                                    aria-controls="flush-collapse5">
                                    What should I do if my HP printer shows an error message?

                                </button>
                            </h2>
                            <div id="flush-collapse5" class="accordion-collapse collapse"
                                data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-black">Error messages usually indicate issues like paper
                                    jams, low ink, or network problems. For troubleshooting steps, refer to the
                                    printer's manual or visit the HP support website for more detailed solutions. If the
                                    issue persists, contact HP support for further assistance.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




@endsection