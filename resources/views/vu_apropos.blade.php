@extends('squelette/app')  
    @section('contenu2')             
                <!------------------------- A PROPOS  --------------------->
<link type="text/css" rel="stylesheet" href="{{ asset('css/colorlib_style.css') }}" />

<div id="bookingVolotaire">
        <!-- our_volunteer_area_start  -->
 <div class="our_volunteer_area section_padding">




        <div class="container">
            <center> <h3> Présentation De L'association</h3></center><br>
            <center><h4>Association Des Résidents Des Hautes-Bornes Choisy-Le-Roi </h4></center>
             
        
            <p><center> Nous sommes une jeune association, tout comme notre quartier et comme la plupart de ses habitants. 
                Elle a été créée dans un but d’améliorer notre environnement, tout en tissant des liens sociaux entre les résidents.</center></p><br>

            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb-55">
                        <h3><span>Nos volontaires</span></h3>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="single_volenteer">
                        <div class="volenteer_thumb">
                            <img src="img/volenteer/Alain.png" alt="">
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
                <div class="col-lg-4 col-md-6">
                    <div class="single_volenteer">
                        <div class="volenteer_thumb">
                            <img src="img/volenteer/membre.png" alt="">
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
                                <h4>Ahmid Ait Ouali </h4>
                                <p>Trésorier</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_volenteer">
                        <div class="volenteer_thumb">
                            <img src="img/volenteer/Alain.png" alt="">
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
                <a href="https://www.hautes-bornes.fr/wp-content/uploads/2020/04/Statuts_Association_Hautes_Bornes.pdf" target="_blank">>
                    <button class="bn54">
                      <span class="bn54span">PDF: statuts de l'association</span>
                    </button>
                  </a>
               
            </div>
        </div>
    </div>
</div>
    <!-- our_volunteer_area_end  -->
    @endsection