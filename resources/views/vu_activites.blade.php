@extends('squelette/app')

   @section('contenu2')
 
 {{-- -------------------- ACTIVITES ASTRONOMIE/Jardin/Animation -------------------------------}}

               
      <div class="bradcam_area breadcam_bg overlay d-flex align-items-center justify-content-center" style="background-image: url('{{asset('img/banner/'.$banImage['nomimage'])}}'); " > 
         
            <div class="container ">
                  <div class="row">
                     <div class="col-xl-12">
                        <div class="bradcam_text text-center">
                              <h3>
                              
                              @foreach($lesTitres as $titre)                         
                                 {{$titre['libeler']}}                        
                              @endforeach
                              
                              </h3>
                        </div>
                     </div>
                  
                  </div>
            </div>
         </div>
 {{--  bradcam_area_end  --}}


     <div class="container bg-stage pb-5 ">         
               <div class="popular_causes_area pt-120">
               <br>
            <div class="section_title text-center mb-55 ">
                     <h3><span id="titreSection">Nos Articles :</span></h3>
                 </div>
                  <div class="container">
                     <div class="enFlexRow">
                   
                       
                        <div class="row">
                           @foreach($desArticles as $article)      
                           <div class="single_cause">
                 
                              <div class="thumb">
                                 <img  src="{{ asset('img/IMGarticle/'.$article['imagesarticle'])}}" alt="">
      
                              </div>
                              <div class="causes_content bg-white">
                                 <h4 class=""> {{ $article['titreArticle'] }}</h4>
                              <p>{!! Str::words($article['texte'],20) !!}</p>
                              <a href="{{ route('chemin_article',[$article['id']])}}" class="read_more">Lire La Suite</a>

      
                              </div>
   

                           </div>
                           @endforeach  
                        </div>    
                        
                     </div>
                  </div>
                  <div class="container ">
                     <div class="col-lg-4" style="height=100px;">
                        <div class="blog_right_sidebar">
                           
                           
                             {{-- ================ START_NEWSLETTER =================--}}
                           

                           <aside class="single_sidebar_widget newsletter_widget mb-0 bg-white ">
                              <h4 class="widget_title">NewsLetter</h4>
                              <form method="post" action="{{ url('newsletter/store') }}">
                                 {{ csrf_field() }}
                                 
                                 @if (\Session::has('success'))
                                 <div class="alert alert-success">
                                   <p>{{ \Session::get('success') }}</p>
                                 </div><br />
                                @endif
                                @if (\Session::has('failure'))
                                 <div class="alert alert-danger">
                                   <p>{{ \Session::get('failure') }}</p>
                                 </div><br />
                                @endif
                              
                              <div class="form-group">
                                 <input name="user_email" type="email" class="form-control " onfocus="this.placeholder = ''"onblur="this.placeholder = 'Entrer votre email'" placeholder='Entrer votre email' required>
                              </div>
                           <div class="form-row">
                              <div class="form-group col">
                                  <input class="form-control" type="text" name="nom" placeholder='Entrer votre nom' required >  
                              </div>
                              <div class="form-group col">
                                  <input class="form-control" type="text" name="prenom" placeholder='Entrer votre prenom' required>  
                              </div>
                           </div>
                                 <input  class="form-check-input" type="checkbox" required>
                                 <label >J’accepte de recevoir cette newsletter et je comprends que je peux me désabonner facilement à tout moment.</label>
                              
                                 <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn " type="submit">Souscrire</button>
                              </form>
                              
                           </div>
                           </aside>
                        
                            {{-- ================ END_NEWSLETTER =================--}}
                        </div>
                      </div>
                  </div>
             </div>
                  
    {{-- ========================== Blog Area end ==========================--}}

   @endsection