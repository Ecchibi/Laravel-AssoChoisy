<!--Code a venir -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter Article</title>
</head>
<body>
<div align ='center'> <h1 class="titre1"> Ajouter </h1> </div>

<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" href="{{ asset('css/connexion.css') }}"> 
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

<div id="container2">
      <form action="{{ route('chemin_enregAjouter') }}" method='post' enctype="multipart/form-data" >
      {{ csrf_field() }}  {{--important sinon ne marche po --}}
 
         <label for="">Activtée :</label>
            <select name="idActivites"> 
               @foreach($idActivitesLibeller as $idActivite)
               <option selected value="{{ $idActivite['id'] }}">
                  <!--Valeur envoyé a la variable Visiteur-->
                  {{ $idActivite['libeler']}} 
               @endforeach
            </select>
            
            <input type="file" name="file">
           

               <input type="text" name="titreArticle" placeholder="Saisissez votre titre ici" required>

               <textarea id="ajouter" type = 'text' name = 'texte' cols="50" rows="20"
                placeholder="Ajouter votre article" >  </textarea> <br>
                  <script>
                  tinymce.init({
                     selector: '#ajouter' //= id textearea
                  });
                  </script>
             
            {{-- <input type='hidden' name = 'id' size = 7 value=''> --}}

            <input type="submit" name="valider" value="Publier">

         </form>
      </div>
   </body>
</html>