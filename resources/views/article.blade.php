@extends('squelette/app')

   @section('contenu2')


                 {{-- <!-- reson_area_start  --> --}}
      
          <div class="popular_causes_area pt-120">
              <div class="col-lg-4 col-md-6">
               <h1> {{ $titreArticle['titreArticle'] }}</h1> 
                  <div class="single_reson">
             
                      <div class="thum">
                         
                          <div class="thum_1">
                           
                           <img class="img-fluid" src="{{ asset('img/IMGarticle/'.$articleImage['imagesarticle']) }}" alt="">


                          </div>
                      </div>
                      <div class="help_content">
                         
                          <p> {!! $article['texte'] !!} </p>
                       
                       
                       </div>
                     
                  </div>
               
              </div>
        
          </div>
         
      </div>
  
  <!-- reson_area_end  -->
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
                        {{-- <div class="col-12">
                           <div class="form-group">
                              <input class="form-control" name="website" id="website" type="text" placeholder="Website">
                           </div>
                        </div> --}}
                     </div>
                     <div class="form-group">
                        <button type="submit" class="button button-contactForm btn_1 boxed-btn">Publier Message </button>
                     </div>
                  </form>
               </div>
            </div>

@endsection