<!doctype html>
<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.css">
   <link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap-responsive.css">

   <style type="text/css">
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
      }

      .form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }

      #loginForm label.error {
        margin-top: 1px;
      }

    </style>
   <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
    </style>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

   <title>Admin Login</title>
</head>
<body>
    <div class="container">
      <div class="form-signin">
      <form  action="<?php echo base_url();?>index.php/admin_verifylogin" method="post">
        <div class="control-group">
          <h2 class="form-signin-heading">Administrator Login</h2>
          <input type="text" class="input-block-level" placeholder="User Name" name="username" value="" required>
          <input type="password" class="input-block-level" placeholder="Password" name="password" value="" required>
        </div>
          <label class="checkbox"><input type="checkbox" value="remember-me"> Remember me</label>
          <button class="btn btn-large btn-primary" type="submit">Sign in</button>
      </form> 
      <div class="alert alert-error"><?php echo validation_errors(); ?></div>
      </div>


    </div>

    <!-- Biar loading ga lama javascript simpen di bawah -->
    <script src="<?php echo base_url()?>assets/js/jquery.js"></script>

    <script src="<?php echo base_url()?>assets/js/bootstrap-transition.js"></script>
    <script src="<?php echo base_url()?>assets/js/bootstrap-alert.js"></script>
    <script src="<?php echo base_url()?>assets/js/bootstrap-modal.js"></script>
    <script src="<?php echo base_url()?>assets/js/bootstrap-dropdown.js"></script>
    <script src="<?php echo base_url()?>assets/js/bootstrap-scrollspy.js"></script>
    <script src="<?php echo base_url()?>assets/js/bootstrap-tab.js"></script>
    <script src="<?php echo base_url()?>assets/js/bootstrap-tooltip.js"></script>
    <script src="<?php echo base_url()?>assets/js/bootstrap-popover.js"></script>
    <script src="<?php echo base_url()?>assets/js/bootstrap-button.js"></script>
    <script src="<?php echo base_url()?>assets/js/bootstrap-collapse.js"></script>
    <script src="<?php echo base_url()?>assets/js/bootstrap-carousel.js"></script>
    <script src="<?php echo base_url()?>assets/js/bootstrap-typeahead.js"></script>

</body>
</html>