<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login Apotik</title>
       <link href="<?=base_url()?>assets/login/css/style.css" rel="stylesheet" />
</head>

<body>
  <div class="container">
  <div class="form-container flip">

<div class="login-form" style="height:300px;">
      <h3 class="title">Hello.</h3>

<?php echo form_open('login/cekLogin'); ?>

<font color="white"><?php echo validation_errors(); ?></font>  
      <div class="form-group">
        <input type="text" class="form-input"  id="username" placeholder="Username" name="username"></input>
        <span id="username-tool" class="tooltip username-tooltip">What's your username?</span>
      </div>

      <div class="form-group">
        <input type="password" class="form-input" id="password" placeholder="Password" name="password"></input>
        <span class="tooltip password-tooltip">What's your password?</span>
      </div>

      <div class="form-group">
        <button type="submit" class="login-button">Login</button>
      </div>

</form>
   
  </div>
</div>

    <script src="<?=base_url()?>assets/login/js/index.js"></script>
</body>
</html>
