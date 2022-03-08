
<head>
<link rel="stylesheet" href="{{ asset('css/accueilAdmin.css') }}"> 
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"> 

</head>
<div>
	
    <div class="titre">
        <label id="title" style="margin-left:5%;" > <strong>Administrateur</strong> </label> <br>
		  <br>
		  <br>
		  <br>

		<center> @includeWhen($Success != null , 'msgSucces', ['Success' =>  $Success]) </center> 
    </div>  
      

</div>
{{-- --SIDE BAR---- --}}
<body>

	<div class="sidebar">
		<div class="sidebar-brand">
			<h2><span class="fa fa-user-o"></span>	<img src="{{ asset('img/cropped-logo-nom-3.png') }}" alt="logo du site"></h2>
		</div>
        <div class="link">
		<div class="sidebar-menu">
			<ul>
				<li>
					<a href="{{ route('chemin_deconnexion') }}" class="active"><span class="fa fa-home">
					</span><span>Deconnecter</span></a>
					<li>
						<a id="Buttonwola" href="#"><span class="fa fa-th-large"></span><span>Réservations</span></a>
					</li>
				<li>
					<a href="{{ route('chemin_activiteUpdate',[1]) }}"><span class="fa fa-tasks"></span><span>Jardin</span></a>
				</li>
				<li>
					<a href="{{ route('chemin_activiteUpdate',[2]) }}"><span class="fa fa-th-large"></span><span>Astronomie</span></a>
				</li>
				<li>
					<a href="{{ route('chemin_activiteUpdate',[3]) }}"><span class="fa fa-line-chart"></span><span>Animation</span></a>
				</li>
				<li>
					
			</ul>
		</div>
	</div>
</div>
 
				<div class="d-flex justify-content-center" style="margin: 8% 10% 0 25%;">
					
						<table class="table table-striped" id="tableHide" style="display:none;">
							<thead>
								<tr>
									<th class="table-secondary" colspan="8">Réservations :</th>
								</tr>
								<tr class="bg-colorAsso">
									<th scope="col">	#id					  </th>
									<th scope="col">	Nom					  </th>
									<th scope="col">	Prénom				  </th>
									<th scope="col">	Email				     </th>
									<th scope="col">	n° Téléphone		  </th>
									<th scope="col">	Lieu de réservation </th>
									<th scope="col">	Organisme			  </th>
									<th scope="col">	Date Proposer		  </th>
								</tr>
							</thead>
							<tbody>
								@foreach($listeReservation as $reserv)
								<tr>
					
									<th scope="row"> {{$reserv->id }} 	   </th>
									<td>{{  $reserv->nomreserv }}    	   </td>
									<td>{{  $reserv->prenomreserv }}  	   </td>
									<td>{{  $reserv->emailreserv }}  	   </td>
									<td>{{  $reserv->telreserv }}          </td>
									<td>{{  $reserv->lieuprestation }}     </td>
									<td>{{  $reserv->organismereserv }}    </td>
									<td>{{  $reserv->datereserv }}    </td>

								</tr>
								@endforeach
							</tbody>


						</table>
					</div>

<script src="{{asset('js/reservation.js')}}"></script>
{{-- si tu veux le mettre avant utilise= "defer"  --}}

</body>
</html>