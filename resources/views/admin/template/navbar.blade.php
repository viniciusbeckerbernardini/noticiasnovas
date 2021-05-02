<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="../../index3.html" class="nav-link">Visualizar site</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">Sair</a>
        </li>
    </ul>
</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
        <img src="../../dist/img/AdminLTELogo.png"
             alt="AdminLTE Logo"
             class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">Noticias novas</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Jeandro</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{route('admin.dashboard')}}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                {{--POST--}}
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">{{--AQUI VAI UM ACTIVE PRA QUANDO FOR PRINCIPAL--}}
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Post
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item menu-open">
                            <a href="{{route('post.create')}}" class="nav-link active">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Criar post</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('post.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Listar posts</p>
                            </a>
                        </li>
                    </ul>
                </li>
                {{--Category--}}
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Categorias
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="../forms/general.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Criar categoria</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../forms/advanced.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Listar categorias</p>
                            </a>
                        </li>
                    </ul>
                </li>
                {{--Users--}}
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Usuários
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="../forms/general.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Criar usuário</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../forms/advanced.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Listar usuários</p>
                            </a>
                        </li>
                    </ul>
                </li>
                {{--Pages--}}
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Páginas
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="../forms/general.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Criar página</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../forms/advanced.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Listar páginas</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
<div class="wrapper">
    <div class="content-wrapper">
