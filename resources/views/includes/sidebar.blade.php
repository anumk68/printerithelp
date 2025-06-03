<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
        </div>
        <div>
            <h4 class="logo-text"> AllPrinter It Help</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-back'></i>
        </div>
     </div>
    <ul class="metismenu" id="menu">
 
        <li>
            <a href="{{route('admindashboard')}}">
                <div class="parent-icon"><i class='bx bx-home-alt'></i>
                </div>
                <div class="menu-title"> Dashboard</div>
            </a>
        </li>

        <li class="menu-label">Pages</li>

        <li>
            <a href="{{route('contactadmin')}}">
                <div class="parent-icon"><i class="lni lni-phone"></i>
                </div>
                <div class="menu-title"> Contact</div>
            </a>
        </li>
        
        <li>
            <a href="{{route('admin.blog')}}">
                <div class="parent-icon"><i class="fa-solid fa-blog"></i>
                </div>
                <div class="menu-title"> Blogs</div>
            </a>
        </li>

        <li> <a href="{{ route('blog-category') }}"><i class="bi bi-arrow-right-short"></i>Blog Category</a>
        
        <li>
            <a href="{{route('homeadmin')}}">
                <div class="parent-icon"><i class="fa fa-home" aria-hidden="true"></i>
                </div>
                <div class="menu-title"> Home Page Form</div>
            </a>
        </li>
        <li>
            <a href="{{route('service.form')}}">
                <div class="parent-icon"><i class="fa fa-home" aria-hidden="true"></i>
                </div>
                <div class="menu-title"> Service Page Form</div>
            </a>
        </li>
        
        <li>
            <a href="{{route('settingg.index')}}">
                <div class="parent-icon"><i class="lni lni-cog"></i>
                </div>
                <div class="menu-title"> Setting</div>
            </a>
        </li>
        <li>
            <a href="{{route('logout')}}">
                <div class="parent-icon"><i class="bi bi-lock-fill"></i>
                </div>
                <div class="menu-title"> Logout</div>
            </a>
        </li>
        
    </ul>
</div>



<section class="button_fixed">
    <div class="container-fluid g-0">
        <div class="btn_main_contact_us">
            <a href="javascript:void(0);" class="team-btn">Contact Us</a>
            <div class="contact-form">
                 <div class="form_popup_class">
                        <form id="contactForm" class="bg-light px-2 py-3 border_radius_6 position-relative overflow-hidden" method="POST" action="{{route('contact.submit')}}">
                            @csrf
                            <input type="hidden" name="form_type" value="home_form">
                            <div class="corner-animation z-1"></div>
                                <div class="position-relative z-1">
                                    <h2 class="fw-semibold text_blue text-center mb-4 position-relative z-2">Request Your Printing Service Now</h2>

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
                                        <input type="text" name="" placeholder="Model Number">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="text" name="" placeholder="Your Name">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="text" name="" placeholder="Your Email">
                                    </div>
                                    <div class="col-md-6 mb-3">
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
                                    <div class="col-md-6 mb-3">
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
  </section>