<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>e-Rapor</title>
    <link href="/css/bootstrap.css" rel="stylesheet">
    <link href="//cdn.datatables.net/plug-ins/1.10.7/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">
{{--    <link href="{{elixir('css/app.css')}}" rel="stylesheet">--}}
    <style>body { padding-top: 70px; }</style>
</head>
<body>
    @include('part.navbar')
    @yield('content')

    <script src="//code.jquery.com/jquery.js"></script>
    <script src="{{elixir('js/app.js')}}"></script>
    <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
    <script src="//cdn.datatables.net/plug-ins/1.10.7/integration/bootstrap/3/dataTables.bootstrap.js"></script>
</body>
</html>
