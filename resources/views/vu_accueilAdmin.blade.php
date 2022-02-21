<?php
  
?>
<head>
<link rel="stylesheet" href="{{ asset('css/accueilAdmin.css') }}"> 
</head>
<div>
    <div class="titre">
        <label id="title" > <strong>Accueil Admin</strong> </label>
    </div>  
      

</div>
{{-- ------- --}}
<body>
	<div class="sidebar">
		<div class="sidebar-brand">
			<h2><span class="fa fa-user-o"></span>Menu:</h2>
		</div>
        <div class="link">
		<div class="sidebar-menu">
			<ul>
				<li>
					<a href="{{ route('chemin_deconnexion') }}" class="active"><span class="fa fa-home"></span><span>Deconnecter</span></a>
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

</body>
</html>