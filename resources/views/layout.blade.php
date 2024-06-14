<!DOCTYPE html>
<html>
<head>
	<title>Funny Bunny - Strona główna</title>
	<!-- Wymagane metadane -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Pobierz najnowszą wersję Bootstrapa z oficjalnej strony -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" integrity="sha384-..." crossorigin="anonymous">

	<!-- Opcjonalne style niestandardowe -->
	<style>
		/* Dodaj tutaj niestandardowe style */
	</style>
</head>
<body>
	<header>
		@include('partials._navbar')    
	</header>


	<main>
		@yield('content')
	</main>

	<footer class="container justify-content-center text-center text-lg-start col-10">
		<div class="text-center p-3 rounded border border-secondary bg-light" >
			<p>&copy; 2023 Funny Bunny</p>
		</div>
	</footer>

	<!-- Pobierz najnowszą wersję Bootstrapa z oficjalnej strony -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-..." crossorigin="anonymous"></script>
</body>
</html>