<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title', config('app.name'))</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis..com/css?family=Source+Sans+Pro:300,400,400i,700">

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @yield('css')
</head>

<body class="hold-transition sidebar-mini">
    {{--  Site wrapper  --}}
    <div class="wrapper">

        @include('layouts.partials.navbar')
        @include('layouts.partials.sidebar')

        {{--  Content Wrapper. Contains page content  --}}
        <div class="content-warapper">
            {{--  Content Header (Page header)  --}}
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>@yield('content-header')</h1>
                        </div>
                        <div class="col-sm-6 text-right">
                            @yield('content-actions')
                        </div>
                    </div>
                </div>
            </section>

            {{--  Main content  --}}
            <section class="content">
                @include('layouts.partials.alert.success')
                @include('layouts.partials.alert.error')
                @yield('content')
            </section>
        </div>

        <!-- /.content-wrapper -->

        @include('layouts.partials.footer')

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
    </div>

    <!-- ./wrapper -->
    <--  <script src="{{ asset('js/app.js') }}"></script>  -->
    @yield('js')

</body>
</html>
