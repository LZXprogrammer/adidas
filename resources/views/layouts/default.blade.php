<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <meta name="description" content="这是一个 index 页面">
    <meta name="keywords" content="index">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="icon" type="image/png" href="/Admin/i/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="/Admin/i/app-icon72x72@2x.png">
    <meta name="apple-mobile-web-app-title" content="Amaze UI" />
    <script src="/Admin/js/echarts.min.js"></script>
    <link rel="stylesheet" href="/Admin/css/amazeui.min.css" />
    <link rel="stylesheet" href="/Admin/css/amazeui.datatables.min.css" />
    <link rel="stylesheet" href="/Admin/css/app.css">
    <script src="/Admin/js/jquery.min.js"></script>

</head>

<body data-type="index">
  <script src="/Admin/js/theme.js"></script>

@yield('content')

</body>

</html>
