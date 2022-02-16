<br><br><br><br><br><br><br>
<div id="container">
           <h1>Connexion</h1>
    <link rel="stylesheet" href="{{ asset('css/connexion.css') }}"> 
    <form action="{{ route('chemin_connecter') }}" method="post">
        {{ csrf_field() }} <!-- laravel va ajouter un champ caché avec un token -->
        <label>Identifiant :</label>  <input type ="text" name ="login">
        <br><br>
    <label>Mot de passe :</label>    <input type ="password" name ="mdp">
        <br><br>
        <input type="submit" name="valider" value="Valider">
    </form>
</div>
<br><br><br><br><br>
   



