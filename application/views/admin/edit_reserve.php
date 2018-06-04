<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/style_admin/stylesheet.css');?>" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url('assets/css/jquery-ui-custom.css');?>" />
<link href="<?php echo base_url('assets/css/font-awesome/css/font-awesome.css');?>" rel="stylesheet" />
<script src="<?php echo base_url('assets/js/jquery-1.10.2.js');?>"></script>
<script src="<?php echo base_url('assets/js/jquery-ui-custom.js');?>"></script>
<script src="<?php echo base_url('assets/js/maskedinput.js');?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.js');?>"></script>
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
<title>Admin Panel - Hans Guest House</title>
</head>
<body>
<div class="top_container">
    	<span id="panel_name">Admin Panel</span>
<span id="user">Welcome,<br/><a href="<?php echo base_url('admin/Login/logout');?>" onclick="return confirm('Apakah Anda Yakin Ingin Keluar ?')">Log out</a> </span></div>
<ul id="menu">
    	<li>
          <a href="<?php echo base_url('admin/Dashboard');?>"><i class="fa fa-home"></i>  Home</a>
  </li>
      <li>  
          <a href="<?php echo base_url('admin/Records');?>"><i class="fa fa-list-alt"></i>  Records</a>
        </li>
        <li>
          <a href="<?php echo base_url('admin/Users');?>"><i class="fa fa-users"></i>  User Management</a>
        </li>
    </ul>
<div id="container">
 <h2><i class="fa fa-bars"></i> Records</h2>
