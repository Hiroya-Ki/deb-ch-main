<!-- // resources/views/layout.blade.php // -->

<!DOCTYPE HTML>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>deb-ch</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"> 
</head>
<body>
    @include('navbar')
    
    @yield('content')
    <script src="{{ asset('js/jquery-3.1.1.js') }}"></script> 
    <script src="{{ asset('js/jquery-migrate-1.4.1.js') }}"></script> 
    <script src="{{ asset('js/bootstrap.js') }}"></script> 
</body>
</html>
