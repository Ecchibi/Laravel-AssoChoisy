@extends('squelette/app')

   @section('contenu2')


 {{-- <!-- reson_area_start  --> --}}
   <div class="container145">         
      <div class="popular_causes_area pt-120">
         <div class="section_title text-center mb-55">  
         <br>
            <h3><span id="titreSection">Article n°{{ $id }}</span></h3>
        </div>

         <div class="container">
            <div class="enFlexRow">
              
               <div class="row">                      
                  <div class="single_cause">
                     <div class="thumb">
                        <img  src="{{ asset('img/IMGarticle/'.$articleImage['imagesarticle'])}}" alt="">

                     </div>
                     <div class="causes_content">
                        <h4 class=""> {{ $article['titreArticle'] }} </h4>

                     <p>{!! $article['texte'] !!}</p>


                     </div>
                  </div>  
               </div>       
            </div>
         </div>
    
                  {{-- ===============COMMENTAIRE AREA=============== --}}
               
                  <h4>Laisser Un Commentaire</h4>
                  <form class="form-contact comment_form" action="#" id="commentForm">
                     <div class="row">
                        <div class="col-12">
                           <div class="form-group">
                              <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9"
                                 placeholder="Ecrire un Commentaire"></textarea>
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-group">
                              <input class="form-control" name="name" id="name" type="text" placeholder="Nom">
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-group">
                              <input class="form-control" name="email" id="email" type="email" placeholder="Email">
                           </div>
                        </div>
                     </div>
            <div class="form-group">
   <button type="submit" class="button button-contactForm btn_1 boxed-btn">Publier Message </button>
            </div>
         </form>
      </div>
   </div>

@endsection