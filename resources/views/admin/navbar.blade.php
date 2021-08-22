<!-- partial -->

    <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="/">
                    <i class="mdi mdi-home menu-icon"></i>
                    <span class="menu-title">Dashboard</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ url('/users') }}">
                    <i class="mdi mdi-view-headline menu-icon"></i>
                    <span class="menu-title">Users</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/foodmenu') }}">
                    {{-- <i class="mdi mdi-chart-pie menu-icon"></i> --}}
                    <span class="menu-title">FoodMenu</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/adminchefs">
                    {{-- <i class="mdi mdi-grid-large menu-icon"></i> --}}
                    <span class="menu-title">Chefs</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/reservation') }}">
                    {{-- <i class="mdi mdi-emoticon menu-icon"></i> --}}
                    <span class="menu-title">Reservation</span>
                </a>
            </li>

        </ul>
    </nav>
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">


            <!-- content-wrapper ends -->

