<div class="sidebar">
    <!-- Sidebar Search Form -->
    <div class="form-inline mt-2">
        <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-sidebar">
                    <i class="fas fa-search fa-fw"></i>
                </button>
            </div>
        </div>
    </div>
    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Menu Dashboard -->
            <li class="nav-item">
                <a href="{{ url('/') }}" class="nav-link {{ $activeMenu == 'dashboard' ? 'active' : '' }}">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>Dashboard</p>
                </a>
            </li>

            <!-- Menu Profile -->
            <li class="nav-item">
                <a href="{{ url('/profile') }}" class="nav-link {{ $activeMenu == 'profile' ? 'active' : '' }}">
                    <i class="nav-icon fas fa-user"></i>
                    <p>Profile</p>
                </a>
            </li>

            <!-- Menu Data User (Khusus Admin) -->
            @if(auth()->user()->getRole() === 'ADM')
                <li class="nav-item">
                    <a href="{{ url('/user') }}" class="nav-link {{ $activeMenu == 'user' ? 'active' : '' }}">
                        <i class="nav-icon far fa-user"></i>
                        <p>Data User</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/level') }}" class="nav-link {{ $activeMenu == 'level' ? 'active' : '' }}">
                        <i class="nav-icon fas fa-layer-group"></i>
                        <p>Level User</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/kompetensi') }}" class="nav-link {{ $activeMenu == 'kompetensi' ? 'active' : '' }}">
                        <i class="nav-icon fas fa-book"></i>
                        <p>Bidang Kompetensi</p>
                    </a>
                </li>
            @endif

            <!-- Menu Data Bisa Diakses oleh ADM, DSN, dan TDK -->
            @if(in_array(auth()->user()->getRole(), ['ADM', 'DSN', 'TDK']))
                <li class="nav-item">
                    <a href="{{ url('/mahasiswa') }}" class="nav-link {{ $activeMenu == 'mahasiswa' ? 'active' : '' }}">
                        <i class="nav-icon fas fa-user-graduate"></i>
                        <p>Data Mahasiswa</p>
                    </a>
                </li>

                <!-- Menu List Kompen -->
            <li class="nav-item">
                <a href="{{ url('/kompen') }}" class="nav-link {{ $activeMenu == 'kompen' ? 'active' : '' }}">
                    <i class="nav-icon fas fa-tasks"></i>
                    <p>List Kompen</p>
                </a>
            </li>

            <!-- Menu Progres -->
            <li class="nav-item">
                <a href="{{ url('/progres') }}" class="nav-link {{ $activeMenu == 'progres' ? 'active' : '' }}">
                    <i class="nav-icon fas fa-chart-line"></i>
                    <p>Progres</p>
                </a>
            </li>

            <!-- Menu Rekap -->
            <li class="nav-item">
                <a href="{{ url('/rekap') }}" class="nav-link {{ $activeMenu == 'rekap' ? 'active' : '' }}">
                    <i class="nav-icon fas fa-file-alt"></i>
                    <p>Rekap</p>
                </a>
            </li>
            @endif

            <!-- Menu Data Bisa Diakses oleh MHS -->
            @if(in_array(auth()->user()->getRole(), ['MHS']))
            <li class="nav-item">
                <a href="{{ url('/akumulasiJam') }}" class="nav-link {{ $activeMenu == 'akumulasi-jam' ? 'active' : '' }}">
                    <i class="nav-icon fas fa-clock"></i> <!-- Ganti ikon dengan ikon jam -->
                    <p>Data Akumulasi Jam</p>
                </a>
            </li>
            

                <!-- Menu List Kompen -->
            <li class="nav-item">
                <a href="{{ url('/kompenMhs') }}" class="nav-link {{ $activeMenu == 'kompen' ? 'active' : '' }}">
                    <i class="nav-icon fas fa-tasks"></i>
                    <p>List Kompen</p>
                </a>
            </li>

            <!-- Menu Progres -->
            <li class="nav-item">
                <a href="{{ url('/progresMhs') }}" class="nav-link {{ $activeMenu == 'progres' ? 'active' : '' }}">
                    <i class="nav-icon fas fa-chart-line"></i>
                    <p>Progres</p>
                </a>
            </li>

            <!-- Menu Rekap -->
            <li class="nav-item">
                <a href="{{ url('/rekapMhs') }}" class="nav-link {{ $activeMenu == 'rekap' ? 'active' : '' }}">
                    <i class="nav-icon fas fa-file-alt"></i>
                    <p>Rekap</p>
                </a>
            </li>
            @endif
            <!-- Menu Logout -->
            <li class="nav-item">
                <a href="{{ url('/logout') }}" class="nav-link">
                    <i class="nav-icon fas fa-sign-out-alt"></i>
                    <p>Logout</p>
                </a>
            </li>
        </ul>
    </nav>
</div>

<style>
    /* Custom CSS for Sidebar */
    .sidebar {
        background: linear-gradient(90deg, #5c759c, #2C3E50);
        font-family: 'Montserrat', sans-serif;
        font-weight: bold;
    }

    .sidebar .nav-link {
        color: #ffffff;
    }

    .sidebar .nav-link.active {
        background-color: #1F2937;
        color: #ffffff;
    }

    .sidebar .nav-icon {
        color: #ffffff;
    }
</style>
