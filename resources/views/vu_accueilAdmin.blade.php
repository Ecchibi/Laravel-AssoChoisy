<?php
  
?>
<head>
<link rel="stylesheet" href="{{ asset('css/accueilAdmin.css') }}"> 
</head>
<div>
    <div class="titre">
        <label id="title" > <strong>Modifier Pages</strong> </label>
    </div>  
    <div class="link">
        <ul><a href="{{ route('chemin_activiteUpdate',[1]) }}">Jardin</a></ul>
        <ul><a href="{{ route('chemin_activiteUpdate',[2]) }}">Astronomie</a></ul>   
        <ul><a href="{{ route('chemin_activiteUpdate',[3]) }}">Animation</a></ul>
       
        
    </div>
</div>