<form action="<?php echo base_url('Reserve/updateReservation');?>" method="post" name="form1" id="form1">
  <table align="center">
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">First Name:</td>
      <td><input type="text" name="rsrv_first_name" value="<?php echo htmlentities($reservasi->rsrv_first_name, ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Last Name:</td>
      <td><input type="text" name="rsrv_last_name" value="<?php echo htmlentities($reservasi->rsrv_last_name, ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Email:</td>
      <td><input type="text" name="rsrv_email" value="<?php echo htmlentities($reservasi->rsrv_email, ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Contact Numbers:</td>
      <td><input type="text" name="rsrv_contact" value="<?php echo htmlentities($reservasi->rsrv_contact, ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Room Type:</td>
      <td valign="baseline"><table>
        <tr>
          <td><input type="radio" name="rsrv_room" value="Standard" <?php if (!(strcmp(htmlentities($reservasi->rsrv_room, ENT_COMPAT, 'utf-8'),"Standard"))) {echo "checked=\"checked\"";} ?> />
            Standard</td>
        </tr>
        <tr>
          <td><input type="radio" name="rsrv_room" value="Deluxe" <?php if (!(strcmp(htmlentities($reservasi->rsrv_room, ENT_COMPAT, 'utf-8'),"Deluxe"))) {echo "checked=\"checked\"";} ?> />
            Deluxe</td>
        </tr>
        <tr>
          <td><input type="radio" name="rsrv_room" value="Family" <?php if (!(strcmp(htmlentities($reservasi->rsrv_room, ENT_COMPAT, 'utf-8'),"Family"))) {echo "checked=\"checked\"";} ?> />
            Family</td>
        </tr>
      </table></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Extra Bed:</td>
      <td><select name="rsrv_bed">
        <option value="1" <?php if (!(strcmp(1, htmlentities($reservasi->rsrv_bed, ENT_COMPAT, 'utf-8')))) {echo "SELECTED";} ?>>1</option>
        <option value="2" <?php if (!(strcmp(2, htmlentities($reservasi->rsrv_bed, ENT_COMPAT, 'utf-8')))) {echo "SELECTED";} ?>>2</option>
        <option value="3" <?php if (!(strcmp(3, htmlentities($reservasi->rsrv_bed, ENT_COMPAT, 'utf-8')))) {echo "SELECTED";} ?>>3</option>
        <option value="4" <?php if (!(strcmp(4, htmlentities($reservasi->rsrv_bed, ENT_COMPAT, 'utf-8')))) {echo "SELECTED";} ?>>4</option>
        <option value="" >5</option>
        <option value="5" <?php if (!(strcmp(5, htmlentities($reservasi->rsrv_bed, ENT_COMPAT, 'utf-8')))) {echo "SELECTED";} ?>>5</option>
        <option value="6" <?php if (!(strcmp(6, htmlentities($reservasi->rsrv_bed, ENT_COMPAT, 'utf-8')))) {echo "SELECTED";} ?>>6</option>
        <option value="7" <?php if (!(strcmp(7, htmlentities($reservasi->rsrv_bed, ENT_COMPAT, 'utf-8')))) {echo "SELECTED";} ?>>7</option>
        <option value="8" <?php if (!(strcmp(8, htmlentities($reservasi->rsrv_bed, ENT_COMPAT, 'utf-8')))) {echo "SELECTED";} ?>>8</option>
        <option value="9" <?php if (!(strcmp(9, htmlentities($reservasi->rsrv_bed, ENT_COMPAT, 'utf-8')))) {echo "SELECTED";} ?>>9</option>
        <option value="10" <?php if (!(strcmp(10, htmlentities($reservasi->rsrv_bed, ENT_COMPAT, 'utf-8')))) {echo "SELECTED";} ?>>10</option>
      </select></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Extra Pillow:</td>
      <td>
      <select name="rsrv_pillow">
      <option value="1" <?php if (!(strcmp(1, htmlentities($reservasi->rsrv_pillow, ENT_COMPAT, 'utf-8')))) {echo "SELECTED";} ?>>1</option>
      <option value="2" <?php if (!(strcmp(2, htmlentities($reservasi->rsrv_pillow, ENT_COMPAT, 'utf-8')))) {echo "SELECTED";} ?>>2</option>
      <option value="3" <?php if (!(strcmp(3, htmlentities($reservasi->rsrv_pillow, ENT_COMPAT, 'utf-8')))) {echo "SELECTED";} ?>>3</option>
      <option value="4" <?php if (!(strcmp(1, htmlentities($reservasi->rsrv_pillow, ENT_COMPAT, 'utf-8')))) {echo "SELECTED";} ?>>4</option>
      <option value="5" <?php if (!(strcmp(5, htmlentities($reservasi->rsrv_pillow, ENT_COMPAT, 'utf-8')))) {echo "SELECTED";} ?>>5</option>
      <option value="6" <?php if (!(strcmp(6, htmlentities($reservasi->rsrv_pillow, ENT_COMPAT, 'utf-8')))) {echo "SELECTED";} ?>>6</option>
      <option value="7" <?php if (!(strcmp(7, htmlentities($reservasi->rsrv_pillow, ENT_COMPAT, 'utf-8')))) {echo "SELECTED";} ?>>7</option>
      <option value="8" <?php if (!(strcmp(8, htmlentities($reservasi->rsrv_pillow, ENT_COMPAT, 'utf-8')))) {echo "SELECTED";} ?>>8</option>
      <option value="9" <?php if (!(strcmp(9, htmlentities($reservasi->rsrv_pillow, ENT_COMPAT, 'utf-8')))) {echo "SELECTED";} ?>>9</option>
            <option value="10" <?php if (!(strcmp(10, htmlentities($reservasi->rsrv_pillow, ENT_COMPAT, 'utf-8')))) {echo "SELECTED";} ?>>10</option>
      </select></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Extra Towel:</td>
      <td><select name="rsrv_towel">
      <option value="1" <?php if (!(strcmp(1, htmlentities($reservasi->rsrv_towel, ENT_COMPAT, 'utf-8')))) {echo "SELECTED";} ?>>1</option>
      <option value="2" <?php if (!(strcmp(2, htmlentities($reservasi->rsrv_towel, ENT_COMPAT, 'utf-8')))) {echo "SELECTED";} ?>>2</option>
      <option value="3" <?php if (!(strcmp(3, htmlentities($reservasi->rsrv_towel, ENT_COMPAT, 'utf-8')))) {echo "SELECTED";} ?>>3</option>
      <option value="4" <?php if (!(strcmp(1, htmlentities($reservasi->rsrv_towel, ENT_COMPAT, 'utf-8')))) {echo "SELECTED";} ?>>4</option>
      <option value="5" <?php if (!(strcmp(5, htmlentities($reservasi->rsrv_towel, ENT_COMPAT, 'utf-8')))) {echo "SELECTED";} ?>>5</option>
      <option value="6" <?php if (!(strcmp(6, htmlentities($reservasi->rsrv_towel, ENT_COMPAT, 'utf-8')))) {echo "SELECTED";} ?>>6</option>
      <option value="7" <?php if (!(strcmp(7, htmlentities($reservasi->rsrv_towel, ENT_COMPAT, 'utf-8')))) {echo "SELECTED";} ?>>7</option>
      <option value="8" <?php if (!(strcmp(8, htmlentities($reservasi->rsrv_pillow, ENT_COMPAT, 'utf-8')))) {echo "SELECTED";} ?>>8</option>
      <option value="9" <?php if (!(strcmp(9, htmlentities($reservasi->rsrv_towel, ENT_COMPAT, 'utf-8')))) {echo "SELECTED";} ?>>9</option>
            <option value="10" <?php if (!(strcmp(10, htmlentities($reservasi->rsrv_towel, ENT_COMPAT, 'utf-8')))) {echo "SELECTED";} ?>>10</option>
      </select></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Guest Kit:</td>
      <td><select name="rsrv_kit">
        <option value="1" <?php if (!(strcmp(1, htmlentities($reservasi->rsrv_kit, ENT_COMPAT, 'utf-8')))) {echo "SELECTED";} ?>>1</option>
        <option value="2" <?php if (!(strcmp(2, htmlentities($reservasi->rsrv_kit, ENT_COMPAT, 'utf-8')))) {echo "SELECTED";} ?>>2</option>
        <option value="3" <?php if (!(strcmp(3, htmlentities($reservasi->rsrv_kit, ENT_COMPAT, 'utf-8')))) {echo "SELECTED";} ?>>3</option>
        <option value="4" <?php if (!(strcmp(4, htmlentities($reservasi->rsrv_kit, ENT_COMPAT, 'utf-8')))) {echo "SELECTED";} ?>>4</option>
        <option value="5" <?php if (!(strcmp(5, htmlentities($reservasi->rsrv_kit, ENT_COMPAT, 'utf-8')))) {echo "SELECTED";} ?>>5</option>
        
      </select></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Check In:</td>
      <td><input type="text" id="dateStart" name="rsrv_start" value="<?php echo htmlentities($reservasi->rsrv_start, ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Check Out:</td>
      <td><input type="text" id="dateEnd" name="rsrv_end" value="<?php echo htmlentities($reservasi->rsrv_end, ENT_COMPAT, 'utf-8'); ?>" size="32" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Guest:</td>
      <td><select name="rsrv_guest">
        <option value="1" <?php if (!(strcmp(1, htmlentities($reservasi->rsrv_guest, ENT_COMPAT, 'utf-8')))) {echo "SELECTED";} ?>>1</option>
        <option value="2" <?php if (!(strcmp(2, htmlentities($reservasi->rsrv_guest, ENT_COMPAT, 'utf-8')))) {echo "SELECTED";} ?>>2</option>
        <option value="3" <?php if (!(strcmp(3, htmlentities($reservasi->rsrv_guest, ENT_COMPAT, 'utf-8')))) {echo "SELECTED";} ?>>3</option>
        <option value="4" <?php if (!(strcmp(4, htmlentities($reservasi->rsrv_guest, ENT_COMPAT, 'utf-8')))) {echo "SELECTED";} ?>>4</option>
        <option value="5" <?php if (!(strcmp(5, htmlentities($reservasi->rsrv_guest, ENT_COMPAT, 'utf-8')))) {echo "SELECTED";} ?>>5</option>
        <option value="6" <?php if (!(strcmp(6, htmlentities($reservasi->rsrv_guest, ENT_COMPAT, 'utf-8')))) {echo "SELECTED";} ?>>6</option>
        <option value="7" <?php if (!(strcmp(7, htmlentities($reservasi->rsrv_guest, ENT_COMPAT, 'utf-8')))) {echo "SELECTED";} ?>>7</option>
        <option value="8" <?php if (!(strcmp(8, htmlentities($reservasi->rsrv_guest, ENT_COMPAT, 'utf-8')))) {echo "SELECTED";} ?>>8</option>
        <option value="9" <?php if (!(strcmp(9, htmlentities($reservasi->rsrv_guest, ENT_COMPAT, 'utf-8')))) {echo "SELECTED";} ?>>9</option>
        <option value="10" <?php if (!(strcmp(10, htmlentities($reservasi->rsrv_guest, ENT_COMPAT, 'utf-8')))) {echo "SELECTED";} ?>>10</option>
      </select></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Notes:</td>
      <td><textarea name="rsrv_notes"><?php echo htmlentities($reservasi->rsrv_notes, ENT_COMPAT, 'utf-8'); ?></textarea></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">&nbsp;</td>
      <td><input type="submit" value="Update record" /></td>
    </tr>
  </table>
  <input type="hidden" name="rsrv_id" value="<?php echo $reservasi->rsrv_id; ?>" />
  <input type="hidden" name="rsrv_timestamp" value="<?php echo htmlentities($reservasi->rsrv_timestamp, ENT_COMPAT, 'utf-8'); ?>" />
  <input type="hidden" name="MM_update" value="form1" />
  <input type="hidden" name="rsrv_id" value="<?php echo $reservasi->rsrv_id; ?>" />
</form>
 <p>&nbsp;</p>
</div>
</body>
</html>