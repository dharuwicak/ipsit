<?php 
  switch ($jenis_login) {
    case 'rendal_har':
      $login = "Rendalhar";
      break;

    case 'rendal_op':
      $login = "Rendalop";
      break;
    
    default:
      $login = "";
      break;
  }
?>

<!doctype html>
<html lang='us-eng'>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.css">
   <link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap-responsive.css">
   <link rel="stylesheet" href="<?php echo base_url()?>assets/css/datepicker.css">
   
   <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
    </style>

   <title><?=$login?> Page</title>
</head>
<body>
<!-- Menu -->
<div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand"><?=$login?></a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li><a href="#"><i class="icon-plus-sign" style="margin-right:1px;"></i>Pengajuan Dokumen</a></li>
              <li><a href="#"><i class="icon-th-list" style="margin-right:1px;"></i>Daftar Pengajuan Dokumen</a></li>
              <!-- <li><a href="#">Process Procurement</a></li> -->
            </ul>
            <ul class="nav pull-right">
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-user" style="margin-right:1px;"></i><?=$nama?><b class="caret"></b></a>
                      <ul class="dropdown-menu">
                        <li><a href="#">Edit</a></li>
                        <li class="divider"></li>
                        <li><a href="<?php echo base_url()?>main/logout">Logout</i></a></li>
                      </ul>
                  </li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
   <!--/Menu -->