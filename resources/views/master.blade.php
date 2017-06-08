<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"
	<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
	<title>Landpage</title>

	<!-- Bootstrap -->
	<link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('/css/font-awesome.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('/css/style.css') }}" />
</head>
<body>

	<div class="container">
		<div class="row">
			@yield('content')
		</div>
	</div>
	<!-- Jquery -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="{{ asset('/js/bootstrap.min.js') }}"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="{{ asset('/js/jquery.correios.min.js') }}"></script>
	<script src="{{ asset('/js/jquery.maskedinput.min.js') }}"></script>	
	<script src="{{ asset('/js/functions.js') }}"></script>
</body>
</html>