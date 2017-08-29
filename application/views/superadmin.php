<!DOCTYPE html>
<html>
<head>
  <title>Super Admin</title>
  <?php $this->load->view('templates/css')?>
  <?php $this->load->view('templates/js')?>  
</head>
<body>
 <div class="col-md-3 left_col ">
  <div class="left_col scroll-view">
    <div class="navbar nav_title" style="border: 0;">
      <a href="<?php echo base_url()?>" class="site_title"><span>JIEP</span></a>
    </div>

    <div class="clearfix"></div>

    <!-- menu profile quick info -->
    <div class="profile clearfix">
    </div>
    <!-- /menu profile quick info -->
<!-- top navigation -->
<div class="top_nav">
  <div class="nav_menu">
    <nav>
      <div class="nav toggle">
        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
      </div>

      <ul class="nav navbar-nav navbar-right">
        <li class="">
          <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
            <?php if ($this->session->userdata('jabatan')=='staf' or $this->session->userdata('jabatan')=='dephead'){?>
            <img src="<?php echo base_url().'assets/file/image/'.$this->session->userdata('foto')?>" alt=""><?php echo $this->session->userdata('departemen')?>
            <?php } else if ($this->session->userdata('jabatan')=='divhead'){?>
            <img src="<?php echo base_url().'assets/file/image/'.$this->session->userdata('foto')?>" alt=""><?php echo $this->session->userdata('divisi')?>
            <?php } else {?>
            <img src="<?php echo base_url().'assets/file/image/'.$this->session->userdata('foto')?>" alt=""><?php echo $this->session->userdata('nama')?>
            <?php }?>
            <span class=" fa fa-angle-down"></span>
          </a>
          <ul class="dropdown-menu dropdown-usermenu pull-right">
            <li><a href="<?php echo site_url('Profile/read/'.$this->session->userdata('idadmin'))?>"> Profile</a></li>
            <li><a href="<?php echo site_url('Login/destroy')?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
          </ul>
        </li>


      </ul>
    </nav>
  </div>

</div>
<!-- /top navigation -->
    <br />

    <!-- sidebar menu -->
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
      <div class="menu_section">
        <h3>List Data</h3>
        <ul class="nav side-menu">
          <li><a href="<?php echo site_url('Jatah_cuti')?>"><i class="fa fa-star"></i> Jatah Cuti</a></li>
          <?php if ($this->session->userdata('jabatan')!='staf'){?>
          <li><a href="<?php echo site_url('Surat_masuk')?>"><i class="fa fa-star"></i> Surat Masuk</a></li>
          <li><a href="<?php echo site_url('Surat_keluar')?>"><i class="fa fa-star"></i> Surat Keluar</a></li>
          <?php }?>
        </ul>
      </div>      
    </div>
  </div>
</div>


</div>
</body>
</html> 
