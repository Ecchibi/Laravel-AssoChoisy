<!doctype html>
<html class="no-js" lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Les-Hautes-Bornes</title>
    <meta name="description" content="Les Hautes Bornes; ">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('img/logoChoisyURL.png') }}">
   
   
    {{-- CSS here ↓ --}}
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }} "> 
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/gijgo.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  
</head>

<body>


    {{-- header-start --}}
    <header>
        <div class="header-area ">
            <div class="header-top_area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-md-12 col-lg-8">
                            <div class="short_contact_list">
                                <ul>
                <li><a href="tel:+33626382512"> <i class="fa fa-phone"></i> +33 6 26 38 25 12 </a></li>
                <li><a href="mailto:leshautesbornes.choisyleroi@gmail.com?subject=Renseigement"> 
                    <i class="fa fa-envelope"></i>leshautesbornes.choisyleroi@gmail.com</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-6 col-lg-4">
                            <div class="social_media_links d-none d-lg-block">

                                <a href="https://www.facebook.com/groups/leshautesbornes/" target="_blank">
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <a href="https://www.youtube.com/channel/UChqQZLsbzK9K7MtUIbIV6kQ/featured" target="_blank">
                                    <i class="fa fa-youtube"></i>
                                </a>
                                <a href="https://www.instagram.com/les_residents_des_hautesbornes/" target="_blank">
                                    <i class="fa fa-instagram"></i>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-3">
                            <div class="logo">
                                <a href="{{ route('chemin_accueil')}}"> {{-- a changer en 
                                {{ route('...')  }}--}}
                                    <img src="{{ asset('img/logo_Hautes_Bornes.png') }}" alt="logo du site">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9">
                            <div class="main-menu">
                                <nav>
                        <ul id="navigation"> 
            {{-- FAIRE DES LIEN AVEC LES ACTION(controlleur) ET UC(index) --}}
                                        <li><a href="{{ route('chemin_accueil')}}">Accueil </a></li>
                    <li><a href="{{ route('chemin_apropos')}}">à propos</a></li> 
                                    
                                        <li><a href="#">Activités <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                   
                                                <li><a href="{{ route('chemin_activite',[1])}}">Jardin-partager</a></li>
                                                <li><a href="{{ route('chemin_activite',[2])}}">Astronomie</a></li>
                                                <li><a href="{{ route('chemin_activite',[3])}}">Animations</a></li>

                                            </ul>
                                        </li>
{{-- 
                                        <li><a href="#">pages <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="elements.html">elements</a></li>
                                                <li><a href="Cause.html">Cause</a></li>
                                            </ul> --}}
                                        </li>
                                        
                            <li><a href="{{ route('chemin_contact') }}#map">Contact</a></li>
                            <li><a href="{{ route('chemin_reservation') }}#booking">Réservation</a></li>
                       </ul>
                                </nav>
                                <div class="Appointment">
                                    <div class="book_btn d-none d-lg-block">
                                        <a {{--data-scroll-nav='1'--}} href="{{ route('chemin_adherer') }}">ADHÉRER</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    {{-- header-end --}}
                         {{-- ca c extends ↑ --}}

      {{---------------------------------- end HAUT PAGE-------------------------------}}

{{-- Puis-je faire des include du header/footer?? au lieu de tout ce texte? --}}

    @yield('contenu1') {{-- image sui se superpose a la nav --}}
    @yield('contenu2') {{-- contenu 1 --}}
    @yield('contenu3') {{-- contenu 2 --}}
  

      {{---------------------------------- footer + JS -------------------------------}}
                         {{-- ca c extends ↓ --}}

   {{-- footer_start  --}}
   <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row justify-content-around ">
                    <div class="col-xl-4 col-md-6 col-lg-4 ">
                        <div class="footer_widget">
                            <div class="footer_logo">
                                <a href="#">
                                    <img src="{{ asset('img/logo_Hautes_Bornes.png') }}" alt="">
                                </a>
                            </div>
                            <p class="address_text">Les résidents des Hautes-Bornes, <br>Association Des Résidents.
                            </p>
                           
                            <div class="socail_links">
                                <ul>
                                    <li>
                                        <a href="https://www.facebook.com/groups/leshautesbornes/"  target="_blank">
                                            <i class="ti-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.youtube.com/channel/UChqQZLsbzK9K7MtUIbIV6kQ/featured"  target="_blank">
                                            <i class="ti-youtube"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/les_residents_des_hautesbornes/"  target="_blank">
                                            <i class="ti-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            


                        </div>
                    </div>
                    {{-- -----SI PARTENAIRE RAJOUTER------ --}}

                    {{-- <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Services
                            </h3>
                            <ul class="links">
                                <li><a href="#">Donate</a></li>
                                <li><a href="#">Sponsor</a></li>
                                <li><a href="#">Partner</a></li>

                            </ul>
                        </div>
                    </div>
                     --}}
                     <div class="col-xl-2 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Crédits
                            </h3>
                        <div class="contacts">
    <p><a class="link-secondary" href="{{ route('chemin_mentionLegal') }}">Mention-Légal</a>
     <a class="link-secondary" href="{{ route('chemin_confidentialite') }}">Confidentialite</a></p>

                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-xl-4 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                <a href="{{ route('chemin_contact') }}#map">Contacts</a> 
                            </h3>
                            <div class="contacts">
                                <p><a href="tel:+33626382512"> +33 6 26 38 25 12 </a><br>
                                <a href="mailto:leshautesbornes.choisyleroi@gmail.com?subject=Demande de Renseigement">leshautesbornes.choisyleroi@gmail.com</a><br>
                                <a href="https://goo.gl/maps/vbopGk6DvjTEgwfM6" target="_blank" >13 Rue de la Remise aux Faisans, 94600 Choisy-le-Roi </a> 
                                </p>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Top News
                            </h3>
                            <ul class="news_links">
                                <li>
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="{{ asset('img/news/news_1.png') }}" alt="">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <a href="#">
                                            <h4>School for African 
                                                Childrens</h4>
                                        </a>
                                        <span>Jun 12, 2019</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="{{ asset('img/news/news_2.png') }}" alt="">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <a href="#">
                                            <h4>School for African 
                                                Childrens</h4>
                                        </a>
                                        <span>Jun 12, 2019</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="d-flex justify-content-center">
                <div class="row">
                    <div class="bordered_1px "></div>
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                            <p>{{-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --}}
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> Les Hautes-Bornes | This template is made with <a href="https://colorlib.com" target="_blank"> <i class="ti-heart" aria-hidden="true"></i></a>
  {{-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --}}</p>
                        </p>
                    </div>  
                </div>
            </div>
        </div>
    </footer>
    {{-- footer_end  --}}

    {{-- link that opens popup --}}
    
    {{-- JS here --}}
    <script src="{{ asset('js/vendor/modernizr-3.5.0.min.js') }}"></script>
    <script src="{{ asset('js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/ajax-form.js') }}"></script>
    <script src="{{ asset('js/waypoints.min.js') }}"></script>
    <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/scrollIt.js') }}"></script>
    <script src="{{ asset('js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <script src="{{ asset('js/nice-select.min.js') }}"></script>
    <script src="{{ asset('js/jquery.slicknav.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/plugins.js') }}"></script>
    <script src="{{ asset('js/gijgo.min.js') }}"></script>
    {{--contact js--}}
    <script src="{{ asset('js/contact.js') }}"></script>
    <script src="{{ asset('js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('js/jquery.form.js') }}"></script>
    <script src="{{ asset('js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('js/mail-script.js') }}"></script>

    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>