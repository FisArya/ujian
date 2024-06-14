<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Woilah</title>

    <!-- <script src="https://cdn.tailwindcss.com"></script> -->

    <!-- Custom fonts for this template-->
    <link href="{!! asset('theme/vendor/fontawesome-free/css/all.min.css') !!}" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="https://i.pinimg.com/474x/9b/b1/b9/9bb1b9aa5182b06836642a5f737fc5ea.jpg" type="image/x-icon">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{!! asset('theme/css/sb-admin-2.min.css') !!}" rel="stylesheet">

</head>

<body id="page-top">


    <!-- Page Wrapper -->
    <div id="wrapper">
    

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">FISCODING</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('dashboard') }}">
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
            <!-- <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        <i class="fa fa-user-circle" aria-hidden="true"></i>
        <span>Siswa</span>
    </a>
    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Components:</h6>
            <a class="collapse-item" href="#">Show All</a>
            <a class="collapse-item" href="#">Create</a>
        </div>
    </div>
</li> -->


<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse"  aria-hidden="true" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
    <svg width="15" height="15" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
 <path d="M1.5 17.625a2.625 2.625 0 0 0 2.625 2.625h15.75a2.625 2.625 0 0 0 2.625-2.625v-7.219h-21v7.219Zm3.094-3.563A1.406 1.406 0 0 1 6 12.656h2.25a1.406 1.406 0 0 1 1.406 1.406V15a1.406 1.406 0 0 1-1.406 1.406H6A1.406 1.406 0 0 1 4.594 15v-.938Z"></path>
 <path d="M19.875 3.75H4.125A2.625 2.625 0 0 0 1.5 6.375v1.219h21V6.375a2.625 2.625 0 0 0-2.625-2.625Z"></path>
</svg>
        <span>Kategori</span>
    </a>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Components:</h6>
            <a class="collapse-item" href="{{ route('kategori.index') }}">Show All</a>
            <a class="collapse-item" href="{{ route('kategori.create') }}">Create</a>
        </div>
    </div>
</li>

            <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
    <svg width="15" height="15" fill="currentColor" aria-hidden="true" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
 <path d="M20.25 3H4.5a.75.75 0 0 0-.75.75v9a4.505 4.505 0 0 0 4.5 4.5h5.25a4.505 4.505 0 0 0 4.5-4.5V9h.844a2.91 2.91 0 0 0 2.906-2.906V4.5a1.5 1.5 0 0 0-1.5-1.5Zm0 3.094A1.406 1.406 0 0 1 18.844 7.5H18v-3h2.25v1.594Z"></path>
 <path d="M18.75 18.75H3a.75.75 0 1 0 0 1.5h15.75a.75.75 0 1 0 0-1.5Z"></path>
</svg>
        <span>Barang</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Components:</h6>
            <a class="collapse-item" href="{{ route('barang.index') }}">Show All</a>
            <a class="collapse-item" href="{{ route('barang.create') }}">Create</a>
        </div>
    </div>
</li>
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
    <svg width="15" height="15" fill="currentColor"  aria-hidden="true" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
 <path d="M22.479 4.5H18.21l.418-1.671 1.797-.612a.766.766 0 0 0 .499-.924.75.75 0 0 0-.963-.503l-2.203.75a.75.75 0 0 0-.486.528L16.665 4.5H10.52c-.404 0-.75.31-.77.714A.75.75 0 0 0 10.5 6h.129l.047.406a.39.39 0 0 0 .386.344c1.829 0 3.453.511 4.694 1.478a5.715 5.715 0 0 1 2.109 3.378c.02.093.075.175.154.228a3.375 3.375 0 0 1 1.237 4.052.371.371 0 0 0-.007.259 4.5 4.5 0 0 1 .25 1.48 4.346 4.346 0 0 1-1.002 2.81 3.755 3.755 0 0 1-1.35 1.016.375.375 0 0 0-.197.205c-.194.507-.47.98-.814 1.4a.116.116 0 0 0-.017.124.117.117 0 0 0 .106.068h2.307a2.26 2.26 0 0 0 2.243-2.069L22.378 6h.122a.75.75 0 0 0 .75-.786.765.765 0 0 0-.771-.714Z"></path>
 <path d="M5.095 15a1.117 1.117 0 0 1 .797.328l.727.727a.189.189 0 0 0 .204.04.189.189 0 0 0 .061-.04l.726-.727A1.12 1.12 0 0 1 8.407 15h9.214a.374.374 0 0 0 .379-.371v-.004a1.878 1.878 0 0 0-1.5-1.838c-.038-1.391-.61-2.556-1.665-3.375-.976-.76-2.28-1.162-3.773-1.162H7.688c-3.198 0-5.364 1.817-5.438 4.537a1.878 1.878 0 0 0-1.5 1.838.375.375 0 0 0 .375.375h3.97Z"></path>
 <path d="M8.716 16.5a.374.374 0 0 0-.265.11l-1.038 1.038a.938.938 0 0 1-1.326 0L5.05 16.61a.375.375 0 0 0-.265-.11H1.531a.747.747 0 0 0-.739.617 3.056 3.056 0 0 0-.042.508c0 1.434.99 2.602 2.215 2.625.114.709.39 1.35.805 1.85.613.741 1.505 1.15 2.511 1.15h6.188c1.006 0 1.898-.409 2.511-1.15.415-.502.69-1.142.805-1.85C17.009 20.226 18 19.058 18 17.623c0-.17-.014-.34-.042-.508a.747.747 0 0 0-.739-.616H8.716Z"></path>
