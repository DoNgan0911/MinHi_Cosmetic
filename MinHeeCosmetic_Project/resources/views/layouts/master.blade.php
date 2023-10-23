<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{asset('assets/css/boostrap.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}">


</head>

<body>
    <div class="wrapper">
        <aside id="sidebar">
            <div class="h-100">
                <div class="sidebar-logo">
                    <a href="#">MinHi Cosmetic</a>
                </div>
                <ul class="sidebar-nav">
                    <li class="sidebar-item">
                        <a href="{{route('user.index')}}" class="sidebar-link collapsed">
                            <i class="fa-solid fa-person"></i>
                            Quản lý nhân viên
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="{{route('customers.index')}}" class="sidebar-link collapsed">
                            <i class="fa-solid fa-person"></i>
                            Quản lý khách hàng
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="./QLDH.html" class="sidebar-link collapsed">
                            <i class="fa-solid fa-pager"></i>
                            Quản lý đơn hàng
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="SP1.html" class="sidebar-link collapsed" data-bs-target="#pages"
                            data-bs-toggle="collapse" aria-expanded="false">
                            <i class="fa-solid fa-pager"></i>
                            Quản lý sản phẩm
                        </a>
                        <ul id="pages" class="sidebar-dropdown list-unstyled collapsed" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="SP1.html" class="sidebar-link">Sữa rửa mặt</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Kem chống nắng</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Serum</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Kem dưỡng ẩm</a>
                            </li>
                        </ul>

                    </li>
                </ul>

            </div>
        </aside>
        <div class="main">
            <nav class="navbar navbar-expand px-3 border-bottom">
                <button class="btn" id="sidebar-toggle" type="button">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse navbar">
                    <ul class="navbar-nav">
                        <li class="">
                            <div class="notification">
                                <i class="bi bi-bell-fill"></i>
                                <span class="badge">2</span>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" data-bs-toggle="dropdown" class="nav-icon pe-md-0">
                                <img src="{{asset('assets/img/avatar.png')}}" class="avatar img-fluid rounded" alt="">
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="#" class="dropdown-item">Profile</a>
                                <a href="#" class="dropdown-item">Setting</a>
                                <a href="#" class="dropdown-item">Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            @yield('content')


        </div>
    </div>
    <script src="{{asset('assets/js/jquery.js')}}"></script>
    <script src="{{asset('assets/js/script.js')}}"></script>
</body>

</html>