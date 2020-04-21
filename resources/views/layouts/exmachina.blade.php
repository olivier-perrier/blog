<!DOCTYPE HTML>

<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />

	<title>Monsieur Négoce</title>

	<link rel="icon" href="/favicon2.png" type="image/png" sizes="16x16">

	<!-- jQuery and Popper.js -->
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

	<!-- BootstrapCDN -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

	<!-- Bulma -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.2/css/bulma.min.css">

	<link rel="stylesheet" href="/exmachina/css/style.css" />
	<!-- <link rel="stylesheet" href="/exmachina/css/style-desktop.css" /> -->

</head>

<body>
	<x-header></x-header>

	<div class="container-fluid">

		<div class="row">
			<div class="col-md-2">
				<aside>
					<x-sidebar></x-sidebar>
				</aside>
			</div>
			<div class="col-md-10">
				<main>
					{{ $slot }}
				</main>
			</div>
		</div>
	</div>

	<x-footer></x-footer>

</body>

</html>