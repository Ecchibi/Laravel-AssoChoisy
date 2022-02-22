<!-- Code a venir -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modification Article</title>
</head>
<body>
<div align ='center'> <h1 class="titre1"> Modification </h1> </div>

<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" href="{{ asset('css/connexion.css') }}"> 
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

<div id="container2">
<form action="{{ route('chemin_enregModification') }}" method='post'>
  {{ csrf_field() }}  {{--important sinon ne marche po --}}
  

  <h4>Article : n°{{$id}} </h4>
 
   <textarea id="mamodif" type = 'text' name = 'texte' cols="50" rows="20"
   value=' {{$texte}}'> {{$texte}} </textarea> <br>
   <script>
    tinymce.init({
      selector: '#mamodif'
    });
  </script>

  <input type='hidden' name = 'id' size = 7 value='{{$id}}'>

  <input type="submit" name="valider" value="modifier">

</form>
</div>
</body>
</html>