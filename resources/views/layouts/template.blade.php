<!DOCTYPE html>
<html>
	<head>
		<title>CRUD BARANG</title>

		<!--css bootstrap untuk style panel, tombol, dan grid-->
		<link rel="stylesheet" type="text/css" href="{{asset('bootstrap/css/bootstrap.css')}}">
		<!--fontawesome untuk icon-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
		<style type="text/css">
			.content{
				width: 80%;
				margin: 10px auto;
			}
		</style>
	</head>
	<body>
		<center>
			<h1>CRUD Barang</h1>
			@yield('content')
		</center>
	</body>
</html>
