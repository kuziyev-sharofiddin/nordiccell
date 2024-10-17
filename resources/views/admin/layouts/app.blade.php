<!DOCTYPE html>

<html lang="en">
<head>
    <base href=""/>
    <title>NordicCell | @yield('title')</title>
    <meta charset="utf-8"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="/wp-content/uploads/2024/08/32.jpg"/>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700"/>
    <link href="/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/css/style.bundle.css" rel="stylesheet" type="text/css"/>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/depdrop@3.1.1/dist/css/depdrop.min.css" rel="stylesheet" />
    <link rel="shortcut icon" href="\wp-content\uploads\2021\10\cropped-android-chrome-512x512-2-192x192.png"/>

</head>
<body id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true"
      data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true"
      data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true"
      data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">
<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
    <div class="app-page flex-column flex-column-fluid" id="kt_app_page">
        @include('admin.includes.header')
        <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
            @include('admin.includes.sidebar')
            <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                @yield('content')
            </div>
        </div>
    </div>
</div>

<script src="/assets/plugins/global/plugins.bundle.js"></script>
<script src="/assets/js/scripts.bundle.js"></script>
{{--CkEditor--}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

<script src="/assets/plugins/custom/ckeditor/ckeditor-classic.bundle.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/depdrop@3.1.1/dist/js/depdrop.min.js"></script>

<script>
    $(document).ready(function() {
        $('#country').select2({
            placeholder: 'Select Country',
            ajax: {
                url: '/get-countries',
                dataType: 'json',
                processResults: function (data) {
                    return {
                        results: $.map(data, function (item) {
                            return {
                                text: item.name,
                                id: item.id
                            }
                        })
                    };
                }
            }
        });

        $('#city').select2({
            placeholder: 'Select City',
            ajax: {
                url: function (params) {
                    return '/get-cities/' + params.params.data.id;
                },
                dataType: 'json',
                processResults: function (data) {
                    return {
                        results: $.map(data, function (item) {
                            return {
                                text: item.name,
                                id: item.id
                            }
                        })
                    };
                }
            }
        }).on('select2:opening', function (e) {
            var countryId = $('#country').val();
            if (!countryId) {
                e.preventDefault();
                alert('Please select a country first');
            }
        });

        $('#country').on('select2:select', function (e) {
            $('#city').prop('disabled', false);
            $('#city').val(null).trigger('change');
        });
    });
</script>
<script>
    ClassicEditor
        .create(document.querySelector('#editor'))
        .then(editor => {
            console.log(editor);
        })
        .catch(error => {
            console.error(error);
        });
</script>
<script>
    ClassicEditor
        .create(document.querySelector('#editor2'))
        .then(editor => {
            console.log(editor);
        })
        .catch(error => {
            console.error(error);
        });
</script>
<script>
    ClassicEditor
        .create(document.querySelector('#editor3'))
        .then(editor => {
            console.log(editor);
        })
        .catch(error => {
            console.error(error);
        });
</script>
<script>
    ClassicEditor
        .create(document.querySelector('#editor4'))
        .then(editor => {
            console.log(editor);
        })
        .catch(error => {
            console.error(error);
        });
</script>
<script>
    ClassicEditor
        .create(document.querySelector('#editor5'))
        .then(editor => {
            console.log(editor);
        })
        .catch(error => {
            console.error(error);
        });
</script>
<script>
    ClassicEditor
        .create(document.querySelector('#editor6'))
        .then(editor => {
            console.log(editor);
        })
        .catch(error => {
            console.error(error);
        });
</script>
@if (session('update_message'))
    <style>
        .toastr {
            width: 450px !important;
        }

        .toastr-success .toast-message {
            width: 100% !important;
        }

        .toastr {
            margin-top: 70px !important;
        }
    </style>

    <script>
        toastr.options = {
            "closeButton": true,
            "debug": true,
            "newestOnTop": true,
            "progressBar": true,
            "positionClass": "toastr-top-right",
            "preventDuplicates": true,
            "onclick": true,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        };

        toastr.success("<span style='font-size: 18px;'>{{ session('update_message') }}</span>");
    </script>
@endif
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function () {

        /*------------------------------------------
        --------------------------------------------
        Parent Category Dropdown Change Event
        --------------------------------------------
        --------------------------------------------*/
        $('#parent-category-dropdown').on('change', function () {
            let idParentCategory = this.value;
            $("#category-dropdown").html('');
            $.ajax({
                url: "{{url('api/categories')}}",
                type: "POST",
                data: {
                    parent_category_id: idParentCategory,
                    _token: '{{csrf_token()}}'
                },
                dataType: 'json',
                success: function (result) {
                    $('#category-dropdown').html('<option value="">-- Select Category --</option>');
                    $.each(result.categories, function (key, value) {
                        $("#category-dropdown").append('<option value="' + value
                            .id + '">' + value.name + '</option>');
                    });
                    $('#sub-category-dropdown').html('<option value="">-- Select Sub Category --</option>');
                }
            });
        });

        /*------------------------------------------
        --------------------------------------------
        Category Dropdown Change Event
        --------------------------------------------
        --------------------------------------------*/
        $('#category-dropdown').on('change', function () {
            let idCategory = this.value;
            $("#sub-category-dropdown").html('');
            $.ajax({
                url: "{{url('api/sub-categories')}}",
                type: "POST",
                data: {
                    category_id: idCategory,
                    _token: '{{csrf_token()}}'
                },
                dataType: 'json',
                success: function (resul) {
                    $('#sub-category-dropdown').html('<option value="">-- Select Sub Category --</option>');
                    $.each(resul.subCategories, function (key, value) {
                        $("#sub-category-dropdown").append('<option value="' + value
                            .id + '">' + value.name + '</option>');
                    });
                    $('#sub-category-item-dropdown').html('<option value="">-- Select Sub Category Item --</option>');
                }
            });
        });
        /*------------------------------------------
        --------------------------------------------
        Sub Category Dropdown Change Event
        --------------------------------------------
        --------------------------------------------*/
        $('#sub-category-dropdown').on('change', function () {
            let idSubCategory = this.value;
            $("#sub-category-item-dropdown").html('');
            $.ajax({
                url: "{{url('api/sub-category-items')}}",
                type: "POST",
                data: {
                    sub_category_id: idSubCategory,
                    _token: '{{csrf_token()}}'
                },
                dataType: 'json',
                success: function (res) {
                    $('#sub-category-item-dropdown').html('<option value="">-- Select Sub Category Item --</option>');
                    $.each(res.subCategoryItems, function (key, value) {
                        $("#sub-category-item-dropdown").append('<option value="' + value
                            .id + '">' + value.name + '</option>');
                    });}
            });
        });
    });
</script>
</body>
</html>
