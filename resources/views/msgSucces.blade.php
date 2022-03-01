
<head>
    <link rel="stylesheet" href="{{ asset('css/message.css')}}"> 
</head>
<div id="bookingMessageSuccess">
    <div class="message">
        
            @foreach($Success as  $Succes)
                <li >{{ $Succes }}</li>
            @endforeach
        
    </div>
</div>