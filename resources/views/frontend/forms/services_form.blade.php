<!-- Toastr CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

<!-- Toastr JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<style>
    
    #toast-container > .toast {
        background-color:#51A351 !important;
        color:rgb(247, 247, 247) !important;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
        font-size: 14px;
        font-weight: bold;
        opacity: 1 !important;
    }

</style>

<div class="form_banner">
    <form id="contactForm" class="bg-light p-xl-5 p-sm-4 px-2 py-3 border_radius_6 position-relative overflow-hidden"
        method="POST" action="{{route('submit.all_services')}}" autocomplete="off">
        @csrf
        <input type="hidden" name="form_type" value="home_form">
        <div class="corner-animation z-1"></div>
        <div class="position-relative z-1">
            <h2 class="fw-semibold text_blue text-center mb-4 position-relative z-2">Request Your Printing Service Now
            </h2>

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
                           <option value="{{ $code->code }}">{{ $code->country . ' ' . $code->code }}</option>
                           @endforeach
                            <!-- Add more options as needed -->
                        </select>
                    </div>
                </div>
                <div class="col-md-6 mb-2">
                    <input type="hidden" name="page" value="{{ $page }}">
                    <input type="hidden" name="service" value="{{ $service }}">
                    <input type="number" name="phone" class="form-control" placeholder="Your Phone Number" maxlength="10"
                        oninput="this.value = this.value.slice(0, 10);">
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
    <!-- @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif -->
</div>