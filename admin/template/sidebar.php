<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
        </div>
        <div class="sidebar-brand-text mx-3">CFDPL <sup>v.2</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider ">

    <!-- Heading -->
    <div class="sidebar-heading">
        User Manager
    </div>

    <!-- Nav Item - Dashboard -->           

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#User"
            aria-expanded="true" aria-controls="User">
            <i class="fas fa-fw fa-user"></i>
            <span>User</span>
        </a>
        <div id="User" class="collapse" aria-labelledby="User" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="user.php">Daftar User</a>
                <a class="collapse-item" href="riwayat_check_up.php">Riwayat Check User</a>
            </div>
        </div>
    </li>           

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#administrator"
            aria-expanded="true" aria-controls="administrator">
            <i class="fas fa-fw fa-user"></i>
            <span>Administrator</span>
        </a>
        <div id="administrator" class="collapse" aria-labelledby="administrator" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="admin.php">Daftar Administrator</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Other Page
    </div>

    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="tabel_relasi.php"><i class="fas fa-fw fa-table"></i><span>Tabel Relasi</span></a>
    </li>
    
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
