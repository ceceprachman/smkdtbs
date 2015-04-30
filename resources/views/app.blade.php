<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>e-Rapor</title>

	<link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<style>
	    body { padding-top: 70px; }
	</style>
</head>
<body>


    @include('part.navbar')


    @yield('content')


    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

    <script>
        $('div.alert').delay(3000).fadeOut(300);
    </script>
</body>
</html>
