<!DOCTYPE html>
<html>
<head>
    <script src="jquery/jquery-1.10.2.js" type="text/javascript"></script>
    <script src="../jQuery-Waterwheel-Carousel/js/jquery.waterwheelCarousel.js" type="text/javascript">
            
        //$(document).ready(function () { 
          //  $('#industries_carousel').load('../jQuery-Waterwheel-Carousel/industries_carousel.php');
        //});
        
    </script>
    <meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="assets/img/favicon.png">	
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>PingBlue</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
	
    <link href="bootstrap3/css/bootstrap.css" rel="stylesheet" />
	<link href="assets/css/gsdk.css" rel="stylesheet" />   
	 
    
    <!--     Font Awesome     -->
    <link href="bootstrap3/css/font-awesome.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Grand+Hotel' rel='stylesheet' type='text/css'>
    
    <style type="text/css">
        #carousel {
            width: 800px;
            height: 300px;
            display: relative;
        }

        #carousel img {
            display: hidden;
            /* hide images until carousel prepares them */
            cursor: pointer;
            /* not needed if you wrap carousel items in links */
        }
    </style>
    
    
    
	<!--<script src="assets/js/jquery-ui-1.10.4.custom.min.js" type="text/javascript"></script>-->
	<script src="bootstrap3/js/bootstrap.js" type="text/javascript"></script>
	<script src="assets/js/gsdk-checkbox.js"></script>
	<script src="assets/js/gsdk-radio.js"></script>
	<script src="assets/js/gsdk-bootstrapswitch.js"></script>
	<script src="assets/js/get-shit-done.js"></script>
    <script src="assets/js/custom.js"></script>
    
   
    
</head>
    
<body >
    <div class="main">
        

    
    <?php include 'navbar.php'; ?>
   
        
    
    <div class="container" style="background-image: url('assets/img/graphic1.jpg'); height:350px; background-size:cover; background-color: rgba(0,0,0,0.1);">
        <h1 style="float:right; ">About Us</h1>
        <div class="row">
        <div class="col-xs-7 primary text-center"  style="margin-top:10%;">
        Pingblue one of region’s leading ICSAT Solutions Provider with over a decades of experience in the industry. ICSAT is a unique hybrid term coined by us meaning Information, Communication, Security, Automation and Technology solutions. We provide complex Telecom solutions that combine the best of technology and next generation’s communication and Automation Solutions and Services together. We provide complete ICT solutions for above demands, combining the best Servers, Storage, Networking, Power management Solutions and Services together. Having Infra Ready, Security is prime most factor keeping business on the move. We offer unique surveillance and access control solution integrated with automation, securing your business infra with current technology trends. Lastly we offer over all ERP and CRM application, with value added custom development, to seamlessly integrate your business functions along with your client, paving way for your quick TCO and ROI. We operate across verticals.
        </div>
        <div class="col-xs-5 primary text-center">
         
        </div>
        
        
        </div>
        
        </div>
        <div class="space"></div>
        <div class="container">
            <h1>Industries</h1>
            
            <div id="industries_carousel" class="row" style="margin:auto;">
            </div>
        </div>

    <?php include 'footer.php'; ?>
</div>
    
    </body>
    

</html>