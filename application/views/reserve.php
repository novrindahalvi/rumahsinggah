<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    	<title>Hans Guest House</title>
<link href="<?php echo base_url('assets/css/stylesheet.css');?>" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url('assets/css/jquery-ui-custom.css');?>" />
<script src="<?php echo base_url('assets/js/jquery-1.10.2.js');?>"></script>
<script src="<?php echo base_url('assets/js/jquery-ui-custom.js');?>"></script>
<script src="<?php echo base_url('assets/js/maskedinput.js');?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.js');?>"></script>
<script src="<?php echo base_url('assets/js/SpryValidationTextField.js');?>" type="text/javascript"></script>
<script>
  jQuery(document).ready(function($) {var dateToday = new Date();
var dates = $("#dateStart, #dateEnd").datepicker({
    defaultDate: "+1w",
	dateFormat: 'yy-mm-dd',
    changeMonth: true,
    numberOfMonths: 1,
    minDate: dateToday,
    onSelect: function(selectedDate) {
        var option = this.id == "dateStart" ? "minDate" : "maxDate",
            instance = $(this).data("datepicker"),
            date = $.datepicker.parseDate(instance.settings.dateFormat || $.datepicker.settings.dateFormat, selectedDate, instance.settings);
        dates.not(this).datepicker("option", option, date);
   	 }
	});
});
  </script>
<script type="text/javascript">
	jQuery(function($){
   $("#rsrv_contact").mask("99999999999");
	});
	</script>
<link href="<?php echo base_url('assets/css/SpryValidationTextField.css');?>" rel="stylesheet" type="text/css" />
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
  
            <div id="content_left">
<h2 id="home_header">Reservation Form</h2>
<form action="<?php echo base_url('Reserve/addReservation');?>" method="POST" name="form1" id="rsrv_form">
                <label>First Name</label><br />
<span id="sprytextfield1">
                <input type="text" name="rsrv_first_name" value="" size="30" placeholder="Type here" />
      <span class="textfieldRequiredMsg">This field is required</span></span><br/>
                <label>Last Name</label><br />
<span id="sprytextfield2">
                <input type="text" name="rsrv_last_name" value="" size="30" placeholder="Type here" />
                <span class="textfieldRequiredMsg">This field is required</span></span><br /><label>Email</label><br />
<input type="text" name="rsrv_email" value="" size="30" placeholder="Type here" /><br />
                <label>Contact Number</label><br />
                <span id="sprytextfield3">
                <input type="text" name="rsrv_contact" value="" size="30" id="rsrv_contact" placeholder="Type here" />
<span class="textfieldRequiredMsg">This field is required</span></span><br />
                <label>Additional Guests</label></br>
                  <select name="rsrv_guest" size="1" id="select" placeholder="Select">
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                  <values>
                  </select>
                  <br /><br />
                  <label>Rooms</label>
                      <fieldset><label>
                        <input name="rsrv_room" type="radio" id="rsrv_room_1" value="Standard" checked="checked" />
                        Standard Room (Php700.00)</label><br/>
                      <label>
                        <input type="radio" name="rsrv_room" value="Family" id="rsrv_room_2" />
                        Family Room (Php900.00)</label><br/>
                      <label>
                        <input type="radio" name="rsrv_room" value="Deluxe" id="rsrv_room_3" />
                        Deluxe Room (Php1000.00)</label><br/>
                        </fieldset>
                      <label>Addons</label>
                      <fieldset>
                        <label>Extra Bed (Php200.00)
                          <select name="rsrv_bed" id="rsrv_bed">
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <values>
                          </select>
                        </label><br/>
                        <label>Extra Towel (Php50.00)
                          <select name="rsrv_towel" id="rsrv_towel">
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <values>
                          </select>
                        </label><br/>
                        <label>Extra Pillow (Php30.00)
                          <select name="rsrv_pillow" id="rsrv_pillow">
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <values>
                          </select>
                        </label><br/>
                     <label>Extra Guest Kit (Php20.00)
                          <select name="rsrv_kit" id="rsrv_kit">
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <values>
                          </select>
                        </label><br/>
                        
      </fieldset>
<label>Reservation Dates:</label><br />
<fieldset>
				<label>Start:</label>
<span id="sprytextfield4">
				<input type="text" name="rsrv_start" value="" size="15" id="dateStart" placeholder="Pick a Date"  />
	  <span class="textfieldRequiredMsg">Please select a date.</span></span><br />
                <label>End:</label>
                <span id="sprytextfield5">
                <input type="text" name="rsrv_end" value="" size="15" id="dateEnd" placeholder="Pick a Date" />         
      <span class="textfieldRequiredMsg">Please select a date.</span></span><br/>
     <!-- <div class="check_avail"><a href="">Check Availability</a></div> --></fieldset>
                <label>Additional Notes:</label><br />
<textarea name="rsrv_notes" cols="40" rows="5"></textarea>
                <input type="submit" value="Submit" /> <input name="Reset" type="reset" value="Clear Form" />
      <input type="hidden" name="rsrv_id" value="" />
                <input type="hidden" name="rsrv_timestamp" />
                <input type="hidden" name="MM_insert" value="form1" />
</form>
     </div>
     <div id="content_right">
     </div>
   </div>
         <div id="footer_container">
         	Copyright © 2014 Hans Guest House
         </div>
	</div>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5");
</script>
</body>
</html>