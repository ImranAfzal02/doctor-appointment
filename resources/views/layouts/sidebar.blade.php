<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ isset($menu) ? route($menu['home_url']) : '' }}" class="brand-link">
        <img src="{{ asset('img/AdminLTELogo.png') }}" alt="Admin Panel" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Admin Panel</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                @if (isset($menu))
                @foreach($menu['menu'] as $menuItem)
                        <li class="nav-item">
                            <a href="{{ route($menuItem['route']) }}" class="nav-link @if(Route::currentRouteName() == $menuItem['route']) active @endif">
                                <i class="{{ $menuItem['icon'] }}"></i>
                                <p>{{ $menuItem['title'] }}</p>
                            </a>
                            @if($menuItem['hasSubMenu'])
                                <ul class="nav nav-treeview">
                                    @foreach($menuItem['subMenu'] as $subMenu)
                                        <li class="nav-item">
                                            <a href="{{ route($subMenu['route']) }}" class="nav-link">
                                                <i class="{{ $subMenu['icon'] }}"></i>
                                                <p>{{ $subMenu['title'] }}</p>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        </li>
                @endforeach
                @endif
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
