<?php
	session_start();
	if(isset($_SESSION['admin'])){
	require_once('php/forms.php');
	require_once('php/functions.php');
	$form = new forms();
	$content ="<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
	<html xmlns='http://www.w3.org/1999/xhtml'>
	<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
	<meta http-equiv='pragma' content='no-cache' />
	<head>".$form -> contenido_head()."</head>
	<body>".$form -> form_menu_principal().$form -> form_div_msg()."</body>
	</html>";
	}
	else{
	$content ="<script>self.location.href='../';</script>";
	}
	echo $content;
	?>