</svg>
        <span>Barang Masuk</span>
    </a>
    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Components:</h6>
            <a class="collapse-item" href="{{ route('barangmasuk.index') }}">Show All</a>
            <a class="collapse-item" href="{{ route('barangmasuk.create') }}">Create</a>
                    </div>
                </div>
            </li>

<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFIve" aria-expanded="true" aria-controls="FIve">
    <svg width="15" height="15" fill="currentColor"  aria-hidden="true" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
 <path d="m13.133 11.383-1.224-1.225a1.5 1.5 0 0 0-2.116-.005l-8.51 7.853c-.31.292-.513.664-.532 1.08a1.505 1.505 0 0 0 .432 1.123l1.828 1.848a1.514 1.514 0 0 0 1.067.445h.055c.417-.016.79-.211 1.087-.524l7.907-8.47a1.5 1.5 0 0 0 .005-2.125Z"></path>
 <path d="m22.969 8.906-.015-.014-1.606-1.59a1.006 1.006 0 0 0-.717-.294c-.215 0-.425.068-.6.194 0-.02.004-.04.005-.057.021-.305.054-.765-.244-1.182a12.09 12.09 0 0 0-1.166-1.351c-.624-.615-1.983-1.773-4.065-2.622a6.542 6.542 0 0 0-2.488-.49c-1.48 0-2.604.667-3.035 1.063a5.62 5.62 0 0 0-.665.76.75.75 0 0 0 .874 1.141c.132-.049.266-.09.403-.123.284-.06.575-.078.864-.054.619.051 1.35.358 1.673.614.549.44.813 1.035.856 1.926.009.179-.362.85-.937 1.616a.75.75 0 0 0 .068.985l1.613 1.612a.75.75 0 0 0 1.031.03c.456-.408 1.15-1.022 1.394-1.172.36-.222.618-.265.689-.272a.899.899 0 0 1 .529.111c0 .008 0 .016-.003.024a.058.058 0 0 1-.012.02l-.085.082-.014.013a1.008 1.008 0 0 0 .002 1.432l1.606 1.59a1.004 1.004 0 0 0 .716.292c.267 0 .523-.104.714-.29l2.602-2.57a1.026 1.026 0 0 0 .013-1.424Z"></path>
</svg>
        <span>Barang Keluar</span>
    </a>
    <div id="collapseFIve" class="collapse" aria-labelledby="headingFIve" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Components:</h6>
            <a class="collapse-item" href="{{ route('barangkeluar.index') }}">Show All</a>
            <a class="collapse-item" href="{{ route('barangkeluar.create') }}">Create</a>
                    </div>
                </div>
            </li>

       

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->

<form action="{{ url('/search') }}" method="GET" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
    @csrf
    <div class="input-group">
        <input type="text" name="query" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" required>
        <div class="input-group-append">
            <select name="type" class="form-control bg-light border-0 small" required>
                <option value="" disabled selected>Pilih Table...</option>
                <option value="barang">Barang</option>
                <option value="kategori">Kategori</option>
            </select>
            <button class="btn btn-primary" type="submit">
                <i class="fas fa-search fa-sm"></i>
            </button>
        </div>
    </div>
</form>


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_1.svg"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler Â· 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_2.svg"
                                            alt="...">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun Â· 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_3.svg"
                                            alt="...">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez Â· 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog Â· 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>
                                <img class="img-profile rounded-circle"
                                    src="https://i.pinimg.com/474x/54/c0/19/54c0195ed4d4e92f1d116ebee1192b69.jpg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="logout" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

                    
                    <div class="container">
                        
                        @yield('content')
                    </div>
                  

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Nafis Arya</span>
                        <!-- <div id="targetDiv"></div> -->
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">Ã—</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="logout">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{!! asset('theme/vendor/jquery/jquery.min.js') !!}"></script>
    <script src="{!! asset('theme/vendor/bootstrap/js/bootstrap.bundle.min.js') !!}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{!! asset('theme/vendor/jquery-easing/jquery.easing.min.js') !!}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{!! asset('theme/js/sb-admin-2.min.js') !!}"></script>
    <script src="{!! asset('theme/js/sb-admin-2-.js') !!}"></script>

    <!-- Page level plugins -->
    <script src="{!! asset('theme/vendor/chart.js/Chart.min.js') !!}"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>