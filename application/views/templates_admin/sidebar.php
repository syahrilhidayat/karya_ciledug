<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url('admin/dashboard_admin') ?>">
        <div class="sidebar-brand-icon rotate">
          <i class="fa fa-user-circle" aria-hidden="true"></i>
        </div>
        <div class="sidebar-brand-text mx-3">ADMIN</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('admin/dashboard_admin') ?>">
          <i class="fas fa-home"></i>
          <span>Dashboard</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('admin/banner') ?>">
          <i class="fas fa-home"></i>
          <span>Banner</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('admin/leasing') ?>">
          <i class="fas fa-home"></i>
          <span>Leasing</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Kategori
      </div>

      <!-- Nav Item - Tables -->
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('admin/matic') ?>">
         <i class="fa fa-motorcycle" aria-hidden="true"></i>
          <span>Matic</span></a>
      </li>
       <!-- Nav Item - Tables -->
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('admin/moped') ?>">
          <i class="fa fa-motorcycle" aria-hidden="true"></i>
          <span>Moped</span></a>
      </li>
       <!-- Nav Item - Tables -->
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('admin/sport') ?>">
          <i class="fa fa-motorcycle" aria-hidden="true"></i>
          <span>Sport</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('admin/dashboard_admin/ganti_password') ?>">
          <i class="fa fa-motorcycle" aria-hidden="true"></i>
          <span>Ganti Password</span></a>
      </li>
      <ul class="nav-item d-none d-sm-block">
          <?php if($this->session->userdata('username'))  { ?>
            <li>
              <div>Selamat Datang <?php echo $this->session->userdata('username') ?></div>
            </li>
            <li><?php echo anchor('auth/logout','logout') ?></li>
          <?php }else{ ?>
            <li><?php echo anchor('auth/login','login') ?></li>
          <?php } ?>
      </ul>  
      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

