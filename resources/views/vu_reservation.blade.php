 @extends('squelette/app')
   @section('contenu2')
   
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Booking Form HTML Template</title>

	<!-- Google font -->
	<link href="http://fonts.googleapis.com/css?family=Playfair+Display:900" rel="stylesheet" type="text/css" />
	<link href="http://fonts.googleapis.com/css?family=Alice:400,700" rel="stylesheet" type="text/css" />


	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="{{ asset('css/color_bootstrap.min.css') }}" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="{{ asset('css/colorlib_style.css') }}" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

	
<body>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<div class="booking-bg">
							<div class="form-header">
								<h2>  Reservation : 	 Planetarium mobile </h2>
							</div>
						</div>
				

						<form action="{{ route('chemin_ajoutReservation') }}" method="post">
							{{ csrf_field() }} <!-- laravel va ajouter un champ caché avec un token -->
					<div class="policeForm"> 
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
					
										<span class="form-label">Date</span>
										<input class="form-control" type="date" name ="datereserv" required>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Nom :</span>
										 <input class="form-control" type="text" name ="nomreserv" required>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Prenom :</span>
            							<input class="form-control" type="text" name ="prenomreserv" required>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Organisme :</span>
										 <input class="form-control" type="text" name ="organismereserv">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Numero de Téléphone :</span>
            							<input class="form-control" type="tel" name ="telreserv" required>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Adresse mail :</span>
            							<input class="form-control" type="mail" name ="mailreserv" required>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Lieu de la prestation :</span>
            							<input class="form-control" type="text" name ="lieureserv" required>
									</div>
								</div>
					</div>
								<input  class="submit-btn" type="submit" name="valider" value="Valider">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
{{-- calendrier ... --}}

   @endsection