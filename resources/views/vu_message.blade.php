@extends('squelette/app')
      @section('contenu2')


      <head>
            <link rel="stylesheet" href="{{ asset('css/message.css')}}"> 
      </head>
      <div id="bookingmessage">
            <div class="message" >
                  <ul >
                        <li id="textemessage" > {{ $message }}  </li>
                  </ul>
            </div>
      </div>
      @endsection