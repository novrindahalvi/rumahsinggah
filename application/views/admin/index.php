<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="<?php echo base_url('assets/style_admin/stylesheet.css');?>" rel="stylesheet" type="text/css" />
<title>Hans Guest House</title>
<link rel='shortcut icon' type='image/x-icon' href="favicon.ico" />
</head>

<body>
<div id="login_box">
        	<div>
               	<form ACTION="<?php echo base_url('admin/Login/proseslogin');?>" METHOD="POST" name="login" >
                <a href="http://hansaccomodations.freezoy.com"><img src="<?php echo base_url('assets/css/images/logo.png');?>"></a>
       			  <input name="username" id="txt_box" type="text" placeholder="Username" tabindex="2" />                     <input name="password" type="password" placeholder="Password" tabindex="3" />
                     <input name="submit" type="submit" alt="Login" value="Login" tabindex="4" />
                 </form>
                 <img src="<?php echo base_url('assets/css/images/portal.png');?>" id="img" />
            </div>
    </div>
</body>
</html>