<!doctype html>
<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.css">
   <link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap-responsive.css">

   <script type="text/javascript" src="https://www.google.com/jsapi"></script>

   <style type="text/css">
      body {
        padding-top: 80px;
        padding-bottom: 40px;
      }
      .container img {
        width:200px;
        height: 100%;
        margin-right:6px; 
      }
      .media {
        margin-top:20px;
      }
      .jumbotron {
        margin: 60px 0;
        text-align: center;
      }
   </style>

   <script type="text/javascript">
      google.load("visualization", "1.1", {packages:["bar"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Realisasi', 'Target'],
          ['2011', 500, 1000],
          ['2012', 700, 450],
          ['2013', 660, 1120],
          ['2014', 1030, 540]
        ]);

        var options = {
          chart: {
            subtitle: 'Tahun 2010-2014',
          },
          bars: 'vertical' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('barchart_material'));

        chart.draw(data, options);
      }
    </script>
   <title>Sistem Informasi Terpadu</title>
</head>
<body>
	<div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="brand">Sistem Informasi Terpadu</div>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="#">Home</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Corporate Policy<b class="caret"></b></a>
                <ul class="dropdown-menu" role="menu" >
                  <li class="nav-header">Inventory</li>
                  <li><a href="#">Prosedure</a></li>
                  <li><a href="#">Policy</a></li>
                  <li class="divider"></li>
                  <li class="nav-header">Procurement</li>
                  <li><a href="#">Prosedure</a></li>
                  <li><a href="#">Policy</a></li>
                  <li class="divider"></li>
                  <li class="nav-header">Warehouse</li>
                  <li><a href="#">Prosedure</a></li>
                  <li><a href="#">Policy</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Digital Document<b class="caret"></b></a>
                <ul class="dropdown-menu" role="menu" >
                  <li><a href="#">Kontrak</a></li>
                  <li><a href="#">SPK</a></li>
                  <li><a href="#">SPKL</a></li>
                  <li><a href="#">SPBL</a></li>
                </ul>
              </li>
              <li><a href="#contact">Supplier Master</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="span9">
        <!-- Bar chart -->
          <h4>Grafik Realisasi & Target</h4>
          <div id="barchart_material" style="width: 800px; height: 500px;"></div>
          <div class="media">
            <img class="img-polaroid pull-left" src="<?php echo base_url()?>assets/img/pltu.jpg">
            <div class="media-body">
              <h4 class="media-heading">Sekilas Tentang Uboh PLTU 2 Labuan Banten</h4>
              <p>Pembangkit Listrik Tenaga Uap (PLTU) Labuan berlokasi di Desa Saketi Labuan Pandeglang, Provinsi Banten. PLTU Labuan mempunyai kapasitas 2 X 30MW. PLTU Labuan dioperasikan oleh unit bisnis operasi dan pemeliharaan (UBOH) PLTU Banten 2 Labuan yang dikelola oleh PT Indonesia Power setelah diserah terimakan oleh Chengda sebagai pengembang pembangkit tersebut. Presiden Susilo Bambang Yudhoyono meresmikan PLTU Labuan Unit 1 pada 28 Januari 2010.</p>
            </div>
          </div>
          <div class="media">
            <img class="img-polaroid pull-left" src="<?php echo base_url()?>assets/img/scm.jpg">
            <div class="media-body">
              <h4 class="media-heading">Supply Chain Manajemen</h4>
              <p>Supply chain management adalah manajemen dari sebuah jaringan bisnis yang saling terhubung untuk menjadikan suatu produk yang lengkap dan melengkapinya dengan layanan – layanan yang dibutuhkan oleh end customer (Harland, 1996).</p>
              <p>Supply chain Management juga dapat didefinisikan sebagai sekumpulan aktifitas (dalam bentuk entitas/fasilitas) yang terlibat dalam proses transformasi dan distribusi barang mulai dari bahan baku paling awal dari alam sampai produk jadi pada konsumen akhir.</p>
              <p>Dalam kegunaannya SCM adalah bagaimana ia mampu me-manage aliran barang atau produk dalam suatu rantai supply. Dengan kata lain, model SCM mengaplikasikan bagaimana suatu jaringan kegiatan produksi dan distribusi dari suatu perusahaan dapat bekerja bersama-sama untuk memenuhi tuntutan konsumen.</p>
            </div>
          </div>
        </div>

        <div class="span3">
          <div class="login">
            <h4>Login User</h4>
            <form action="<?php echo base_url();?>user_verifylogin" method="post">
              <fieldset>
                <input type="text" id="username" placeholder="Username" name="username" required >
                <input type="password" id="password" placeholder="Password" name="password" required>
                <span class="help-block"><?php echo validation_errors(); ?></span>
                <button type="submit" class="btn">Log in</button>
              </fieldset>
            </form>
          </div>
       </div>
      </div>

      <footer>
        <p>&copy; Company 2013</p>
      </footer>

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