<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>e-Rapor</title>
    <link href="/css/bootstrap.css" rel="stylesheet">
    <style>body { padding-top: 70px; }</style>
</head>
<body>
    @include('part.navbar')
    @yield('content')

    <script src="//code.jquery.com/jquery.js"></script>
    <script src="{{elixir('js/app.js')}}"></script>
</body>
</html>
