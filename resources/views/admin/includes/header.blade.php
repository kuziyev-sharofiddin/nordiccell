
<div id="kt_app_header" class="app-header">
    <div class="app-container container-fluid d-flex align-items-stretch justify-content-end"
         id="kt_app_header_container">
        <div class="d-flex align-items-center d-lg-none ms-n3 me-1 me-md-2" title="Show sidebar menu">
            <div class="btn btn-icon btn-active-color-primary w-35px h-35px"  style="margin-right: 400px;" id="kt_app_sidebar_mobile_toggle">
                <i class="ki-duotone ki-abstract-14 fs-2 fs-md-1">
                    <span class="path1"></span>
                    <span class="path2"></span>
                </i>
            </div>
            <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0" >
                <a href="../../demo1/dist/index.html" class="d-lg-none">
                    <img alt="Logo" src="/image/favicon.svg" class="h-30px">
                </a>
            </div>
        </div>
        <div class="d-flex align-items-stretch justify-content-end flex-lg-grow-1" id="kt_app_header_wrapper">
            <div class="app-navbar flex-shrink-0">
                <div class="app-navbar-item ms-1 ms-md-3">
                    <button type="button" class="btn rotate p-0 btn-active-color-success" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-end" data-kt-menu-offset="0, 10px">
                        <i class="bi bi-globe fs-2"></i>
                    </button>
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-auto min-w-200 mw-300px py-3" data-kt-menu="true" style="">
                        <div class="menu-item px-3 ">
                            <a href="/locale/crl" class="menu-link d-flex px-5 @if (session()->get('locale') === 'crl') active @endif">
                        <span class="symbol symbol-20px me-4">
                            <img class="rounded-1" src="/assets/media/flags/uzbekistan.png" alt="">
                        </span>Krill</a>
                        </div>
                        <div class="menu-item px-3 ">
                            <a href="/locale/ru" class="menu-link d-flex px-5 @if (session()->get('locale') === 'ru') active @endif">
                        <span class="symbol symbol-20px me-4">
                            <img class="rounded-1" src="/assets/media/flags/russia.png" alt="">
                        </span>Rus</a>
                        </div>
                        <div class="menu-item px-3 active">
                            <a href="/locale/uz" class="menu-link d-flex px-5 @if (session()->get('locale') === 'uz') active @endif">
                        <span class="symbol symbol-20px me-4">
                            <img class="rounded-1" src="/assets/media/flags/uzbekistan.png" alt="">
                        </span>Uzb</a>
                        </div>
                    </div>
                </div>
                <div class="app-navbar-item ms-1 ms-md-3">
                    <!--begin::Menu toggle-->
                    <a href="#"
                       class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-30px h-30px w-md-40px h-md-40px"
                       data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-attach="parent"
                       data-kt-menu-placement="bottom-end">
                        <i class="ki-duotone ki-night-day theme-light-show fs-2 fs-lg-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                            <span class="path4"></span>
                            <span class="path5"></span>
                            <span class="path6"></span>
                            <span class="path7"></span>
                            <span class="path8"></span>
                            <span class="path9"></span>
                            <span class="path10"></span>
                        </i>
                        <i class="ki-duotone ki-moon theme-dark-show fs-2 fs-lg-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </a>
                    <!--begin::Menu toggle-->
                    <!--begin::Menu-->
                    <div
                        class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px"
                        data-kt-menu="true" data-kt-element="theme-mode-menu">
                        <!--begin::Menu item-->
                        <div class="menu-item px-3 my-0">
                            <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="light">
												<span class="menu-icon" data-kt-element="icon">
													<i class="ki-duotone ki-night-day fs-2">
														<span class="path1"></span>
														<span class="path2"></span>
														<span class="path3"></span>
														<span class="path4"></span>
														<span class="path5"></span>
														<span class="path6"></span>
														<span class="path7"></span>
														<span class="path8"></span>
														<span class="path9"></span>
														<span class="path10"></span>
													</i>
												</span>
                                <span class="menu-title">Light</span>
                            </a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3 my-0">
                            <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="dark">
												<span class="menu-icon" data-kt-element="icon">
													<i class="ki-duotone ki-moon fs-2">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
												</span>
                                <span class="menu-title">Dark</span>
                            </a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3 my-0">
                            <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="system">
												<span class="menu-icon" data-kt-element="icon">
													<i class="ki-duotone ki-screen fs-2">
														<span class="path1"></span>
														<span class="path2"></span>
														<span class="path3"></span>
														<span class="path4"></span>
													</i>
												</span>
                                <span class="menu-title">System</span>
                            </a>
                        </div>
                        <!--end::Menu item-->
                    </div>
                    <!--end::Menu-->
                </div>
                <div class="app-navbar-item ms-1 ms-md-3" id="kt_header_user_menu_toggle">
                    <div class="cursor-pointer w-45px h-45px d-flex align-items-center justify-content-center"
                         data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent"
                         data-kt-menu-placement="bottom-end" style="border : 1px dashed #CEB079; border-radius: 8px">
                        <img src="/wp-content/uploads/2024/08/32.jpg"  alt="user" style="width: 55%; margin-top: 6px;"/>
                    </div>

                    <div
                        class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px"
                        data-kt-menu="true">
                        <div class="menu-item px-3">
                            <div class="menu-content d-flex align-items-center px-3">
                                <div class="symbol symbol-40px me-5">
                                    <img alt="Logo" src="/wp-content/uploads/2024/08/32.jpg"/>
                                </div>
                                <div class="d-flex flex-column">
                                    <div class="fw-bold d-flex align-items-center fs-5">
<!-- Customer name-->
                                    </div>
                                    <a href="#" class="fw-semibold text-muted text-hover-primary fs-7">
<!-- Customer email-->
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="menu-item px-5">
                            <a href="{{route('admin.logout')}}" class="menu-link px-5 bg-danger text-white d-flex align-items-center justify-content-center">LogOut</a>
                        </div>
                    </div>
                </div>
                <div class="app-navbar-item d-lg-none ms-2 me-n2" title="Show header menu">
                    <div class="btn btn-flex btn-icon btn-active-color-primary w-30px h-30px"
                         id="kt_app_header_menu_toggle">
                        <i class="ki-duotone ki-element-4 fs-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

