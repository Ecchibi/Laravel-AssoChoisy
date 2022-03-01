 @extends('squelette/app') 
    @section('contenu2')

    {{-- -----------------------------  vu_articleVideo  ----------------------------}}

    {{--  latest_activites_area_start  --}}
   <div class="latest_activites_area"   >
          <div class=" video_bg_1 video_activite  d-flex align-items-center justify-content-center" id="ancre1" >
              <a class="popup-video" href="https://www.youtube.com/watch?v=DdovEinT0mo">  {{-- juste changer apres le v= --}}
                  <i class="flaticon-ui" ></i>
              </a>
          </div>
          <div class="container">
              <div class="row justify-content-end">
                  <div class="col-lg-7">
                      <div class="activites_info">
                          <div class="section_title">
                              <h3> <span>Admirer le ciel  </span><br> </h3>
                                <h2>{{ $TitreArticleRecent['titreArticle']  }}</h2>
                          </div>
              {{-- a changer ↓ --}}
                          @foreach($articleRecent as $article)                         
                          <p class="para_1"> {{ $article }}  </p>                      
                          @endforeach
  
                          
                          {{-- <p class="para_2"> </p> --}}

                          <a href="{{ route('chemin_activite',[2])}}"  class="boxed-btn4">voir plus</a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
       {{--  latest_activites_area_end  --}}
    @endsection
