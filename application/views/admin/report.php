<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/stylesheet.css');?>" />
<link href="/<?php echo base_url('assets/css/jquery-ui-custom.css');?>" rel="stylesheet">
<title>Admin Panel - Hans Guest House</title>
</head>
<body>
<div class="top_container">
    	<span id="panel_name">Admin Panel</span>
  <span id="user">Welcome, <?php echo $row_user['user_full']; ?><br/><a href="<?php echo base_url('admin/Login/logout');?>" onclick="return confirm('Apakah Anda Yakin Ingin Keluar ?')">Log out</a></span>
</div>
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
     <h2><i class="fa fa-bars"></i> Monthly Reports</h2>
     <form id="POST" name="POST" method="POST" action="<?php echo base_url('Report');?>">
       <label>Select Month: 
         <select name="month" id="month" >
      	<option value="0">-Select-</option>
           	<option value="1">January</option>
            <option value="2">February</option>
            <option value="3">March</option>
            <option value="4">April</option>
            <option value="5">May</option>
            <option value="6">June</option>
            <option value="7">July</option>
            <option value="8">August</option>
            <option value="9">September</option>
            <option value="10">October</option>
            <option value="11">November</option>
            <option value="12">December</option>
         </select>
       </label>
      <!-- <label>Year: <?php
$current_year = date("Y");
$range = range($current_year, ($current_year - 20));
echo '<select name="year" id="contact-year" tabindex="7">';
 
//Now we use a foreach loop and build the option tags
foreach($range as $r)
{
echo '<option value="'.$r.'">'.$r.'</option>';
}
 
//Echo the closing select tag
echo '</select>';
?></label> -->
     <input type="submit" name="submit" id="submit"  value="Go" />
     </form><br/>
     <table border="0" cellpadding="0" cellspacing="0" class="data_table">
       <tr id="tr">
         <td>Submitted</td>
         <td>First Name</td>
         <td>Last Name</td>
         <td>Email</td>
         <td>Contact</td>
         <td>Room</td>
         <td>Bed</td>
         <td>Pillow</td>
         <td>Towel</td>
         <td>Guest Kit</td>
         <td>Check In</td>
         <td>Check Ou</td>
         <td>Guest</td>
         <td>Amount</td>
       </tr>
       <?php do { ?>
         <tr>
           <td><?php echo $row_report['rsrv_timestamp']; ?></td>
           <td><?php echo $row_report['rsrv_first_name']; ?></td>
           <td><?php echo $row_report['rsrv_last_name']; ?></td>
           <td><?php echo $row_report['rsrv_email']; ?></td>
           <td><?php echo $row_report['rsrv_contact']; ?></td>
           <td><?php echo $row_report['rsrv_room']; ?></td>
           <td><?php echo $row_report['rsrv_bed']; ?></td>
           <td><?php echo $row_report['rsrv_pillow']; ?></td>
           <td><?php echo $row_report['rsrv_towel']; ?></td>
           <td><?php echo $row_report['rsrv_kit']; ?></td>
           <td><?php echo $row_report['rsrv_start']; ?></td>
           <td><?php echo $row_report['rsrv_end']; ?></td>
           <td><?php echo $row_report['rsrv_guest']; ?></td>
           <td><?php echo $diff ?></td>
         </tr>
         <?php } while ($row_report = mysql_fetch_assoc($report)); ?>
     </table>
     </div>
     
</body>
</html>