@extends('squelette/app')
      @section('contenu2')
<br><br><br><br>
<head>
<link rel="stylesheet" href="{{ asset('css/style.css')}}"> 
</head>
<div class="message">
<ul>
      <li> <center> {{$message}} </center> </li>
</ul>
</div>
      @endsection