<div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true" data-kt-drawer-name="app-sidebar"
     data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="225px"
     data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
    <div class="app-sidebar-logo px-6" id="kt_app_sidebar_logo">
        <a href="/admin/dashboard">
            <img alt="Logo" src="/wp-content/themes/nordiccell/assets/dist/img/img_1.png"
                 class="h-30px app-sidebar-logo-default"/>
            <img alt="Logo" src="/image/favicon.svg" class="h-30px app-sidebar-logo-minimize"/>
        </a>
        <div id="kt_app_sidebar_toggle"
             class="app-sidebar-toggle btn btn-icon btn-shadow btn-sm btn-color-muted btn-active-color-primary body-bg h-30px w-30px position-absolute top-50 start-100 translate-middle rotate"
             data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body"
             data-kt-toggle-name="app-sidebar-minimize">
            <i class="ki-duotone ki-double-left fs-2 rotate-180">
                <span class="path1"></span>
                <span class="path2"></span>
            </i>
        </div>
    </div>
    <div class="app-sidebar-menu overflow-hidden flex-column-fluid">
        <div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper hover-scroll-overlay-y my-5"
             data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto"
             data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer"
             data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px" data-kt-scroll-save-state="true"
             style="height: 851px;">
            <div class="menu menu-column menu-rounded menu-sub-indention px-3" id="#kt_app_sidebar_menu"
                 data-kt-menu="true" data-kt-menu-expand="false">
                <div class="menu-item">
                    <a href="/admin/dashboard" class="menu-link">
            <span class="menu-icon">
                <i class="ki-duotone ki-home-3 fs-2">
                    <span class="path1"></span>
                    <span class="path2"></span>
                    <span class="path3"></span>
                    <span class="path4"></span>
                </i>
            </span>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a href="{{route('users')}}" class="menu-link">
            <span class="menu-icon">
                <i class="ki-duotone ki-home-3 fs-2">
                    <span class="path1"></span>
                    <span class="path2"></span>
                    <span class="path3"></span>
                    <span class="path4"></span>
                </i>
            </span>
                        <span class="menu-title">Users</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a href="{{route('parent_categories.index')}}" class="menu-link">
            <span class="menu-icon">
                <i class="ki-duotone ki-home-3 fs-2">
                    <span class="path1"></span>
                    <span class="path2"></span>
                    <span class="path3"></span>
                    <span class="path4"></span>
                </i>
            </span>
                        <span class="menu-title">Main Categories</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a href="{{route('categories.index')}}" class="menu-link">
            <span class="menu-icon">
                <i class="ki-duotone ki-home-3 fs-2">
                    <span class="path1"></span>
                    <span class="path2"></span>
                    <span class="path3"></span>
                    <span class="path4"></span>
                </i>
            </span>
                        <span class="menu-title">Categories</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a href="{{route('sub_categories.index')}}" class="menu-link">
            <span class="menu-icon">
                <i class="ki-duotone ki-home-3 fs-2">
                    <span class="path1"></span>
                    <span class="path2"></span>
                    <span class="path3"></span>
                    <span class="path4"></span>
                </i>
            </span>
                        <span class="menu-title">Sub Categories</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a href="{{route('sub_category_items.index')}}" class="menu-link">
            <span class="menu-icon">
                <i class="ki-duotone ki-home-3 fs-2">
                    <span class="path1"></span>
                    <span class="path2"></span>
                    <span class="path3"></span>
                    <span class="path4"></span>
                </i>
            </span>
                        <span class="menu-title">Sub Category Items</span>
                    </a>
                </div>
                <div class="menu-item">
                    <a href="{{route('products.index')}}" class="menu-link">
            <span class="menu-icon">
                <i class="ki-duotone ki-home-3 fs-2">
                    <span class="path1"></span>
                    <span class="path2"></span>
                    <span class="path3"></span>
                    <span class="path4"></span>
                </i>
            </span>
                        <span class="menu-title">Products</span>
                    </a>
                </div>

                <div class="menu-item">
                    <a href="{{route('orders')}}" class="menu-link">
            <span class="menu-icon">
                <i class="ki-duotone ki-home-3 fs-2">
                    <span class="path1"></span>
                    <span class="path2"></span>
                    <span class="path3"></span>
                    <span class="path4"></span>
                </i>
            </span>
                        <span class="menu-title">Orders</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
