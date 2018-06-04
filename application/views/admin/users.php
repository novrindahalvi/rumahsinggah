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
     <h2><i class="fa fa-bars"></i> User Management</h2>
  <i class="fa fa-plus-circle"></i> <a href="<?php echo base_url('admin/Users/tambahUser')?>">Add New User</a>
 <table cellpadding="0" cellspacing="0" class="data_table">
   <tr id="tr">
     <td>Full Name</td>
     <td>Username</td>
     <td>Role</td>
<!--      <td>Actions</td>-->
   </tr>
   <?php foreach($user as $row_user):?>
       <tr>
         <td><?php echo $row_user['user_full']; ?></td>
         <td><?php echo $row_user['user_name']; ?></td>
         <td><?php echo $row_user['user_role']; ?></td>
         <!--<td><a href=""><i class="fa fa-edit"></i></a> | <a href="delete_usr.php?user_id=<?php echo $row_user['user_id']; ?>"><i class="fa fa-trash-o"></i></a></td>-->
       </tr>
       <?php endforeach;?>
</table></div>
</body>
</html>