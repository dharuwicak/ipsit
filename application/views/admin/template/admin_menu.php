<!-- Menu -->
<div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li><a href="<?php echo base_url()?>admin"><i class="icon-home" style="margin-right:1px;"></i>Home</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Corporate Policy<b class="caret"></b></a>
                <ul class="dropdown-menu" role="menu" >
                  <li class="nav-header">Inventory</li>
                  <li><a href="<?php echo base_url()?>admin/page/inv_pro">Prosedure</a></li>
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
            <ul class="nav pull-right">
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-user" style="margin-right:1px;"></i><?=$username?><b class="caret"></b></a>
                      <ul class="dropdown-menu">
                        <li><a href="#">Edit</a></li>
                        <li class="divider"></li>
                        <li><a href="<?php echo base_url()?>admin/logout">Logout</i></a></li>
                      </ul>
                  </li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
   <!--/Menu -->