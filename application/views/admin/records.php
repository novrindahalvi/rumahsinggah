<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/style_admin/stylesheet.css');?>" />
<link rel="stylesheet" href="<?php echo base_url('assets/css/jquery-ui-custom.css');?>" />
<script src="<?php echo base_url('assets/js/jquery-1.10.2.js');?>"></script>
<script src="<?php echo base_url('assets/js/jquery-ui-custom.js');?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.js');?>"></script>
<link href="<?php echo base_url('assets/css/font-awesome/css/font-awesome.css');?>" rel="stylesheet" />
 <script>
jQuery(function($) {
  $("#opens_window").click(function(e) {
      e.preventDefault();       
      $('#dialog').dialog();
  });
});
</script>
<title>Admin Panel - Hans Guest House</title>
</head>
<body>
<div class="top_container">
    	<span id="panel_name">Admin Panel</span>
  <span id="user">Welcome<br/><a href="<?php echo base_url('admin/Login/logout');?>" onclick="return confirm('Apakah Anda Yakin Ingin Keluar ?')">Log out</a> </span></div>
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
 <table cellpadding="0" cellspacing="0" class="data_table">
   <tr id="tr">
     <td>No.</td>
     <td>Submitted</td>
     <td>First Name</td>
     <td>Last Name</td>
     <td>Contact No.</td>
     <td>Check-In</td>
     <td>Check-Out</td>
     <td>Room Type</td>
     <td>Extra Bed</td>
     <td>Extra Towel</td>
     <td>Extra Pillow</td>
     <td>Guest Kit</td>
     <td>Notes</td>
     <td>Actions</td>
   </tr>
   <?php foreach($reservation as $row_records):?>
      <tr>
       <td><?php echo $row_records['rsrv_id']; ?></td>
       <td><?php echo $row_records['rsrv_timestamp']; ?></td>
       <td><?php echo $row_records['rsrv_first_name']; ?></td>
       <td><?php echo $row_records['rsrv_last_name']; ?></td>
       <td><?php echo $row_records['rsrv_contact']; ?></td>
       <td><?php echo $row_records['rsrv_start']; ?></td>
       <td><?php echo $row_records['rsrv_end']; ?></td>
       <td><?php echo $row_records['rsrv_room']; ?></td>
       <td><?php echo $row_records['rsrv_bed']; ?></td>
       <td><?php echo $row_records['rsrv_towel']; ?></td>
       <td><?php echo $row_records['rsrv_pillow']; ?></td>
       <td><?php echo $row_records['rsrv_kit']; ?></td>
       <td><?php echo $row_records['rsrv_notes']; ?></td>
       <td><a href="<?php echo base_url('admin/Cetak?id='.$row_records['rsrv_id'])?>"><i class="fa fa-print"></i></a> | <a href="<?php echo base_url('Reserve/editreservation/'.$row_records['rsrv_id']);?>"><i class="fa fa-edit"></i></a> | <a href="<?php echo base_url('Reserve/deletereservation/'.$row_records['rsrv_id']);?>" onclick="return confirm('Apakah Anda yakin ?')"><i class="fa fa-trash-o"></i></a></td>
     </tr>
  <?php endforeach;?>
 </table>
<!-- <div id="dialog">
 		<h3>Reservations for</h3> 
    </div> -->
 </div>
</body>
</html>