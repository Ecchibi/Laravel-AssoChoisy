 @extends('squelette/app') 
    @section('contenu2')
    {{-- -----------------------------  vu_articleVideo  ----------------------------}}
    {{--  latest_activites_area_start  --}}
   <div class="latest_activites_area"  id="ancre1" >
          <div class=" video_bg_1 video_activite  d-flex align-items-center justify-content-center">
              <a class="popup-video" href="https://www.youtube.com/watch?v=DdovEinT0mo">  {{-- juste changer apres le v= --}}
                  <i class="flaticon-ui"></i>
              </a>
          </div>
          <div class="container">
              <div class="row justify-content-end">
                  <div class="col-lg-7">
                      <div class="activites_info">
                          <div class="section_title">
                              <h3> <span>Admirer le ciel  </span><br> </h3>
                                <h2>titre article</h2>
                          </div>
              {{-- a changer ↓ --}}
                          @foreach($articleRecent as $article)                         
                          <p class="para_1"> {{ $article }}  </p>                      
                          @endforeach
  
                          
                          <p class="para_2"> Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do 
                              eiusmod tempor incididunt  ut labore dolore magna aliqua. 
                          </p>
  
                          <a href="{{ route('chemin_activite',[2])}}" data-scroll-nav='1' class="boxed-btn4">voir plus</a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
       {{--  latest_activites_area_end  --}}
    @endsection
