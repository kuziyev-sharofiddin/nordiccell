<!DOCTYPE html>

<html lang="en">
<head><base href=""/>
    <title>Login</title>
    <meta charset="utf-8" />
    <link rel="shortcut icon" href="/wp-content/uploads/2024/08/32.jpg"/>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <link href="/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="/wp-content/uploads/2024/08/32.jpg" />

    <style>
        input{
            border: 1px solid #CEB079 !important;
        }
        form{
            box-shadow:  0px 0px 30px 0px #6c6c6c;
        }
    </style>
</head>
<body id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">
<div class="d-flex flex-column flex-root app-root" id="kt_app_root">

    <img src="/wp-content/uploads/2024/08/4.jpg" alt="" style="width: 100%; height: 100%; object-fit: cover; z-index: -1; position: absolute">
    <div class="left d-flex flex-column justify-content-center align-items-center"
         style="width: 100%; height: 100%; position: relative; overflow: hidden; background: linear-gradient(90deg, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0.5) 100%);">
        <form class="w-25 bg-white rounded px-10 py-20" method="POST" action="{{route('admin.authenticate')}}">
            @csrf

            <div class="text-center mb-11">
                <img src="/wp-content/uploads/2024/08/32.jpg">
                <div class="text-gray-800 fw-semibold fs-5 mt-5 mb-2">
                    Welcome to Admin Panel
                </div>
                <span class="text-gray-500 fs-6">Enter your email and password</span>
            </div>
            <div class="mb-5 text-danger fw-bold text-center">
            </div>
            <div class="fv-row mb-8 fv-plugins-icon-container">
                <label class="form-label required" for="email">Email</label>
                <input type="email"  name="email" autocomplete="off"
                       class="form-control bg-transparent">
                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
            </div>
            <div class="fv-row mb-8 fv-plugins-icon-container">
                <label class="form-label required" for="password">Password</label>
                <input type="password" placeholder="********" name="password" autocomplete="off"
                       class="form-control bg-transparent">
                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
            </div>
            <div class="d-grid">
                <button type="submit" class="btn fs-3" style="background: linear-gradient(180deg, rgba(255, 255, 255, 0.2) 40.98%, rgba(255, 255, 255, 0) 100%), #e8ca93;">
                   Login</button>
            </div>
        </form>
    </div>




</div>


<script src="/assets/plugins/global/plugins.bundle.js"></script>
<script src="/assets/js/scripts.bundle.js"></script>

</body>
</html>