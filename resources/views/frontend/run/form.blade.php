<!doctype html>

<html lang="en">

<head>

    <meta charset="utf-8">

    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="style.css">

    <title>New Setup</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">



    <style>
        /* Add your CSS styles here */

        .hidden {

            display: none;

        }

        .jk-btn {

            padding: 5px 30px 5px 30px;
            background-color: #0096d6;
            border-radius: 5px;

            border: 0px;
            color: #fff;
            font-weight: bold;

        }



        .jk-btn:hover {

            padding: 5px 30px 5px 30px;
            background-color: black;
            border-radius: 5px;

            border: 0px;
            color: #fff;
            font-weight: bold;

        }

        a.num {

            color: #fff;

            text-decoration: none;

        }



        p {

            color: #787878;

            font-family: 'Poppins';

        }



        h4 {

            color: #0d6efd;

            font-weight: 600;

        }



        #loading-bar-spinner.spinner {

            left: 50%;

            margin-left: -20px;

            top: 50%;

            margin-top: -20px;

            position: absolute;

            z-index: 19 !important;

            animation: loading-bar-spinner 400ms linear infinite;

        }



        #loading-bar-spinner.spinner .spinner-icon {

            width: 40px;

            height: 40px;

            border: solid 4px transparent;

            border-top-color: #00C8B1 !important;

            border-left-color: #00C8B1 !important;

            border-radius: 50%;

        }



        @keyframes loading-bar-spinner {

            0% {
                transform: rotate(0deg);
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
                transform: rotate(360deg);
            }

        }







        #pleas {
            display: none;
        }

        #searching-loding {
            display: none;
        }

        #searching-usb {
            display: none;
        }

        /* New */
        #spooler {
            display: none;
        }

        #drivers {
            display: none;
        }

        #files {
            display: none;
        }


        #searching-error {
            display: none;
        }

        #searching-check-usb-cable {
            display: none;
        }

        #searching-check-drivers {
            display: none;
        }

        #offme {
            display: none;
        }

        #showsol {
            display: none;
        }

        #imgoff {
            display: none;
        }
    </style>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</head>

<body style="font-family: 'Poppins';">



    <div class="container">
        <div class="row p-1" id="form_fill">
            <div class="col-12 mt-4" style="justify-content: center;">
                <form onsubmit="form_submitted(event)" style="font-size:15px;" autocomplete="off">
                    @csrf
                    <h3 class="mt-3 mb-3">Please Fill Details</h3>

                    <!-- Model Number -->
                    <div class="mb-3">
                        <label for="modelNumber" class="form-label">Model Number</label>
                        <input type="text" class="form-control" id="model" placeholder="Enter your model number"
                            required>
                    </div>

                    <!-- Brand Dropdown -->
                    <div class="mb-3">
                        <label for="brand" class="form-label">Brand</label>
                        <select class="form-control" id="brand" required>
                            <option value="hp">HP</option>
                            <option value="epson">Epson</option>
                            <option value="brother">Brother</option>
                            <option value="canon">Canon</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                    <!-- Full Name -->
                    <div class="mb-3">
                        <label for="fullName" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter your full name" required>
                    </div>

                    <!-- Email -->
                    <div class="mb-3">
                        <label for="Email" class="form-label">Email</label>
                        <input type="text" class="form-control" id="email" placeholder="Enter your email" required>
                    </div>

                    <!-- Phone Number -->
                    <div class="mb-3">
                        <label for="phoneNumber" class="form-label">Phone Number</label>
                        <input type="text" class="form-control" oninput="this.value = this.value.replace(/\D/g, '')" maxlength="12" pattern="\d{1,12}" id="phone" placeholder="Enter your phone number"
                            required>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>

        <div class="row">
            <div class="col-12 mt-4">
                <div id="driver_btn"
                    style="display: none; justify-content: center; align-items: center;">
                    <p style="font-size:20px;text-align:center;">Thank you for contacting us.</p><br>
                    <!-- <p>For contacting us.</p> -->
                    <p style="padding-left: 19px;padding-right: 6px;"> Please use below button to download the driver.</p>
                    <a id="dwnld_link" href="https://support.hp.com/in-en/drivers/printers"  style="text-decoration:none;text-align:center;margin-left:21%;"
                        target="_blank"><button class="btn btn-primary text-center">Download Drivers <i
                                class="bi bi-arrow-right-circle-fill"></i></button></a>
                </div>
            </div>
        </div>

    </div>

    <script>
        function form_submitted(event) {
            event.preventDefault();
            var form = document.getElementById('form_fill');
            var model = document.getElementById('model').value;
            var name = document.getElementById('name').value;
            var phone = document.getElementById('phone').value;
            var email = document.getElementById('email').value;
            var brand = document.getElementById('brand').value;

            var link = document.getElementById('dwnld_link');

            if(brand == 'hp'){
                link.href = "https://support.hp.com/in-en/drivers/printers";
            }else if(brand == 'epson'){
                link.href = "https://www.epson.eu/support";
            }else if(brand == 'brother'){
                link.href = "https://support.brother.com";
            }else if(brand == 'canon'){
                link.href = "https://in.canon/en/support";
            }else{
                link.href = "https://support.microsoft.com/en-us/windows/download-and-install-the-latest-printer-drivers-4ff66446-a2ab-b77f-46f4-a6d3fe4bf661";
            }

            var d_btn = document.getElementById('driver_btn');
            setTimeout(() => {
                d_btn.style.display = "block";
                form.style.display = "none";
            }, 2000);

            $.ajax({
                type: 'POST',
                url: '{{ route('submit.all_contact') }}',
                data: { _token: '{{ csrf_token() }}',model: model, name: name, phone: phone, email: email, brand: brand },
                success: function (response) {
                    console.log(response);
                }
            });
        }
    </script>




</body>

</html>