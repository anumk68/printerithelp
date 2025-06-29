<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="refresh" content="2; url='{{ route('iframe_select_wifi_usb') }}'" />
	
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <title>New Setup</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
    <style>
    
        b.tvd {
    color: white;
}
        .jk-btn{
            padding:5px 30px 5px 30px; background-color:#0096d6;
            border:0px; color:#fff;
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
            border:  solid 4px transparent;
            border-top-color:  #00C8B1 !important;
            border-left-color: #00C8B1 !important;
            border-radius: 50%;
        }
        
        @keyframes loading-bar-spinner {
          0%   { transform: rotate(0deg);   transform: rotate(0deg); }
          100% { transform: rotate(360deg); transform: rotate(360deg); }
        }
    
    </style>
    
  </head>
  <body>
    <div class="container-fluid" >
		<div class="row">
		    <div class="col">
						<!--- Main Work Area ---->
		   <div id="loading-bar-spinner" class="spinner"><div class="spinner-icon"></div></div>
		   
		<!--- Main Work Area ---->
			</div>
		</div>
		</div>
	
<footer class="footer" style="background-color:black; margin:10px 0px 0px 0px; color:#fff ">
  
</footer>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" ></script>
  </body>
</html>