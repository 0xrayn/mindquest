<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Admin Emoodji</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href=" {{ asset('/img/favicon.ico ') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="admin/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="admin/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('/admin/css/bootstrap.min.css ') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('/admin/css/style.css ') }}" rel="stylesheet">
</head>

<body>
    <div class="p-0 bg-white container-xxl position-relative d-flex">
        <!-- Spinner Start -->
        <div id="spinner" class="bg-white show position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="pb-3 sidebar pe-4">
            <nav class="navbar bg-light navbar-light">
                <a href="{{ route('admin.dashboard') }}" class="mx-4 mb-3 navbar-brand">
                    <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>Admin Emoodji</h3>
                </a>
                <div class="mb-4 d-flex align-items-center ms-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="{{ asset('/admin/img/user.jpg ') }}" alt="" style="width: 40px; height: 40px;">
                        <div class="bottom-0 p-1 border border-2 border-white bg-success rounded-circle position-absolute end-0"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Admin</h6>
                        <span>admin@gmail.com</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="{{ route('admin.dashboard') }}" class="nav-item nav-link @yield('admin_dashboard')"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    {{-- <a href="{{ route('admin.form') }}" class="nav-item nav-link @yield('admin_form')"><i class="fa fa-keyboard me-2"></i>Forms</a>
                    <a href="{{ route('admin.table') }}" class="nav-item nav-link @yield('admin_table')"><i class="fa fa-table me-2"></i>Tables</a>
                    <a href="{{ route('admin.chart') }}" class="nav-item nav-link @yield('admin_chart')"><i class="fa fa-chart-bar me-2"></i>Charts</a> --}}
                    <a href="{{ route('admin.informasi.index') }}" class="nav-item nav-link @yield('admin_informasi')"><i class="fa fa-keyboard me-2"></i>Informasi</a>
                    <a href="{{ route('admin.kuis.index') }}" class="nav-item nav-link @yield('admin_kuis')"><i class="fa fa-keyboard me-2"></i>Kuis</a>
                    <a href="{{ route('admin.result') }}" class="nav-item nav-link @yield('admin_hasil')"><i class="fa fa-table me-2"></i>Hasil</a>
                    <a href="/chatify" class="nav-item nav-link @yield('admin_hasil')"><i class="fa fa-envelope me-2"></i>Chat</a>
                    <a href="{{ route('admin.pertanyaan.index') }}" class="nav-item nav-link @yield('admin_masukan')"><i class="fa fa-table me-2"></i>Masukan</a>
                    <a href="{{ route('logout') }}" class="nav-item nav-link" id="logout-link"><i class="fa fa-chart-bar me-2"></i>Log Out</a>

                    <script>
                        document.getElementById('logout-link').addEventListener('click', function(event) {
                            event.preventDefault();

                            fetch("{{ route('logout') }}", {
                                method: 'POST',
                                headers: {
                                    'Content-Type': 'application/json',
                                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                                }
                            }).then(response => {
                                if (response.ok) {
                                    // Redirect to the login page or any other page after successful logout
                                    window.location.href = '/';
                                }
                            }).catch(error => {
                                console.error('Error:', error);
                            });
                        });
                    </script>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->

        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="px-4 py-0 navbar navbar-expand bg-light navbar-light sticky-top">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="mb-0 text-primary"><i class="fa fa-hashtag"></i></h2>
                </a>
                <a href="#" class="flex-shrink-0 sidebar-toggler">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="border-0 form-control" type="search" placeholder="Search">
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item ">
                        <a href="#" class="nav-link " data-bs-toggle="dropdown">
                            {{-- <i class="fa fa-envelope me-lg-2"></i> --}}
                            <span class="d-none d-lg-inline-flex"></span>
                        </a>
                    </div>

                </div>
            </nav>
            <!-- Navbar End -->

            @yield('content')

            <!-- Footer Start -->
            <div class="px-4 pt-4 container-fluid">
                <div class="p-4 bg-light rounded-top">
                    <div class="row">
                        <div class="text-center col-12 col-sm-6 text-sm-start">
                            &copy; Emoodji, All Right Reserved.
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src=" {{ asset('/admin/lib/chart/chart.min.js ') }}"></script>
    <script src=" {{ asset('/admin/lib/easing/easing.min.js ') }}"></script>
    <script src=" {{ asset('/admin/lib/waypoints/waypoints.min.js ') }}"></script>
    <script src=" {{ asset('/admin/lib/owlcarousel/owl.carousel.min.js ') }}"></script>
    <script src=" {{ asset('/admin/lib/tempusdominus/js/moment.min.js ') }}"></script>
    <script src=" {{ asset('/admin/lib/tempusdominus/js/moment-timezone.min.js ') }}"></script>
    <script src=" {{ asset('/admin/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js ') }}"></script>

    <!-- Template Javascript -->
    <script src=" {{ asset('/admin/js/main.js ') }}"></script>
</body>

</html>
