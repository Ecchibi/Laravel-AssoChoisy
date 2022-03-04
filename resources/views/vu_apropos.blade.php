@extends('squelette/app')  
    @section('contenu2')             
                <!------------------------- A PROPOS  --------------------->
<head> 
    <link type="text/css" rel="stylesheet" href="{{ asset('css/colorlib_style.css') }}" />
</head>


<div class="bradcam_area breadcam_bg overlay d-flex align-items-center justify-content-center" style="background-image: url('{{ asset('img/banner/BanApropos.jpg') }}'); " > 
                              
    <div class="container"
          <div class="row">
             <div class="col-xl-12">
                <div class="bradcam_text text-center">
                
                        <h3>Présentation De L'association</h3>
                </div>
             </div>
          
          </div>
    </div>
 </div>
                        <div class="section_title text-center mb-55">
                            <h3><span id="titreSection">Vivons bien ensemble</span></h3>
                        </div>

<div id="bookingVolotaire">
    
        <!-- our_volunteer_area_start  -->
 <div class="our_volunteer_area section_padding">

<div class="container">
    <div class="description">
            
        <h4 id="titre2">~Association Des Résidents Des Hautes-Bornes Choisy-Le-Roi~ </h4>
             
        
        <p> Nous sommes une jeune association, tout comme notre quartier et comme la plupart de ses habitants. </p>
        <p> Elle a été créée dans un but d’améliorer notre environnement, tout en tissant des liens sociaux entre les résidents.    <b>Texte à venir...</b>  </p>


    </div>
                
    <!-- ===================our_volunteer_area_end =============== -->


    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section_title text-center mb-55">
                    <h3><span id="titreSection2">Nos volontaires</span></h3>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
             <div class="col-lg-4 col-md-6 mb-5"> {{-- le mb-5 ajoute un margin-bottom --}}
                <div class="single_volenteer">
                    <div class="volenteer_thumb">
                        <img src="{{ asset('img/volenteer/Alain.png')}}" alt="">
                    </div>
                    <div class="voolenteer_info d-flex align-items-end">
                        <div class="social_links">
                            <ul>
                                <li>
                                    <a href="#"> <i class="fa fa-facebook"></i> </a>
                                </li>
                                <li>
                                    <a href="#"> <i class="fa fa-pinterest"></i> </a>
                                </li>
                                <li>
                                    <a href="#"> <i class="fa fa-linkedin"></i> </a>
                                </li>
                                <li>
                                    <a href="#"> <i class="fa fa-twitter"></i> </a>
                                </li>
                            </ul>
                        </div>
                        <div class="info_inner">
                            <h4>Alain Keyis</h4>
                            <p>President</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5">
                <div class="single_volenteer">
                    <div class="volenteer_thumb">
                        <img src="{{ asset('img/volenteer/Alain.png')}}" alt="">
                    </div>
                    <div class="voolenteer_info d-flex align-items-end">
                        <div class="social_links">
                            <ul>
                                <li>
                                    <a href="#"> <i class="fa fa-facebook"></i> </a>
                                </li>
                                <li>
                                    <a href="#"> <i class="fa fa-pinterest"></i> </a>
                                </li>
                                <li>
                                    <a href="#"> <i class="fa fa-linkedin"></i> </a>
                                </li>
                                <li>
                                    <a href="#"> <i class="fa fa-twitter"></i> </a>
                                </li>
                            </ul>
                        </div>
                        <div class="info_inner">
                            <h4>Thierry Simana</h4>
                            <p>Secrétaire</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-5">
                <div class="single_volenteer">
                    <div class="volenteer_thumb">
                        <img src="{{ asset('img/volenteer/Alain.png')}}" alt="">
                    </div>
                    <div class="voolenteer_info d-flex align-items-end">
                        <div class="social_links">
                            <ul>
                                <li>
                                    <a href="#"> <i class="fa fa-facebook"></i> </a>
                                </li>
                                <li>
                                    <a href="#"> <i class="fa fa-pinterest"></i> </a>
                                </li>
                                <li>
                                    <a href="#"> <i class="fa fa-linkedin"></i> </a>
                                </li>
                                <li>
                                    <a href="#"> <i class="fa fa-twitter"></i> </a>
                                </li>
                            </ul>
                        </div>
                        <div class="info_inner">
                            <h4>Anne Gallic</h4>
                            <p>Secrétaire Adjointe</p>
                        </div>
                    </div>
                </div>
            </div>
                    
            <div class="col-lg-4 col-md-6">
                <div class="single_volenteer">
                    <div class="volenteer_thumb">
                        <img src="{{ asset('img/volenteer/Alain.png')}}" alt="">
                    </div>
                    <div class="voolenteer_info d-flex align-items-end">
                        <div class="social_links">
                            <ul>
                                <li>
                                    <a href="#"> <i class="fa fa-facebook"></i> </a>
                                </li>
                                <li>
                                    <a href="#"> <i class="fa fa-pinterest"></i> </a>
                                </li>
                                <li>
                                    <a href="#"> <i class="fa fa-linkedin"></i> </a>
                                </li>
                                <li>
                                    <a href="#"> <i class="fa fa-twitter"></i> </a>
                                </li>
                            </ul>
                        </div>
                        <div class="info_inner">
                            <h4>Ahmed Benkhalifa</h4>
                            <p>Trésorier</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single_volenteer">
                    <div class="volenteer_thumb">
                        <img src="{{ asset('img/volenteer/Alain.png')}}" alt="">
                    </div>
                    <div class="voolenteer_info d-flex align-items-end">
                        <div class="social_links">
                            <ul>
                                <li>
                                    <a href="#"> <i class="fa fa-facebook"></i> </a>
                                </li>
                                <li>
                                    <a href="#"> <i class="fa fa-pinterest"></i> </a>
                                </li>
                                <li>
                                    <a href="#"> <i class="fa fa-linkedin"></i> </a>
                                </li>
                                <li>
                                    <a href="#"> <i class="fa fa-twitter"></i> </a>
                                </li>
                            </ul>
                        </div>
                        <div class="info_inner">
                            <h4>Ahmid Ait Ouali</h4>
                            <p>Trésorier Adjoint</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single_volenteer">
                    <div class="volenteer_thumb">
                        <img src="{{ asset('img/volenteer/Alain.png')}}" alt="">
                    </div>
                    <div class="voolenteer_info d-flex align-items-end">
                        <div class="social_links">
                            <ul>
                                <li>
                                    <a href="#"> <i class="fa fa-facebook"></i> </a>
                                </li>
                                <li>
                                    <a href="#"> <i class="fa fa-pinterest"></i> </a>
                                </li>
                                <li>
                                    <a href="#"> <i class="fa fa-linkedin"></i> </a>
                                </li>
                                <li>
                                    <a href="#"> <i class="fa fa-twitter"></i> </a>
                                </li>
                            </ul>
                        </div>
                        <div class="info_inner">
                            <h4>Ahmid Ait Ouali</h4>
                            <p>Volunteer</p>
                        </div>
                    </div>
                </div>
            </div>
            



        </div> 
    </div> 
</div>

<a id="btnStatuts" href="PDF/Statuts_Association_Hautes_Bornes.pdf" target="_blank">
    <button class="bn54" >
        <span class="buttonspan">PDF: statuts de l'association</span>
    </button>
</a>    
<!-- our_volunteer_area_end  -->

    @endsection