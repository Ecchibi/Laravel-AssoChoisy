@extends('squelette/app')
   @section('contenu2')
<!----------------------------------- ACTIVITE ASTRONOMIE --------------------------------------------->
<link type="text/css" rel="stylesheet" href="{{ asset('css/colorlib_style.css') }}" />

<!-- bradcam_area_start  -->
<div class="bradcam_area breadcam_bg overlay d-flex align-items-center justify-content-center" style="background-image: url('{{asset('img/banner/'.$banImage['nomimage'])}}'); " > 

      <div class="retourAccueilAdmin">
         <a href=" {{ route('chemin_accueilAdmin') }} " alt="retour" title="Accueil admin"><label for="">←</label></a>  
      </div> 
   
        <div class="container">
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
<!-- bradcam_area_end  -->

      <!--======================== Blog Area ======================-->




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
                                 <p>{!! ($article['texte']) !!}</p>
            
   
               <a class="read_more" href=" {{ route('chemin_modifier', [$article['id']]) }} "> Modifier </a>
                                 <br> 
               <a class="read_more" href=" {{ route('chemin_supprimer',[$article['id']]) }} " > Supprimer l'Article </a> 
                                 </div>
      
   
                              </div>
                              @endforeach  
                           </div>    
                           
                        </div>
                     </div>
               
               <b> <a class="btn btn-secondary" href=" {{ route('chemin_ajouter') }} " > Ajouter un Article </a></b>
              
     

            </div>
           
      </div>
   </section>
   <!--================ Blog Area end =================-->
   @endsection