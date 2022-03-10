  @extends('squelette/app')
    @section('contenu1')
<!---------------------------------- BANNIERE ---------------------------->
<!-- slider_area_start -->
<div class="slider_area">
    <div class="single_slider  d-flex align-items-center slider_bg_1 overlay2">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="slider_text ">
                       
                        <h3> BIENVENUE
                            RÉSIDENTS DES
                            HAUTES-BORNES</h3>
                        <p>Association de quartier motiver à améliorer le quotidien<br> de tout les Choisyens,pour bien vivre ensemble.</p>
                        <a href="{{ route('chemin_apropos')}}" class="boxed-btn3">Qui sommes-nous ?
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
            <a class="button1" href="#ancre1"> 
                <img src="https://www.wwf.fr/themes/custom/wwf_main_theme/components/page-cover/images/scroll-icon.svg" alt=""> 
            </a>
<!-- slider_area_end -->
    @endsection