<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php $this->load->view('templates/css'); ?>
	<?php $this->load->view('templates/js'); ?>
	<title>Complaint Online</title>
</head>
<?php if (isset($_SESSION['id_user'])){?>
<ul class="nav navbar-right">
	<li><a href="<?=base_url('Admin/logout')?>"><button class="btn">Logout</button></a></li>
</ul>
<?php }?>
<link rel="shortcut icon" href="<?=base_url()?>/assets/img/jiepicon.png" />