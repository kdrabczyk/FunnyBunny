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
		<div class="container">
			<x-bunny name="Staś"/>
			<div class="row">
				<div class="col">
					<h2>O nas</h2>
					<p>Jesteśmy zespołem zapalonych miłośników króliczków, którzy chcą dzielić się swoją pasją z innymi. Na naszej stronie znajdziesz mnóstwo informacji o królikach, porad dotyczących ich pielęgnacji oraz wiele innych ciekawych treści. Zapraszamy do odwiedzenia naszej strony!</p>
					<p>Nasza pasja do królików zaczęła się wiele lat temu, kiedy to po raz pierwszy spotkaliśmy się z tymi uroczymi stworzeniami. Od tamtej pory zawsze mieliśmy w domu przynajmniej jednego króliczka, a nasza kolekcja stale się powiększa. Z czasem zaczęliśmy zgłębiać tajniki pielęgnacji królików i zdobywać wiedzę na temat ich zachowania. Postanowiliśmy podzielić się tą wiedzą z innymi miłośnikami króliczków, dlatego powstała nasza strona internetowa.</p>
					<p>Na naszej stronie znajdziesz mnóstwo ciekawych artykułów na temat królików, porad dotyczących ich pielęgnacji, a także wiele innych ciekawych treści. Naszym celem jest propagowanie wiedzy na temat królików oraz pomaganie innym miłośnikom tych uroczych stworzeń. Jeśli masz jakieś pytania lub sugestie, skontaktuj się z nami za pomocą formularza kontaktowego lub przez nasze konto na Twitterze.</p>
				</div>
			</div>
		</div>
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