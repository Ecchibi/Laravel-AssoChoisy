<!-- Code a venir -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div align ='center'><h1>Modification</b></div>

<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" href="{{ asset('css/connexion.css') }}"> 
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

<div id="container">
<form action="{{ route('chemin_enregModification') }}" method='post'>
  {{ csrf_field() }}  {{--important sinon ne marche po --}}
  <br><h4>MODIFIER <br></h4>

  <h4>Article: <br> 
  <br><h4>id={{$id}}<br></h4>
   <textarea id="mamodif" type = 'text' name = 'texte' cols="50" rows="20"
   value=' {{$texte}}'> {{$texte}} </textarea> <br></h4>
   <script>
    tinymce.init({
      selector: '#mamodif'
    });
  </script>

  <input type='hidden' name = 'id' size = 7 value='{{$id}}'>

  <button type = 'submit' name='modifier'>modifier</button> <br>
  <button type = 'reset' value = 'Annuler'>Annuler</button> 

</form>
</div>
</body>
</html>