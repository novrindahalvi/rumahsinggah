<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/stylesheet.css');?>" />
<link href="<?php echo base_url('assets/css/font-awesome.css');?>" rel="stylesheet">
<title>Admin Panel - Hans Guest House</title>
</head>
<body>
<div class="top_container">
    	<span id="panel_name">Admin Panel</span>
  <span id="user">Welcome, <br/><a href="<?php echo base_url('admin/Login/logout');?>" onclick="return confirm('Apakah Anda Yakin Ingin Keluar ?')">Log out</a></span>
        
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
  <h2>User Management</h2>
  <a href="">Add New User</a>
  <form method="post" name="form1" id="form1">
    <table align="center">
      <tr valign="baseline">
        <td nowrap="nowrap" align="right">Username:</td>
        <td><input name="user_name" type="text" disabled="disabled" value="<?php echo $row_user['user_name']; ?>" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td nowrap="nowrap" align="right">Full Name</td>
        <td><input name="user_full" type="text" disabled="disabled" value="<?php echo $row_user['user_full']; ?>" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td nowrap="nowrap" align="right">Role</td>
        <td><input name="user_role" type="text" disabled="disabled" value="<?php echo $row_user['user_role']; ?>" size="32" /></td>
      </tr>
      
      <tr valign="baseline">
        <td nowrap="nowrap" align="right">&nbsp;</td>
        <td><input type="submit" value="Delete User" /><input name="user_id" type="hidden" value="user_id" /></td>
      </tr>
    </table>
  </form>
</div>
</body>
</html>