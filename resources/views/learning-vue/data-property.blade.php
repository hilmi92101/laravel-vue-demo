<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">

	<title>Document</title>
</head>
<body>


	<div id="app">
		
		<learning-data-property></learning-data-property>
		
	</div>
<script src="{{ asset('js/app.js') }}"></script>
	
</body>
</html>