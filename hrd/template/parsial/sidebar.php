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
          <ul class="treeview-menu <?php if($current_page=='hukuman' or $current_page=='pegawai' or $current_page=='prestasi' or $current_page=='sk_kerja' or $current_page=='sk_update'){echo'active';}?>">
            <li class="<?php if($current_page=='hukuman' or $current_page=='update_user'){echo'active';}?>"><a href="?hal=hukuman"><i class="fa fa-male"></i>Hukuman</a></li>
            <li class="<?php if($current_page=='pegawai' or $current_page=='update_user'){echo'active';}?>"><a href="?hal=pegawai"><i class="fa fa-university"></i>Pegawai</a></li>
            <li class="<?php if($current_page=='prestasi' or $current_page=='update_user'){echo'active';}?>"><a href="?hal=prestasi"><i class="fa fa-street-view "></i>Prestasi</a></li>
            <li class="<?php if($current_page=='sk_kerja' or $current_page=='lokasi_update'){echo'active';}?>"><a href="?hal=sk_kerja"><i class="fa fa-map-marker "></i>Sk Kerja</li>
          </ul>
        </li>
        
      </ul>
    </section>

    <!-- /.sidebar -->