<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login Form</title>
  <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet"> 
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login/css/style.css');?>">
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-2.2.3.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.js"></script>  

</head>

<body>
  <div class="login">
	<h1>W@skon_651</h1>
	<div><?php echo $this->session->flashdata('msg'); ?></div>    
    <?php echo form_open('Auth/cek_login');?>
    	<input type="text" name="username" placeholder="Username"><span class="text-danger"><?php echo form_error('username'); ?></span>
        <input type="password" name="password" placeholder="Password"><span class="text-danger"><?php echo form_error('password'); ?></span>
        <button type="submit" class="btn btn-primary btn-block btn-large">Masuk</button>    
    <?php echo form_close();?>
</div> 
   
    <script type="text/javascript" src="<?php echo base_url('assets/login/js/index.js');?>"></script>

</body>
</html>
