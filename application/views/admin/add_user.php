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
  <span id="user">Welcome, <br/><a href="<?php echo base_url('admin/Login/logout');?>" onclick="return confirm('Apakah Anda Yakin Ingin Keluar ?')">Log out</a></span>
        
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
  <h2>User Management</h2>
  <a href="">Add New User</a>
  <form action="<?php echo base_url('admin/Users/addUser');?>" method="post" name="form1" id="form1">
    <table align="center">
      <tr valign="baseline">
        <td nowrap="nowrap" align="right">Username:</td>
        <td><input type="text" name="user_name" value="" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td nowrap="nowrap" align="right">Password:</td>
        <td><input type="password" name="user_pw" value="" size="32" placeholder="Password" /></td>
      </tr>
      <tr valign="baseline">
        <td nowrap="nowrap" align="right">Full Name</td>
        <td><input type="text" name="user_full" value="" size="32" /></td>
      </tr>
      <tr valign="baseline">
        <td nowrap="nowrap" align="right">Restrictions</td>
        <td><select name="user_role">
          <option value="admin" >Administrator</option>
          <option value="user" >User</option>
        </select></td>
      </tr>
      <tr valign="baseline">
        <td nowrap="nowrap" align="right">&nbsp;</td>
        <td><input type="submit" value="Insert record" /></td>
      </tr>
    </table>
    <input type="hidden" name="user_id" value="" />
    <input type="hidden" name="MM_insert" value="form1" />
  </form>
</div>
</body>
</html>