<!-- Sidebar -->
<ul class="navbar-nav  sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon ">
        <!-- <i class="fas fa-laugh-wink"></i> -->
        
    </div>
    <div class="sidebar-brand-text mx-3">E-Wakaf <sup>2 </sup></div>
    
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="index.html">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Interface
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link" href="<?= base_url('index.php/admin_cabang/add_sedekah')?>" >
        <i class="fas fa-fw fa-cog"></i>
        <span>Tambah Sedekah</span>
    </a>
   
</li>
<li class="nav-item">
    <a class="nav-link" href="<?= base_url('index.php/admin_cabang/add_Infaq')?>" >
        <i class="fas fa-fw fa-cog"></i>
        <span>Tambah Infaq</span>
    </a>
   
</li>

<!-- Nav Item - Utilities Collapse Menu -->
<!-- <li class="nav-item">
    <a class="nav-link" href="#">
        <i class="fas fa-fw fa-wrench"></i>
        <span>Konfirmasi Infaq</span>
    </a>
    
</li> -->

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Addons
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="<?= base_url('index.php/admin_cabang/history')?>"s>
        <i class="fas fa-fw fa-folder"></i>
        <span>Riwayat Transaksi</span>
    </a>
    
</li>

<!-- Nav Item - Charts -->
<li class="nav-item">
    <a class="nav-link" href="<?=  base_url('index.php/admin/data_infaq') ?>">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Data Infaq</span></a>
</li>

<div class="sidebar-heading">
    User & Admin
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="<?= base_url('index.php/admin/data_user')?>"s>
        <i class="fas fa-fw fa-folder"></i>
        <span>Data User</span>
    </a>
    
</li>
<li class="nav-item">
    <a class="nav-link collapsed" href="<?= base_url('index.php/admin/data_cabang')?>"s>
        <i class="fas fa-fw fa-folder"></i>
        <span>Data Admin Cabang</span>
    </a>
    
</li>
<li class="nav-item">
    <a class="nav-link collapsed" href="<?= base_url('index.php/admin/add_admin_cabang')?>"s>
        <i class="fas fa-fw fa-folder"></i>
        <span>Tambah Admin Cabang</span>
    </a>
    
</li>
<!-- Nav Item - Tables -->
<li class="nav-item">
    <a class="nav-link" href="<?= base_url('index.php/auth/logout')?>">
        <i class="fas fa-fw fa-table"></i>
        <span>log Out</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

<!-- Sidebar Message -->
<!-- <div class="sidebar-card d-none d-lg-flex">
    
        <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
    
</div> -->

</ul>
<!-- End of Sidebar -->