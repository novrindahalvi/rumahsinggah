<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    	<title>Hans Guest House</title>
<link href="<?php echo base_url('assets/css/stylesheet.css');?>" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url('assets/css/font-awesome.css');?>" rel="stylesheet">
<!-- <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script> -->
<script src="<?php echo base_url('assets/js/jquery/jquery-1.10.2.js');?>"></script>
<script src="<?php echo base_url('assets/js/jquery/jquery-ui-custom.js');?>"></script>
<script src="<?php echo base_url('assets/js/jquery/maskedinput.js');?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap/js/bootstrap.js');?>"></script>
<script src="<?php echo base_url('assets/js/SpryValidationTextField.js');?>" type="text/javascript"></script>
<script>
function initialize() {
  var myLatlng = new google.maps.LatLng(9.9944167,122.8131111);
  var mapOptions = {
    zoom: 17,
    center: myLatlng
  }
  var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

  var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
      title: 'Hello World!'
  });
}

google.maps.event.addDomListener(window, 'load', initialize);
    </script>
</head>
<body>
	<div class="main_container" >
        <a href="<?php echo base_url('HomeController');?>"><img src="<?php echo base_url('assets/css/images/logo1.png');?>" align="left" /></a>
            <div id="headr_img">
                <span id="main_nav"> 
                	   	<a href="<?php echo base_url('HomeController');?>">Home</a> |  
						<a href="<?php echo base_url('Catalogue');?>">Accomodations</a> |  
                        <a href="<?php echo base_url('Reserve');?>">Reservations</a> |  
                        <a href="<?php echo base_url('Contact');?>">Contact Us</a>
	            </span>
            </div>
   <div id="content_container">
  		<h2 id="home_header">Contact Us</h2>
        <p>Hans Guest House is one of the latest additions to the list of Pension Houses and Hostels for Budget-travelers in the city of Kabankalan, Negros Occidental.
It is just less than 5-minute-ride with a public tricycle to reach the nearby supermarket and downtown. 
</p>
    <div id="map-canvas"></div><br />
    <strong>Street Address:</strong><br />
Corner Sola & Tan Lorenzo Sts.,<br/>
Kabankalan City, Negros Occidental<br/>
Philippines 6100<br/><br/>
<strong>For Inquiries, Please Call:</strong><br/>
<strong><i class="fa fa-phone-square"></i>:</strong> +63 (034) 471-2093 / +63 906 601-8084
   </div>
         <div id="footer_container">
         	Copyright © 2014 Hans Guest House
         </div>
	</div>

</body>
</html>