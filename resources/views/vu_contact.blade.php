  <!-- ================ contact section start ================= -->
  @extends('squelette/app')

   @section('contenu2')
  
  <section class="contact-section">
      
            <div class="container">
         
                <div class="d-none d-sm-block mb-5 pb-4">
                    <div id="map" style="height: 480px; position: relative; overflow: hidden;"></div>
                    <script>
                        function initMap() {
                            var uluru = {
                                lat: 48.75184445374224,  //Coordonnée du Marker google map 
                                lng: 2.407854069459878
                                
                            };
                            var grayStyles = [{
                                    featureType: "all",
                                    stylers: [{
                                            saturation: -90
                                        },
                                        {
                                            lightness: 50
                                        }
                                    ]
                                },
                                {
                                    elementType: 'labels.text.fill',
                                    stylers: [{
                                        color: '#18b699' //couleur nom de rue
                                    }]
                                }
                            ];
                            var map = new google.maps.Map(document.getElementById('map'), {
                                center: {
                                    lat: 48.75184445374224,   //Coordonnée google map
                                    lng: 2.407854069459878
                                },
                                zoom: 18,
                                styles: grayStyles,
                                scrollwheel: false
                            });
                          const marker = new google.maps.Marker({
                          position: uluru,
                          map: map, 
                        });
     
                        }
                    </script>
                    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpfS1oRGreGSBU5HHjMmQ3o5NLw7VdJ6I&amp;callback=initMap">
                    </script>


    
                <br>
                <div class="row">
                    <div class="col-12">
                        <h2 class="contact-title">Contactez-nous via le formulaire ci-dessous </h2>
                    </div>
                    
                    <div class="col-lg-8">
        <form class="form-contact contact_form" action="{{ route('send.email2') }}" method="post" id="contactForm" novalidate="novalidate">
                            {{ csrf_field() }}


                            <div class="row">
                           
                                <div class="col-sm-6">    <!-- REGARDE LE JS POUR ERROR MESSAGE-->
                                    <div class="form-group">
        <input class="form-control valid" name="name" value="{{ old('name') }}" placeholder="Entrer votre nom">
        @error('name')
        <span class="text-danger">{{$message}} </span>
        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
        <input class="form-control valid" name="prenom" value="{{ old('prenom') }}" placeholder="Entrer votre prenom">
        @error('prenom')
        <span class="text-danger">{{$message}} </span>
        @enderror
        
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
        <input class="form-control valid" name="number"value="{{ old('number') }}"  placeholder="Numero">
        @error('number')
		<span class="text-danger">{{$message}} </span>
		@enderror
        
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
        <input class="form-control valid" name="email" value="{{ old('email') }}"  placeholder="Email">
        @error('email')
		<span class="text-danger">{{$message}} </span>
		@enderror
        
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
        <input class="form-control" name="subject" value="{{ old('subject') }}"  placeholder="Sujet">
        @error('subject')
		<span class="text-danger">{{$message}} </span>
		@enderror
        
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                    <div class="form-group">
        <textarea class="form-control w-100" name="message" value="{{ old('message') }}" cols="30" rows="9"placeholder=" Entrer votre Message"> </textarea>
        @error('message')
		<span class="text-danger">{{$message}} </span>
		@enderror
        
                                      
                                    </div>
                            </div>

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

                            <div class="form-group mt-3">
                                <button type="submit" class="button button-contactForm boxed-btn" name="valider">Envoyer</button>
                            </div>
                             
         </form>


                        <script src="https://www.google.com/recaptcha/api.js?render=6Lc9TKQdAAAAAHNOvo12z-fgATp05iyFawC6_pNz"></script>
                            <script>
      
                                grecaptcha.ready(function() {
                                grecaptcha.execute                      ('6Lc9TKQdAAAAAHNOvo12z-fgATp05iyFawC6_pNz', {action:                   'submit'}).then(function(token) {
                                     // Add your logic to submit to your backend server here.
                                 document.getElementById('g-token').value = token;
                                  });
                                });
      
                        </script>
                    </div>
                    
                    <!--------------------------------------------------------------------------------------------------------->
                    <div class="col-lg-3 offset-lg-1">
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-home"></i></span>
                            <div class="media-body">
                                <h3> <a href="https://goo.gl/maps/vbopGk6DvjTEgwfM6" target="_blank"  >13 Rue de la Remise aux Faisans,</a> </h3>
                                <p> 94600, Choisy-le-Roi</p>    <!--Blank permet d'ouvrir un nouvel onglet-->
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                            <div class="media-body">
                                <h3> <a href="tel:+33626382512"> +33 6 26 38 25 12 </a></h3>
                                <p></p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-email"></i></span>
                            <div class="media-body" >
                                <h3> <a href="mailto:leshautesbornes.choisyleroi@gmail.com?subject=Renseigement">leshautesbornes.choisyleroi@gmail.com</a> </h3>
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- ================ contact section end ================= -->
    @endsection