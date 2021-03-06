 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

     <!-- Sidebar - Brand -->
     <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
         <div class="sidebar-brand-icon rotate-n-15">
             <i class="fas fa-laugh-wink"></i>
         </div>
         <div class="sidebar-brand-text mx-3">TOSERBA</div>
     </a>

     <!-- Divider -->
     <hr class="sidebar-divider my-0">

     <!-- Nav Item - Dashboard -->
     <li class="nav-item active">
         <a class="nav-link" href="<?= base_url('admin') ?>">
             <i class="fas fa-fw fa-tachometer-alt"></i>
             <span>Dashboard</span></a>
     </li>

     <!-- Divider -->
     <hr class="sidebar-divider">

     <!-- Heading -->
     <div class="sidebar-heading">
         Master Data
     </div>

     <!-- Nav Item - Pages Collapse Menu -->
     <li class="nav-item">
         <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
             aria-controls="collapseTwo">
             <i class="fas fa-fw fa-cog"></i>
             <span>Master Karyawan</span>
         </a>
         <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
             <div class="bg-white py-2 collapse-inner rounded">
                 <!-- <h6 class="collapse-header">Karyawan</h6> -->
                 <a class="collapse-item" href="<?= base_url('masterkaryawan') ?>"><i class="fas fa-fw fa-users"></i> Data Karyawan</a>
                 <a class="collapse-item" href="<?= base_url('masterjabatan') ?>"><i class="fas fa-fw fa-users"></i> Data Jabatan</a>
             </div>
         </div>
     </li>

     <li class="nav-item">
         <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true"
             aria-controls="collapseThree">
             <i class="fas fa-fw fa-cog"></i>
             <span>Master Absensi</span>
         </a>
         <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
             <div class="bg-white py-2 collapse-inner rounded">
                 <!-- <h6 class="collapse-header">Karyawan</h6> -->
                 <a class="collapse-item" href="<?= base_url('masterabsensi/historiabsensi') ?>">  <i class="fas fa-fw fa-table"></i> Histori Absensi</a>
                 <a class="collapse-item" href="<?= base_url('masterabsensi/rekapabsensi') ?>">  <i class="fas fa-fw fa-table"></i> Rekap Absensi</a>
                 <a class="collapse-item" href="<?= base_url('masterabsensi') ?>"><i class="fas fa-fw fa-users"></i> Ambil Qr</a>
                 <a class="collapse-item" href="<?= base_url('masterabsensi/scanqr') ?>"><i class="fas fa-fw fa-users"></i> Scan Qr</a>
             </div>

         </div>
     </li>

     <!-- Divider -->
     <hr class="sidebar-divider">

     <!-- Heading -->
     <div class="sidebar-heading">
         Settings
     </div>

     <!-- Nav Item -->    
     <li class="nav-item">
         <a class="nav-link" href="<?= base_url('setting/database') ?>">
             <i class="fas fa-fw fa-table"></i>
             <span>Database</span></a>
     </li>

     <!-- Divider -->
     <hr class="sidebar-divider d-none d-md-block">

     <!-- Sidebar Toggler (Sidebar) -->
     <div class="text-center d-none d-md-inline">
         <button class="rounded-circle border-0" id="sidebarToggle"></button>
     </div>

 </ul>
 <!-- End of Sidebar -->