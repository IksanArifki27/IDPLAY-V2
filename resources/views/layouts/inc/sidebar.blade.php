{{-- bg-gradient-primary --}}
     <ul class="navbar-nav  sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: rgb(6, 6, 135)">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/dashboard">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fa fa-wifi"></i>
                </div>
                <div class="sidebar-brand-text mx-3">IDPLAY <sup>2</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            @if (auth()->user()->role == "admin")
                
           
            <li class="nav-item active">
                <a class="nav-link" href="/dashboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            @endif

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                layanan
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            @if (auth()->user()->role == "admin")
                

             <li class="nav-item">
                <a class="nav-link" href="/pesanan">
                    <i class="fas fa-dollar-sign" ></i>
                    <span>Kelola Pesanann</span></a>
            </li>
             <li class="nav-item">
                <a class="nav-link" href="/KelolaPaket">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>kelola Paket</span></a>
            </li>
             <li class="nav-item">
                <a class="nav-link" href="/KelolaKategori">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>kelola Kategori</span></a>
            </li>
             <li class="nav-item">
                <a class="nav-link" href="/KelolaUser">
                    <i class="fa fa-users" ></i>
                    <span>Data Admin</span></a>
            </li>
                        @endif
             {{-- <li class="nav-item">
                <a class="nav-link" href="/layananUser">
                    <i class="fas fa-fw fa-cog" ></i>
                    <span>Layanan Produk</span></a>
            </li> --}}
             {{-- <li class="nav-item">
                <a class="nav-link" href="/PesananUser">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <span>Pesanan Saya</span></a>
            </li>
             --}}
            {{-- <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Components</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Components:</h6>
                        <a class="collapse-item" href="buttons.html">Buttons</a>
                        <a class="collapse-item" href="cards.html">Cards</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Utilities</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Utilities:</h6>
                        <a class="collapse-item" href="utilities-color.html">Colors</a>
                        <a class="collapse-item" href="utilities-border.html">Borders</a>
                        <a class="collapse-item" href="utilities-animation.html">Animations</a>
                        <a class="collapse-item" href="utilities-other.html">Other</a>
                    </div>
                </div>
            </li> --}}

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Addons
            </div>

            <!-- Nav Item - Pages Collapse Menu -->

            <!-- Nav Item - Charts -->
            {{-- <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Charts</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span></a>
            </li> --}}

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

           

        </ul>
