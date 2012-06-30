<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?=$title?></title>
<style type="text/css">
body {
	background-image:url('<?php echo base_url('images/admin/bg_dots.gif');?>');
	margin:0px;
	padding:0px;
}
#logo {
	margin:150px auto 15px;
	display:block;
}
#login_container {
	margin:auto;
	font-family:'Lucida Grande', Arial, Verdana, sans-serif;
	font-size:14px;
	color:#555;
	padding:10px;
	width:310px;
	background-color:#fff;
}
.form_input
{
	display:block;
	border:1px solid #ccc;
	padding:5px;
	width:300px;
	border-radius: 3px;
	-moz-border-radius: 3px;
	-webkit-border-radius: 3px;
	font-size:16px;
	outline:none;
	font-family:Arial, Verdana, sans-serif;
	color:#555555;
	margin:0px 0px 10px;
}

label {
	display:block;
	padding:3px;
}

#error {
	background-color:#d7330d;
	border:1px solid #be2907;
	width:958px;
	margin:auto;
	color:#ffffff;
	font-size:12px;
	font-family: "Lucida Grande", Arial, Verdana, sans-serif;
	font-weight:bold;
	text-align:center;
	padding:10px 0px;
}

</style>
</head>
<body>
    <h1><?=$heading?></h1>
    
        <?php foreach ($query->result() as $row): ?>
        <h3><?=$row->title?></h3>
         <p><?=$row->body?></p>
         
         <p><?=anchor("blog/comments/" . $row->id,'Comments');?></p>
         <hr />
        <?php endforeach;?>
    
</body>
</html>