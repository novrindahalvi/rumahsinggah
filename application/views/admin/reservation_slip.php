<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hans Guest House - Reservation Slip</title>
<link href="<?php echo base_url('assets/css/sheet.css');?>" rel="stylesheet"/>
</head>
<body onload="window.print()">
<h3>SLIP RESERVASI</h3>
<br>
First Name : <?php echo $detail->rsrv_first_name;?><br>
Last Name : <?php echo $detail->rsrv_last_name;?><br>
email : <?php echo $detail->rsrv_email;?><br>
Contact : <?php echo $detail->rsrv_contact;?><br>
Room : <?php echo $detail->rsrv_room;?><br>
Bed : <?php echo $detail->rsrv_bed;?><br>
Pillow : <?php echo $detail->rsrv_pillow;?><br>
Towel : <?php echo $detail->rsrv_towel;?><br>
Kit : <?php echo $detail->rsrv_kit;?><br>
Start Date : <?php echo $detail->rsrv_start;?><br>
End Date : <?php echo $detail->rsrv_end;?><br>
Guest : <?php echo $detail->rsrv_guest;?><br>
Notes : <?php echo $detail->rsrv_notes;?><br>
</body>
</html>