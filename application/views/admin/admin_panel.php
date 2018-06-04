<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/style_admin/stylesheet.css');?>" />
<link href="<?php echo base_url('assets/css/font-awesome/css/font-awesome.css');?>" rel="stylesheet">

<title>Admin Panel - Hans Guest House</title>
</head>
<body>
<div class="top_container">
    	<span id="panel_name">Admin Panel</span>
  <span id="user">Welcome<br/><a href="<?php echo base_url('admin/Login/logout');?>" onclick="return confirm('Apakah Anda Yakin Ingin Keluar ?')">Log out</a></span>
</div>
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
     	<h2><i class="fa fa-bars"></i> Home</h2>
        	<!--<div id="content_left"><a href="report.php?action=3&month="><i class="fa fa-folder-open"></i> Generate Reports</a></div>-->
     </div>
     
     
</body>
</html>