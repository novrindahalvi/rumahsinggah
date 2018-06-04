<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/stylesheet.css');?>" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url('assets/css/jquery-ui-custom.css');?>" />
<link href="<?php echo base_url('assets/css/font-awesome.css');?>" rel="stylesheet" />
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
<span id="user">Welcome, <?php echo $row_user['user_full']; ?><br/><a href="<?php echo $logoutAction ?>">Log out</a> </span></div>
<ul id="menu">
    	<li>
          <a href="<?php echo base_url('Admin_Panel');?>"><i class="fa fa-home"></i>  Home</a>
  </li>
      <li>  
          <a href="<?php echo base_url('Records');?>"><i class="fa fa-list-alt"></i>  Records</a>
        </li>
        <li>
          <a href="<?php echo base_url('Users');?>"><i class="fa fa-users"></i>  User Management</a>
        </li>
    </ul>
<div id="container">
 <h2>Delete Record</h2>
<form method="POST" name="form1" id="form1">
  <table align="center">
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">First Name:</td>
      <td><input name="rsrv_first_name" type="text" value="<?php echo $row_records['rsrv_first_name']; ?>" size="32" disabled="disabled" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Last Name:</td>
      <td><input name="rsrv_last_name" type="text" value="<?php echo $row_records['rsrv_last_name']; ?>" size="32" disabled="disabled" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Email:</td>
      <td><input name="rsrv_email" type="text" value="<?php echo $row_records['rsrv_email']; ?>" size="32" disabled="disabled"/></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Contact Numbers:</td>
      <td><input name="rsrv_contact" type="text" value="<?php echo $row_records['rsrv_contact']; ?>" size="32" disabled="disabled" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Check In:</td>
      <td><input name="rsrv_start" type="text" id="dateStart" value="<?php echo $row_records['rsrv_start']; ?>" size="32" disabled="disabled" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Check Out:</td>
      <td><input name="rsrv_end" type="text" id="dateEnd" value="<?php echo $row_records['rsrv_end']; ?>" size="32" disabled="disabled" /></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">Notes:</td>
      <td><textarea name="rsrv_notes" disabled="disabled"><?php echo $row_records['rsrv_notes']; ?></textarea></td>
    </tr>
    <tr valign="baseline">
      <td nowrap="nowrap" align="right">&nbsp;</td>
      <td><input type="submit" value="Delete Record" /></td>
    </tr>
  </table>
  <input type="hidden" name="rsrv_id" value=<?php echo $row_records['rsrv_id']; ?> />
  <input type="hidden" name="rsrv_timestamp" />
</form>
 <p>&nbsp;</p>
</div>
</body>
</html>