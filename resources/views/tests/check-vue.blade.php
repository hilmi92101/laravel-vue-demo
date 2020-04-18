<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="csrf-token" content="{{ csrf_token() }}">


	<title>Check Vue</title>

	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

	<div id="app">
		<h1>Check Vue</h1>

		<example-component></example-component>
		
	</div>




	<script src="{{ asset('js/app.js') }}"></script>
	
</body>
</html>