<footer class="footer_bg_img position-relative py_8 pb-4">
    <div class="footer_bg_layer z-0 pointer_events"></div>
    <div class="container position-relative z-1">
        <div class="row">
            <div class="col-lg-4 col-12">
                <div class="footer_logo">
                    <a href="#"><img src="{{ asset('public/assets/images/png/page-logo.png') }}" alt="page-logo"></a>
                </div>
                <p>Printer IT Help offers expert support for HP, Epson, Brother, and Canon printers. We ensure seamless solutions for home and business users, from setup to troubleshooting and maintenance. Focus on what matters while we handle your printer needs!</p>
                <div class="d-lg-flex gap-3 d-none social_icons_print">
                        <a href="https://www.instagram.com/printerithelp/"><i class="fa-brands fa-instagram"></i></a>
                        <a href="https://www.facebook.com/printerithelp"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="https://www.youtube.com/@PrinterITHelp"><i class="fa-brands fa-youtube"></i></a>
                        <a href="https://x.com/printer_it_help"><i class="fa-brands fa-x-twitter"></i></a>
                    </div>
            </div>
            <div class="col-xl-8 col-lg-7 col-12 mt-4 mt-lg-0 ">
                <div class="row">
                    <div class="col-lg-4 col-12">
                        <ul class=" services_foot">
                            <li class="text-white fs_18 fw-medium mb-2">Our Services</li>
                            <li><a href="{{route('hp-printer')}}">HP Printer Support</a></li>
                            <li><a href="{{route('epson-printer')}}">Epson Printer Support</a></li>
                            <li><a href="{{route('brother-printer-support')}}">Brother Printer Support</a></li>
                            <li><a href="{{route('expert-canon-printer-support-services')}}">Canon Printer Support</a></li>
                            <li><a href="{{route('printer-installation-troubleshooting-service')}}">Installation & Troubleshooting</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-12">
                        <ul class="p-0 m-0">
                            <li class="text-white fs_18 fw-medium mb-2">Quick Links</li>
                            <li><a href="{{route('blog.list')}}">Blog</a></li>
                            <li><a href="{{route('privacy-policy')}}">  Privacy Policy</a></li>
                            <li><a href="{{route('terms-policy')}}">  Terms & Condition</a></li>
                            <li><a href="{{route('refund-policy')}}">   Refund Policy</a></li>
                                                     
                        </ul>
                    </div>  
                    
                    <div class="col-sm-4 col-12 mt-3 mt-sm-0">
                        <p class="text-white fs_18 fw-medium mb-2">Contact Us</p>
                        {{-- <div class="d-flex gap-3 align-items-center pe-lg-5">
                            <img src="{{ asset('public/assets/images/png/location-pin.png') }}" alt="location-pin" class="mail_icon">
                            <div>
                                <p class="text-white fw-medium fs_18 mb-0">Location</p>
                                <a href="javascript:void(0)" class="text-white fs_16 fw-normal">Lorem,
                                    ipsum dolor.</a>
                            </div>
                        </div> --}}
                        <div class=" gap-3 align-items-center mt-3">
                           
                            <div>
                                 <img src="{{ asset('public/assets/images/png/email.png') }}" alt="mail-icon" class="mail_icon me-2">
                              <span> <a href="mailto:contact@printerithelp.com" class="text-white fs_16 fw-normal">contact@printerithelp.com</a></span>
                               
                            </div>
                              <div class="mobile mt-3">
                              
                                <a href="tel:+1 8887684709" class="text-white fs_16 fw-normal"><i class="fa-solid fa-phone me-2"></i>+1 8887684709</a>
                            </div>
                             <div class="mobile mt-3">
                              <p class="text-white fs_16 fw-normal"> <i class="fa-solid fa-location-dot me-2"></i>1521 Concord Pike Wilmington, DE 19803</a></p>
                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer_line mt-5 position-relative z-1"></div>
    <p class="fw-normal text-white text-center fs_16 my-3 opacity-75 position-relative z-1">© 2024 All Rights Reserved

</p>
</footer> 
