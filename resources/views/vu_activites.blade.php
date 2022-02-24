@extends('squelette/app')

   @section('contenu2')
 
    {{--  
      -> ENLEVER TOUT LE PHP et mettre du BLADE 
   --}}
          
 {{-- -------------------- ACTIVITES ASTRONOMIE/Jardin/Animation -------------------------------}}
            {{-- @php 

               use App\models\Article;
               // $req = Article::where('id','=',2)->first();
               // $req = Article::find(2);
                $req = Article::where('id','=',2);
               dd(['articles'=>$req]);

            @endphp
             --}}

 {{--  bradcam_area_start  --}}

                          
                                 
                           
<div class="bradcam_area breadcam_bg overlay d-flex align-items-center justify-content-center" style="background-image: url('{{asset('img/banner/'.$banImage['nomimage'])}}'); " > 
   
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
 {{--  bradcam_area_end  --}}


       {{-- ============================= Blog Area =============================--}}
   {{-- <section class="blog_area single-post-area section-padding">
      <div class="container">
        
         <div class="row">
            
            <div class="col-lg-8 posts-list">                          
               <div class="single-post">

                  @foreach($desArticles as $article)
         
                  <div class="feature-img"> --}}
                     {{-- image de l'article ↓ --}}
                     
                     {{-- <img class="img-fluid" src="{{ asset('img/IMGarticle/'.$article['imagesarticle'])}}" alt="">
                  </div>
                   --}}
                  {{-- <div class="blog_details">
                     <h2> {{ '-'.$titreArticle['titreArticle'] . '-'}}</h2>    --}}
                     {{--  faudras le recup sur base de données--}}
                     {{-- <p class="excert"> </p>
                     <p> En cours de publication </p> --}}
              
                      {{-- <div class="">  Css du bandeau de l'article --}}
                        {{-- <div class="">  --}}
                        
                           {{-- {!! Str::words($article['texte'],20)!!} --}}
                           {{-- @foreach($desArticles as $article) --}}
                           {{-- @php $point = explode(".",$article['texte']) @endphp  --}}
                           {{-- explode = tableau donc "$point[0]" --}}
                                  {{-- {!! $point[0].".".$point[1] !!}  --}}
                                 
                          
                            {{-- <a href="#"> <!-- ajouter route"get" parametré< --> --}}
                              {{-- <h4>voir </h4>  <br>  --}}
                           {{-- </a>
                           
                     </div>
                   
                  </div>
               
               </div>

               @endforeach --}}
        
               {{-- ========================================== --}}

                      {{-- <!-- reson_area_start  --> --}}
    <div class="reson_area section_padding">
      <div class="container">
          <div class="row justify-content-center">
              <div class="col-lg-6">
                  <div class="section_title text-center mb-55">
                      <h3><span>Nos Articles </span></h3>
                  </div>
              </div>
          </div>
          
          <div class="row justify-content-center">
           
              <div class="col-lg-4 col-md-6">
               @foreach($desArticles as $article)
                  <div class="single_reson">
                  
                      <div class="thum">
                          <div class="thum_1">
                           
                           <img class="img-fluid" src="{{ asset('img/IMGarticle/'.$article['imagesarticle'])}}" alt="">
                          </div>
                      </div>
                      <div class="help_content">
                          <h4> {{ '-'.$titreArticle['titreArticle'] . '-'}}</h4>
                          <p>{!! Str::words($article['texte'],20) !!}</p>
                          <a href="{{ route('chemin_activite',[2])}}" class="read_more">Read More</a>
                            {{-- nouveau chemin pour acceder a une pager qui afficher larticle --}}
                       </div>
                     
                  </div>
                  @endforeach 
              </div>
        
          </div>
         
      </div>
  </div> 
  <!-- reson_area_end  -->



               <div class="navigation-top">
                  <div class="d-sm-flex justify-content-between text-center">
                     <div class="col-sm-4 text-center my-2 my-sm-0">
                         {{--  <p class="comment-count"><span class="align-middle"><i class="fa fa-comment"></i></span> 06 Comments</p> --}}
                     </div>
                   
                     <ul class="social-icons">
                        <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                     </ul>
                  </div>
                  <div class="navigation-area">
                     <div class="row">
                        <div
                           class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
                           <div class="thumb">
                              <a href="#">
                                 <img class="img-fluid" src="" alt="">
                              </a>
                           </div>
                                
                            {{--  <div class="arrow">
                              <a href="#">
                                 <span class="lnr text-white ti-arrow-left"></span>
                              </a>
                           </div>
                           <div class="detials">
                              <p>Prev Post</p>
                              <a href="#">
                                 <h4>......</h4>
                              </a>
                           </div>
                        </div> --}}
                         {{--  <div
                           class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
                           <div class="detials">
                              <p>Next Post</p>
                              <a href="#">
                                 <h4>.......</h4>
                              </a>
                           </div> --}}
                           <div class="arrow">  {{-- Suivant "->"  --}}
                              <a href="#">
                                 <span class="lnr text-white ti-arrow-right"></span>
                              </a>
                           </div>
                           <div class="thumb">
                              <a href="#">
                                 <img class="img-fluid" src="" alt="">
                              </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>





                  {{-- ===============COMMENTAIRE AREA=============== --}}
               
                  <h4>Leave a Reply</h4>
                  <form class="form-contact comment_form" action="#" id="commentForm">
                     <div class="row">
                        <div class="col-12">
                           <div class="form-group">
                              <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9"
                                 placeholder="Write Comment"></textarea>
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-group">
                              <input class="form-control" name="name" id="name" type="text" placeholder="Name">
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-group">
                              <input class="form-control" name="email" id="email" type="email" placeholder="Email">
                           </div>
                        </div>
                        <div class="col-12">
                           <div class="form-group">
                              <input class="form-control" name="website" id="website" type="text" placeholder="Website">
                           </div>
                        </div>
                     </div>
                     <div class="form-group">
                        <button type="submit" class="button button-contactForm btn_1 boxed-btn">Send Message</button>
                     </div>
                  </form>
               </div>
            </div>
            <div class="col-lg-4">
               <div class="blog_right_sidebar">
                  
                  
                    {{-- ================ START_NEWSLETTER =================--}}
                  <aside class="single_sidebar_widget newsletter_widget">
                     <h4 class="widget_title">Newsletter</h4>
                     <form action="#">
                        <div class="form-group">
                           <input type="email" class="form-control" onfocus="this.placeholder = ''"
                              onblur="this.placeholder = 'Enter email'" placeholder='Enter email' required>
                        </div>
                        <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                           type="submit">Subscribe</button>
                     </form>
                  </aside>
                   {{-- ================ END_NEWSLETTER =================--}}
               </div>
            </div>
         </div>
      </div>
   </section>
   
               
    {{-- ========================== Blog Area end ==========================--}}

   @endsection