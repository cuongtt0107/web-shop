<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{BASE_URL.'home'}}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Poly Shop</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{BASE_URL}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Quản lý sản phẩm
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
            aria-controls="collapseTwo">
            <i class="fas fa-list-ol"></i>
            <span>Danh mục</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{BASE_URL}}">Danh sách</a>
                <a class="collapse-item" href="{{BASE_URL .'new-cate'}}">Tạo mới</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProduct"
            aria-expanded="false" aria-controls="collapseProduct">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Sản Phẩm </span>
        </a>
        <div id="collapseProduct" class="collapse" aria-labelledby="headingProduct" data-parent="#accordionSidebar"
           >
            <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{BASE_URL.'products'}}">Danh sách</a>
                <a class="collapse-item" href="{{BASE_URL . 'newproduct'}}">Tạo mới</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseInvoice"
            aria-expanded="false" aria-controls="collapseInvoice">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Hóa đơn</span>
        </a>
        <div id="collapseInvoice" class="collapse" aria-labelledby="headingInvoice" data-parent="#accordionSidebar"
           >
            <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{BASE_URL.'invoice'}}">Danh sách</a>
            </div>
        </div>
    </li>


</ul>