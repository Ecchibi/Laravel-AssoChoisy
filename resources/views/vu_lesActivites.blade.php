  @extends('squelette/app') <!-- jsais pas comme extend dun fichier qui extend deja un autre  -->
    @section('contenu3')
  <!-- reson_area_start  -->
  <div class="reson_area section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb-55">
                        <h3><span>Activités</span></h3>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="single_reson">
                        <div class="thum">
                            <div class="thum_1">
                                <img src="{{asset('img/3activites/astronomie2.jpeg') }}" alt="">
                            </div>
                        </div>
                        <div class="help_content">
                           <h4>Astronomie</h4>  {{-- {{$CardArticle2['titreArticle']}} --}}
                            <p>{!! Str::words($CardArticle2['texte'],18) !!}</p>
                            <a href="{{ route('chemin_article',[$CardArticle2['id']])}}" class="read_more">Lire La Suite</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_reson">
                        <div class="thum">
                            <div class="thum_1">
                                <img src="{{asset('img/3activites/jardin8.jpeg') }}" alt="">
 {{-- il faut un image en long    {{asset('img/3activites/'.$CardArticle2['imagesarticle']) }} --}}
                            </div>
                        </div>
                        <div class="help_content">
                            <h4>Jardin-Partager</h4>
                            <p>{!! Str::words($CardArticle1['texte'],18) !!}</p>
                            <a href="{{ route('chemin_article',[$CardArticle1['id']])}}" class="read_more">Lire La Suite</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_reson">
                        <div class="thum">
                            <div class="thum_1">
                                <img src="{{asset('img/3activites/animation13.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="help_content">
                            <h4>Animations</h4>
                    
                            <p> {!! Str::words($CardArticle3['texte'],18) !!} </p>
                            <a href="{{ route('chemin_article',[$CardArticle3['id']]) }}" class="read_more">Lire La Suite</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- reson_area_end  -->
    @endsection