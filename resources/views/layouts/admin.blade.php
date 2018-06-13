<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="bootstrap admin template">
  <meta name="author" content="">
  <title>Demo App Dashboard</title>
  <link rel="apple-touch-icon" href="/assets/images/apple-touch-icon.png">
  <link rel="shortcut icon" href="/assets/images/favicon.ico">
  <!-- Stylesheets -->
  <link rel="stylesheet" href="/global/css/bootstrap.min.css">
  <link rel="stylesheet" href="/global/css/bootstrap-extend.min.css">
  <link rel="stylesheet" href="/assets/css/site.min.css">
  <!-- Plugins -->
  <link rel="stylesheet" href="/global/vendor/animsition/animsition.css">
  <link rel="stylesheet" href="/global/vendor/asscrollable/asScrollable.css">
  <link rel="stylesheet" href="/global/vendor/switchery/switchery.css">
  <link rel="stylesheet" href="/global/vendor/intro-js/introjs.css">
  <link rel="stylesheet" href="/global/vendor/slidepanel/slidePanel.css">
  <link rel="stylesheet" href="/global/vendor/flag-icon-css/flag-icon.css">
  <link rel="stylesheet" href="/global/vendor/datatables-bootstrap/dataTables.bootstrap.css">
  <link rel="stylesheet" href="/global/vendor/datatables-fixedheader/dataTables.fixedHeader.css">
  <link rel="stylesheet" href="/global/vendor/datatables-responsive/dataTables.responsive.css">
  <link rel="stylesheet" href="/assets/examples/css/tables/datatable.css">
  <!-- Fonts -->
  <link rel="stylesheet" href="/global/fonts/font-awesome/font-awesome.css">
  <link rel="stylesheet" href="/global/fonts/web-icons/web-icons.min.css">
  <link rel="stylesheet" href="/global/fonts/brand-icons/brand-icons.min.css">
  <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
  <script src="/global/vendor/modernizr/modernizr.js"></script>
  <script src="/global/vendor/breakpoints/breakpoints.js"></script>
  <script>
  Breakpoints();
  </script>
</head>
<body>
    @include('includes.nav')
    @include('includes.sitemenu')
    @yield('content')
    @include('includes.footer')
</body>
</html>