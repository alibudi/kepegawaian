 <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="assets/dist/img/boy-5.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Admin</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="<?php if($current_page=='dasboard'){echo'active';}?>">
          <a href="?hal=dasboard">
            <i class="fa fa-home"></i> <span>Beranda</span>
          </a>
        </li>
         <li class="<?php if($current_page=='dasboard'){echo'active';}?>">
          <a href="?hal=user">
            <i class="fa fa-users"></i> <span>Kelola User</span>
          </a>
        </li>
        <li class="treeview <?php if($current_page=='user' or $current_page=='update_user'){echo 'active';}?>">
          <a href="#">
            <i class="fa fa-folder-open"></i> <span>Master</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu <?php if($current_page=='jabatan' or $current_page=='kerja_unit' or $current_page=='pangkat' or $current_page=='lokasi' or $current_page=='lokasi_update'){echo'active';}?>">
            <li class="<?php if($current_page=='user' or $current_page=='update_user'){echo'active';}?>"><a href="?hal=jabatan"><i class="fa fa-male"></i>Jabatan</a></li>
            <li class="<?php if($current_page=='user' or $current_page=='update_user'){echo'active';}?>"><a href="?hal=unit_kerja"><i class="fa fa-university"></i>Unit Kerja</a></li>
            <li class="<?php if($current_page=='user' or $current_page=='update_user'){echo'active';}?>"><a href="?hal=pangkat"><i class="fa fa-street-view "></i>Pangkat</a></li>
            <li class="<?php if($current_page=='lokasi' or $current_page=='lokasi_update'){echo'active';}?>"><a href="?hal=lokasi"><i class="fa fa-map-marker "></i>Lokasi</a></li>
          </ul>
        </li>
        
      </ul>
    </section>

    <!-- /.sidebar -->