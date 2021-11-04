<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">

    <!-- Styles -->
    <link href="{{ asset('admin/css/material-dashboard.css') }}" rel="stylesheet">
</head>
<body>
    <div class="wrapper">
        @include('layouts.inc.sidebar')

        <div class="main-panel">
            @include('layouts.inc.adminnav')

            <div class="content">
                @yield('content')
            </div>

            @include('layouts.inc.adminfooter')
        </div>
    </div>

    <!-- Scripts -->
    <!--   Core JS Files   -->
  <script src="{{ asset('admin/js/core/jquery.min.js') }}"></script>
  <script src="{{ asset('admin/js/core/popper.min.js') }}"></script>
  <script src="{{ asset('admin/js/core/bootstrap-material-design.min.js') }}"></script>
  <script src="{{ asset('admin/js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>

  @yield('scripts')
</body>
</html>
