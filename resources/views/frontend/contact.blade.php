@extends('layouts.app')
@section('content')
    <section class="about_banner py_8"
        style="background-image: url({{ asset('public/assets/images/contact_banner1.jpg')}});">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-7">
                    <div class="banner_heading">
                        <h1>Contact Us</h1>
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
    </section>

    <section class="py-5 bg-light">
        <div class=" pointer_events"></div>
        <div class="container bg-white py-md-5 py-4 px-md-5 px-4 position-relative box_shadow border_radius_6 my-xl-5">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-6 col-12" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="600">
                    <div class="">
                        <h2 class="fw-semibold text-black fs_32">Contact Us for Expert Printer Support</h2>
                        <p class="text-black fs_16 fw-normal mb-2">At <a href="{{route('home')}}">Printer IT Help</a>, we’re
                            here to provide you with reliable printer support and solutions.
                            <span class="d-xl-block"> Whether you need printer installation, troubleshooting, or
                                maintenance, our team of experts is ready to assist you.</span>
                        </p>
                        <div class="d-flex align-items-center gap-3">
                            <div class="email_circle d-flex justify-content-center align-items-center">
                                <a href="javascript:void(0)"><img src="{{ asset('public/assets/images/png/email.png') }}"
                                        alt="epson printer support" class="icons"></a>
                            </div>
                            <a href="mailto:contact@printerithelp.com"
                                class="text_blue fs_16 fw-normal link">contact@printerithelp.com</a>


                        </div>
                        <div class="d-flex align-items-center gap-3 mt-3">
                            <div class="email_circle d-flex justify-content-center align-items-center">
                                <a href="javascript:void(0)"><img src="{{ asset('public/assets/images/png/phone-call.png') }}"
                                        alt="epson printer support" class="icons"></a>
                            </div>
                            <a href="tel:+1 8887684709"
                                class="text_blue fs_16 fw-normal link">+1 8887684709</a>


                        </div>



                        <div class="d-flex align-items-center gap-3 mt-3">
                            <div class="email_circle d-flex justify-content-center align-items-center">
                                <a href="javascript:void(0)"><img
                                        src="{{ asset('public/assets/images/png/location-pin.png') }}"
                                        alt="brother printer support number" class="icons"></a>
                            </div>
                            <div>

                                <p class="fw-normal text-black fs_16 mt-2">1521 Concord Pike Wilmington,<span
                                        class="d-block">DE 19803</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12 mt-4 mt-lg-0" data-aos="fade-left" data-aos-easing="linear"
                    data-aos-duration="600">
                    <script>
                        @if(Session::has('success'))
                            toastr.success("{{ Session::get('success') }}");
                        @endif
                    </script>
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


    <section class="py-5">
        <div class="container" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="600">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3086.208306270874!2d-75.54681222415174!3d39.77903959420479!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c6fcc48836655b%3A0xbec886f267613c9d!2s1521%20Concord%20Pike%2C%20Wilmington%2C%20DE%2019803%2C%20USA!5e1!3m2!1sen!2sin!4v1745502100714!5m2!1sen!2sin"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>
@endsection