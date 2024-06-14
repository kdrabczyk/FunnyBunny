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
		<div class="d-flex flex-wrap justify-content-center">
			@foreach ($bunnies as $bunny)
					<x-bunny-card-component :bunny="$bunny" />
					<br>
			@endforeach
			
		</div>
		<div class="d-flex justify-content-end">
			{{ $bunnies->links() }}
		</div>
	</main>
		{{-- <footer class="bg-light text-center text-lg-start">
			
		<div class="text-center p-3" style="background-color: blue);">
			<a href="/bunnies/create"><button type="button" class="btn btn-primary">Dodaj królika</button></a>
		</div>
		<div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
			<p>&copy; 2023 Funny Bunny</p>
		</div>
		</footer> --}}
		<footer class="container justify-content-center text-center text-lg-start col-10">
			<div class="text-center p-3" style="background-color: blue);">
				<a href="/bunnies/create"><button type="button" class="btn btn-primary">Dodaj królika</button></a>
			</div>
			<div class="text-center p-3 rounded border border-secondary bg-light" >
				<p>&copy; 2023 Funny Bunny</p>
			</div>
		</footer>

	<!-- Pobierz najnowszą wersję Bootstrapa z oficjalnej strony -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-..." crossorigin="anonymous"></script>
</body>
</html>