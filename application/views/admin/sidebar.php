<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('admin'); ?>">
        <div class="sidebar-brand-icon">
            <i class="fas fa-solid fa-book"></i>
        </div>
        <div class="sidebar-brand-text mx-3"><?= $sidebar; ?></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin'); ?>">
            <i class="fa-solid fa-paw"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading text-light">
        User
    </div>

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/dataUser'); ?>">
            <i class="fas fa-fw fa-solid fa-user"></i>
            <span>Data User</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading text-light">
        Siswa
    </div>

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/inputSiswa'); ?>">
            <i class="fas fa-fw fa-solid fa-pencil"></i>
            <span>Input Siswa</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/dataSiswa'); ?>">
            <i class="fas fa-fw fa-solid fa-table"></i>
            <span>Data Siswa</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading text-light">
        Buku
    </div>

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('buku/inputBuku'); ?>">
            <i class="fas fa-fw fa-solid fa-pencil"></i>
            <span>Input Buku</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('buku'); ?>">
            <i class="fas fa-fw fa-solid fa-table"></i>
            <span>Data Buku</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('buku/kategori'); ?>">
            <i class="fas fa-fw fa-solid fa-book"></i>
            <span>Kategori Buku</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->