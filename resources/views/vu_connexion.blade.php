<br><br><br><br><br><br><br>
<div id="container">
    
           <h1><img src="{{ asset('img/logo_First.png') }}" alt="logo du site"></h1>
    <link rel="stylesheet" href="{{ asset('css/connexion.css') }}">
    <div class="lienAccueil"> 
        <a href="{{ route('chemin_accueil')}}">Accueil </a> 
    </div>

    <form action="{{ route('chemin_connecter') }}" method="post">
        {{ csrf_field() }} <!-- laravel va ajouter un champ caché avec un token -->
        <h1>Connexion </h1>
        <label>Identifiant :</label>  <input type ="text" name ="login">
        <br><br>
    <label>Mot de passe :</label>    <input type ="password" name ="mdp">
        <br><br>
        <input type="submit" name="valider" value="Valider">
    </form>
</div>
<br><br><br><br><br>
   



