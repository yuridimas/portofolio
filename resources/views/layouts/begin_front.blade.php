<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>{{ env('APP_NAME') }}</title>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet"
    type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('front/css/styles.css') }}" rel="stylesheet" />
    <!-- SweetAlert2 -->
    <link href="{{ asset('back/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}" rel="stylesheet">
</head>

<body id="page-top">
    @yield('content')
    <!-- Bootstrap core JS-->
    <script src="{{ asset('front/js/jquery.min.js') }}"></script>
    <script src="{{ asset('front/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Third party plugin JS-->
    <script src="{{ asset('front/js/jquery.easing.min.js') }}"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('front/js/scripts.js') }}"></script>
    <!-- Font Awesome icons (free version)-->
    <script src="{{ asset('front/assets/icon/fontawesome.js') }}"></script>
    <!-- Contact form JS-->
    {{-- <script src="{{ asset('front/assets/mail/jqBootstrapValidation.js') }}"></script>
    <script src="{{ asset('front/assets/mail/contact_me.js') }}"></script> --}}
    <!-- SweetAlert2 -->
    <script src="{{ asset('back/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });
        var success = '{{ Session::has('success') }}';

        if(success){
            Toast.fire({
                icon: 'success',
                title: '{{ Session::get('success') }}'
            })
        }

    </script>
</body>

</html>