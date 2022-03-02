<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Document</title>
   <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>

<body>
   <div class="container">
      <div class="row">
         <div class="col-md-6 offset-md-3 mt-5">
            <h4>Contacter Nous</h4>

            <form action="{{ route('send.email') }}" method="POST">
               {{ csrf_field() }}

               @if (Session::has('erreur'))
               <div class="alert alert-danger">
                  {{Session::get('erreur')}}
               </div>
                   
               @endif
               @if (Session::has('success'))
                   <div class="alert alert-success">
                     {{Session::get('success')}}
                   </div>
               @endif

               <div class="form-group">
                  <label for="">Name</label>
                  <input type="text" class="form-control" name="name" placeholder="Entrer votre nom" value=" {{ old('name') }} ">
                  @error('name')
                  <span class="text-danger">{{$message}} </span>
                  @enderror
               </div>
               <div class="form-group">
                  <label for="">Email</label>
                  <input type="text" class="form-control" name="email" placeholder="Entrer votre Email" value=" {{ old('email') }} ">
                  @error('email')
                  <span class="text-danger">{{$message}} </span>
                  @enderror
               </div>
               <div class="form-group">
                  <label for="">Subject</label>
                  <input type="text" class="form-control" name="subject" placeholder="Entrer votre Subject" value=" {{ old('subject') }} ">
                  @error('subject')
                  <span class="text-danger">{{$message}} </span>
                  @enderror
               </div>
               <div class="form-group">
                  <label for="">Message</label>
   <textarea name="message" class="form-control" cols="4" rows="4"> {{ old('message') }} </textarea>
                  @error('message')
                  <span class="text-danger"> {{$message}} </span>
                  @enderror
               </div>

               <button class="btn btn-primary">Send</button>

            </form>
         </div>
      </div>
   </div>
</body>
</html>