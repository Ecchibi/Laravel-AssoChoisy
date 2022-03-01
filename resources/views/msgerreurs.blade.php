
<head>
    <link rel="stylesheet" href="{{ asset('css/message.css')}}"> 
</head>
<div id="bookingmessage">
    <div class="message">
        
            @foreach($erreurs as $erreur)
                <li >{{ $erreur }}</li>
            @endforeach
        
    </div>
</div>