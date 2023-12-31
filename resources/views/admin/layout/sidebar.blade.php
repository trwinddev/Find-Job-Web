<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('admin_home') }}">Admin Panel</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('admin_home') }}"></a>
        </div>
        <ul class="sidebar-menu">
            <li class="active">
                <a class="nav-link" href="{{ route('admin_home') }}" data-bs-toggle="tooltip" data-bs-placement="right"
                    data-bs-title="Dashboard">
                    <i class="fas fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="nav-item dropdown active">
                <a href="#" class="nav-link has-dropdown">
                    <i class="fas fa-caret-square-down"></i>
                    <span>Dropdown Items</span>
                </a>
                <ul class="dropdown-menu">
                    <li class="active">
                        <a class="nav-link" href="">
                            <i class="fas fa-angle-right"></i>
                            Item 1
                        </a>
                    </li>
                    <li class="">
                        <a class="nav-link" href="">
                            <i class="fas fa-angle-right"></i>
                            Item 2
                        </a>
                    </li>
                </ul>
            </li>
            <li class="">
                <a class="nav-link" href="setting.html" data-bs-toggle="tooltip" data-bs-placement="right"
                    data-bs-title="Setting">
                    <i class="fas fa-cog"></i>
                    <span>Setting</span>
                </a>
            </li>
            <li class="">
                <a class="nav-link" href="form.html" data-bs-toggle="tooltip" data-bs-placement="right"
                    data-bs-title="Form">
                    <i class="fab fa-wpforms"></i>
                    <span>Form</span>
                </a>
            </li>
            <li class="">
                <a class="nav-link" href="table.html" data-bs-toggle="tooltip" data-bs-placement="right"
                    data-bs-title="Table">
                    <i class="fas fa-table"></i>
                    <span>Table</span>
                </a>
            </li>
            <li class="">
                <a class="nav-link" href="invoice.html" data-bs-toggle="tooltip" data-bs-placement="right"
                    data-bs-title="Invoice">
                    <i class="fas fa-file-invoice"></i>
                    <span>Invoice</span>
                </a>
            </li>
        </ul>
    </aside>
</div>
