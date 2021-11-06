<div class="sidebar" data-color="purple" data-background-color="white" data-image="{{ asset('assets/img/sidebar-1.jpg') }}">
    <div class="logo">
        <a href="#" class="simple-text logo-normal">
        E-Shop
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item {{ Request::is('dashboard') ? 'active':''; }}  ">
                <a class="nav-link" href="/">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="nav-item {{ Request::is('categories') ? 'active':''; }} ">
                <a class="nav-link" href="{{ url('categories') }}">
                    <i class="material-icons">ac_unit</i>
                    <p>Categorias</p>
                </a>
            </li>
            <li class="nav-item {{ Request::is('add-category') ? 'active':''; }}">
                <a class="nav-link" href="{{ url('add-category') }}">
                    <i class="material-icons">apps</i>
                    <p>Agregar Categoria</p>
                </a>
            </li>
            <li class="nav-item {{ Request::is('products') ? 'active':''; }} ">
                <a class="nav-link" href="{{ url('products') }}">
                    <i class="material-icons">personal_video</i>
                    <p>Productos</p>
                </a>
            </li>
            <li class="nav-item {{ Request::is('add-product') ? 'active':''; }}">
                <a class="nav-link" href="{{ url('add-product') }}">
                    <i class="material-icons">pie_chart</i>
                    <p>Agregar Producto</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="./tables.html">
                    <i class="material-icons">content_paste</i>
                    <p>Table List</p>
                </a>
            </li>
            {{-- <li class="nav-item ">
                <a class="nav-link" href="./typography.html">
                    <i class="material-icons">library_books</i>
                    <p>Typography</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="./icons.html">
                    <i class="material-icons">bubble_chart</i>
                    <p>Icons</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="./map.html">
                    <i class="material-icons">location_ons</i>
                    <p>Maps</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="./notifications.html">
                    <i class="material-icons">notifications</i>
                    <p>Notifications</p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="./rtl.html">
                    <i class="material-icons">language</i>
                    <p>RTL Support</p>
                </a>
            </li>
            <li class="nav-item active-pro ">
                <a class="nav-link" href="./upgrade.html">
                    <i class="material-icons">unarchive</i>
                    <p>Upgrade to PRO</p>
                </a>
            </li> --}}
        </ul>
    </div>
</div>
