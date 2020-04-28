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
		
		<div class="container">
			<h1 class="mt-3 mb-4">Component</h1>
			

			<vue-datatable></vue-datatable>
		</div>
		
		
	</div>
	
	<script src="https://kit.fontawesome.com/4e234ee26f.js" crossorigin="anonymous"></script>
	<script src="{{ asset('js/app.js') }}"></script>

	
</body>
</html>