 @extends('squelette/app')
   @section('contenu2')
   
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Reservation</title>

	<!-- Google font -->
	<link href="http://fonts.googleapis.com/css?family=Playfair+Display:900" rel="stylesheet" type="text/css" />
	<link href="http://fonts.googleapis.com/css?family=Alice:400,700" rel="stylesheet" type="text/css" />


	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">

	<!--====== Bootstrap =====-->
	<link type="text/css" rel="stylesheet" href="{{ asset('css/color_bootstrap.min.css') }}" />
	<link type="text/css" rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />



	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="{{ asset('css/colorlib_style.css') }}" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

	
<body >
	<div id="booking" class="section">
		<div class="section-center" >
			<div class="container mt-5">
				<div class="row">
					<div class="booking-form mt-5">
						<div class="booking-bg">
							<div class="form-header">
								<h2>  Réservation : 	 Planétarium mobile </h2>
							</div>
						</div>
				

						<form action="{{ route('send.email') }}" method="post">
							{{ csrf_field() }} <!-- laravel va ajouter un champ caché avec un token -->

						

					<div class="policeForm"> 
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
					
										<span class="form-label">Date</span>
		<input class="form-control" type="date" name ="datereserv"   value=" {{ old('datereserv') }} ">
										@error('datereserv')
										<span class="text-danger">{{$message}} </span>
										@enderror

									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Nom :</span>
		<input class="form-control" type="text" name ="nomreserv"   value=" {{ old('nomreserv') }} ">

										 @error('nomreserv')
										 <span class="text-danger">{{$message}} </span>
										 @enderror
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Prénom :</span>
   <input class="form-control" type="text" name ="prenomreserv"  value=" {{ old('prenomreserv') }} ">
											@error('prenomreserv')
											<span class="text-danger">{{$message}} </span>
											@enderror
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Organisme :</span>
	<input class="form-control" type="text" name ="organismereserv"value=" {{ old('organismereserv') }} ">
										 @error('organismereserv')
										 <span class="text-danger">{{$message}} </span>
										 @enderror
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Numero de Téléphone :</span>
         <input class="form-control" type="tel" name ="telreserv" pattern="^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,5})|(\(?\d{2,6}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$" maxlength="10" value=" {{ old('telreserv') }} ">
											@error('telreserv')
											<span class="text-danger">{{$message}} </span>
											@enderror
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label">Adresse mail :</span>
         <input class="form-control" type="mail" name ="mailreserv" value=" {{ old('mailreserv') }} ">
											@error('mailreserv')
											<span class="text-danger">{{$message}} </span>
											@enderror
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<span class="form-label" >Lieu de la prestation :</span>
         <input class="form-control" type="text" name ="lieureserv"  value=" {{ old('lieureserv') }} ">
											@error('lieureserv')
											<span class="text-danger">{{$message}} </span>
											@enderror
									</div>
								</div>
					</div>


					@if (Session::has('erreur'))
               <div class="alert alert-danger">
                  {{Session::get('erreur')}}
               </div>
                   
               @endif
               @if (Session::has('success'))
                   <div class="alert alert-success">
                     {{Session::get('success')}}
                   </div>
               @endif
				
					<label class="form-check-label" >J’accepte de partager les informations renseignées et comprends que je peux demander à la suppression de mes données à tout moment en nous contactant.
						<input type="checkbox" required></label>	
					
					 
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