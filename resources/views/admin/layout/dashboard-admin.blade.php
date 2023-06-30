<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>

    <!--Bootstrap Assets-->
    <link rel="stylesheet" href="../../../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../assets/vendor/bootstrap/icons-1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css">

    <!--CSS Component For Layouting-->
    <link rel="stylesheet" href="../../../assets/css/dashboard-layout.css">

    <!--Styling Index-->
    <link rel="stylesheet" href="../../../assets/css/dashboard-admin.css">

</head>

<body>
    <div id="app">
        <div id="sidebarMain">
            <div class="wrapperSidebar">
                <div class="brandLogo">
                    <a href="{{route('homepage')}}" class="text-decoration-none">
                        <h2 style="color:#8d6e63;">MISOBAE.ID</h2>
                    </a>
                </div>
                <a href="#" class="profile">
                    <div class="imagesProfile">
                        @if (is_null(Auth::user()->image_profile))
                        <img src="../../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                            @else
                        <img src="{{asset('assets/img/' .Auth::user()->image_profile)}}" alt class="w-px-40 h-auto rounded-circle" />
                        @endif 
                    </div>
                    <div class="profileUser">
                        <h5 class="labelDay">Hello, </h5>
                        <h5 class="nameUser">{{Auth::user()->name}}</h5>
                    </div>
                </a>
                <div class="sidebar-menu-wrapper">
                    <li class="listMenuName">
                        <p>Admin Menu</p>
                    </li>
                    <li class="list-menu {{ (request()->is('dashboard')) ? 'active' : '' }}">
                        <div class="icon">
                            <ion-icon name="grid"></ion-icon>
                        </div>
                        <a href="/dashboard" class="sidebar-menu">Dashboard</a>
                    </li>
                    <li class="list-menu {{ (request()->is('dashboard/category/create')) ? 'active' : '' }}">
                        <div class="icon">
                            <ion-icon name="add-outline"></ion-icon>
                        </div>
                        <a href="/dashboard/category/create" class="sidebar-menu">Tambah Kategori</a>
                    </li>
                    <li class="list-menu {{ (request()->is('dashboard/category')) ? 'active' : '' }}">
                        <div class="icon">
                            <ion-icon name="grid-outline"></ion-icon>
                        </div>
                        <a href="/dashboard/category" class="sidebar-menu">List Kategori</a>
                    </li>
                    <li class="list-menu {{ (request()->is('dashboard/product/create')) ? 'active' : '' }}">
                        <div class="icon">
                            <ion-icon name="add-outline"></ion-icon>
                        </div>
                        <a href="/dashboard/product/create" class="sidebar-menu">Tambah Produk</a>
                    </li>
                    <li class="list-menu {{ (request()->is('dashboard/product')) ? 'active' : '' }}">
                        <div class="icon">
                            <ion-icon name="logo-dropbox"></ion-icon>
                        </div>
                        <a href="/dashboard/product" class="sidebar-menu">List Produk</a>
                    </li>
                    <li class="list-menu {{ (request()->is('dashboard/list-order')) ? 'active' : '' }}">
                        <div class="icon">
                            <ion-icon name="repeat"></ion-icon>
                        </div>
                        <a href="/dashboard/list-order" class="sidebar-menu">List Order</a>
                    </li>
                    <li class="list-menu {{ (request()->is('dashboard/users')) ? 'active' : '' }}">
                        <div class="icon">
                            <ion-icon name="people"></ion-icon>
                        </div>
                        <a href="/dashboard/users" class="sidebar-menu">Manage User</a>
                    </li>
                </div>
            </div>
        </div>

        <div id="main">
            <div class="headMain">
                <div class="brand-section">
                    <div class="iconBrand">
                        <a href="{{route('homepage')}}" class="text-decoration-none">
                            <h2 style="color:#8d6e63;">MISOBAE.ID</h2>
                        </a>
                    </div>

                    <div class="sidebarButton">
                        <img
                            src="../../assets/img/menuButton.svg"
                            alt=""
                            class="menuButton"
                        />
                    </div>
                </div>

                <div class="user-action">
                    <a class="logoutAction" href="{{route('logout')}}">
                        <img src="../../assets/img/powerIcon.svg" alt="">
                    </a>
                </div>
            </div>

            <div class="contentMain">
                @yield('content-main')
            </div>
        </div>
    </div>


    <!--Vendor-->

    <!--Jquery-->
    <script src="../../../assets/vendor/jquery/jquery.min.js"></script>

    <!--Bootstrap JS-->
    <script src="../../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!--Ion Icon-->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <!--Datatable By Bootstrap-->
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>

    <!--App JS-->
    <script src="../../../assets/js/app.js"></script>

    <script>

        $(document).ready(function() {
            $('#listCategoryTable').DataTable({
                "info": false,
                "bSort": false,
            });
        } );

        $(document).ready(function() {
            $('#listProductTable').DataTable({
                "info": false,
                "bSort": false,
            });
        } );

        $(document).ready(function() {
            $('#listOrderTable').DataTable({
                "info": false,
                "bSort": false,
            });
        } );

        $(document).ready(function() {
            $('#listUserTable').DataTable({
                "info": false,
                "bSort": false,
            });
        } );
    </script>
</body>

</html>
