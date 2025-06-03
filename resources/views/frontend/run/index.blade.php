<!DOCTYPE html>

<html lang="en">

<head>

  <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

  <meta charset="utf-8">

  <meta http-equiv="refresh" content="99999999999999">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="style.css">

  <title>New Setup</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">



  <style>
    #my-bnt {

      padding: 6px 30px 6px 30px;

      border: 0px;

      background-color: #0d6efd;

      color: #fff;

      margin-top: 15px;

      border-radius: 50px;

      font-weight: bold;

      font-size: 12px;

    }
  </style>

</head>

<body style="font-family: 'Poppins';">

  <div class="container-fluid">

    <div class="row">

      <div class="col" style="height: 60px; border: 0px solid black;">

      </div>

    </div>

    <div class="row ">

      <div class="col" style="text-align:center; margin:20px 0px 10px 0px;">

        <button id="startButton" class="btn btn-primary">Let's Starts <i
            class="bi bi-arrow-right-circle-fill"></i></button>

        <p style="padding:10px 0px 0px 0px;">Start Printer Setup Wizard</p>

      </div>

    </div>

    <div class="row">

      <div class="col" style="text-align:center; ">

        <img src="{{ asset('public/assets/images/printer-img.png') }}" class="img-fluid" style="width:90%" alt="...">

      </div>

    </div>

    <div id="newDiv" style="display: none;">

      <div class="row" style="background-color: #f6f6f6 ; padding:20px ; ">

        <div class="col-sm-12" style="padding-bottom:10px ;">



        </div>

        <div class="col-sm-6">

          <h5 style="font-weight: bold;  font-size: 16px;">Fill the form and download your printer driver</h5>



          <form id="submitForm" data-success-modal="#success-modal" style="padding: 20px;">

            <input hidden type="text" value="Apr 24 2024 / 04:40 PM;" name="dateTime">



            <input hidden type="text" value="HP PopUP Form" name="fullURL">



            <div class="form-group" style="display:none">

              <label for="radioOptions">Select Printer Connection:</label>

              <div>

                <input type="name" name="radioOptions" value="NA"> USB Connection

                <input type="email" name="radiosOptions" value=""> Wi-Fi Connection

              </div>

            </div>

            <div class="form-group">

              <label for="modalNumber">Model Number:</label>

              <input type="text" class="form-control" name="modalNumber" required>

            </div>

            <button id="my-bnt" type="submit">Quick Download & Install Drivers! <i class="bi bi-download"></i></button>

          </form>



          <div id="successMessage" class="mt-3" style="display: none;">

            <div class="loading">Please wait... <span class="spinner"></span>

            </div>

            <a href="./">Reset <i class="bi bi-arrow-clockwise"></i></a>

          </div>



          <!-- Add Bootstrap JS and jQuery CDN links here -->



          <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>



          <script>

            $(document).ready(function () {

              $("#submitForm").submit(function (event) {

                window.location.href = "{{ route('iframe_select_wifi_usb') }}";

                event.preventDefault();



                var formData = '';


                $.ajax({

                  type: "POST",

                  url: "#",

                  data: formData,

                  dataType: "json",

                  success: function (response) {


                    window.location.href = "new-loading.php";

                  },

                  //   error: function () {

                  //     alert("An error occurred while submitting the form.");

                  //   }

                });

              });

            });

          </script>

        </div>

      </div>

    </div>



    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>

      $(document).ready(function () {

        $("#startButton").click(function () {

          window.location.href = "{{ route('iframe_select_wifi_usb') }}";

        });

      });

    </script>

</body>

</html>