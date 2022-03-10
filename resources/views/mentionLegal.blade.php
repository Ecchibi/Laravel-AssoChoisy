@extends('squelette/app')
   @section('contenu1')

<head>
   <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
     <div id="paragraph" style="font-family:'Helvetica Neue','Arial';"> 
<div class="bradcam_area breadcam_bg d-flex overlay align-items-center justify-content-center" style="background-image: url('{{ asset('img/banner/jadin-et-astronomie3.png') }}'); " > 

   <div class="container">
   <div class="row">
      <div class="col-xl-12">
         <div class="bradcam_text text-center">
   
         </div>
      </div>
  </div>  
</div>
</div>

   <div id="bookingVolotaire">
    
      <!-- our_volunteer_area_start  -->
<div class="our_volunteer_area mt-5">
      <div class="container">
         <div class="description">
       
<h1 class="font-weight-bold d-flex justify-content-center mb-5" style="font-size: 3.5rem;">
   Mentions légales
</h1>

<div class="barSection">
   <hr>
</div>


<h2 class="font-weight-bold mt-5" >Éditeur du site</h2> 
<p class="mb-5"> Le site <a href="https://www.hautes-bornes.fr/">https://www.hautes-bornes.fr/</a>  est édité par LES RESIDENTS DES HAUTES BORNES dit (RHB) ou Les Hautes-Bornes. Les Hautes-Bornes est une association reconnue d’utilité publique, dont le siège social est situé au 13 Rue de la Remise aux Faisans, 94600 Choisy-le-Roi.</p> 

<h2 class="font-weight-bold">Renseignements généraux :</h2>
<p class="mb-0"> Numéro SIREN : 840 188 734</p> 
<p class="mb-0"> Numéro SIRET : 840 188 734 00015</p> 
<p class="mb-0"> Code APE: Autres organisations fonctionnant par adhésion volontaire (9499Z)</p> 
<p class="mb-0"> Numéro de téléphone: +33 6 26 38 25 12</p>
<p class="mb-5"> Adresse de messagerie : leshautesbornes.choisyleroi@gmail.com</p> 

<h2 class="font-weight-bold">Direction de la publication</h2>
<p class="mb-5"> Le directeur de la publication est Alain Keyis, en sa qualité de Présidente de Les Hautes-Bornes.</p> 

<h2 class="font-weight-bold">Droits d’auteur</h2>
<p class="mb-5"> Ce site respecte le droit d’auteur. L'ensemble des contenus, pages, scripts, icônes ou sons de ce site sont la propriété exclusive de Les Hautes-Bornes. Toute production, reproduction ou représentation de ce site, en tout ou partie (textes, sons ou images), sur quelque support que ce soit est interdite. Le non-respect de cette interdiction constitue une contrefaçon pouvant engager la responsabilité civile et pénale du contrefacteur.</p> 

<p class="mb-5"> Il est strictement interdit d'utiliser ou de reproduire le nom "Les Hautes-Bornes" ou son logo, seuls ou associés, ainsi que les autres marques, modèles ou dessins enregistrés, qui sont la propriété deLes Hautes-Bornes, à quelque titre que ce soit et notamment à des fins publicitaires sans l'accord préalable écrit Les Hautes-Bornes.</p> 

<h2 class="font-weight-bold">Conditions d’utilisation</h2>
<p class="mb-5"> Les informations contenues dans ce site sont soumises à la loi française et sont fournies "telles quelles" sans garanties d'aucune sorte, ni explicites, ni tacites. Ces informations peuvent contenir des inexactitudes techniques ou des erreurs typographiques. Elles sont non contractuelles et sujettes à modification sans préavis.</p> 

<p class="mb-5"> En utilisant ce site, le visiteur reconnaît avoir eu la possibilité de prendre connaissance de cet avertissement.</p> 

<p class="mb-5"> Les Hautes-Bornes n'est pas responsable du contenu de tout autre site auquel vous pourriez avoir accès via le site Les Hautes-Bornes ou ses sites annexes.</p> 

<p class="mb-5"> Les Hautes-Bornes n’assure aucune garantie, expresse ou tacite, concernant tout ou partie de son site WEB. Les Hautes-Bornes a fait tous ses efforts pour s’assurer que les informations accessibles par l’intermédiaire de son site web sont exactes. Cependant, nous ne garantissons en aucune manière que ces informations soient exactes, complètes et à jour.</p> 

<p class="mb-5"> Il est expressément entendu par l'utilisateur de ce site qu'en aucun cas Les Hautes-Bornes ne peut être tenu responsable des dommages quelconques, directs ou indirects, matériels ou immatériels ou spéciaux, résultant notamment de la consultation et / ou de l'utilisation de ce site WEB ou d'autres sites qui lui sont liés, comme des utilisations d'informations textuelles, sonores ou visuelles qui auraient pu y être recueillies et notamment de tout préjudice financier ou commercial, de pertes de programmes ou de données dans son système d'information ou autre.</p>

<h2 class="font-weight-bold">Conception, réalisation et la maintenance</h2>
<p class="mb-5"> Le site a été conçu et réalisé par Ahmid Ait ouali, Bénédicte Loumou, Rémy Basile, Wayra Lopez, Youba Imakhlaf ,dont le siège social est situé le 13 Rue de la Remise aux Faisans, 94600 Choisy-le-Roi.</p> 


<h2 class="font-weight-bold">Hébergement</h2>
<p class="mb-5" > Le site <a href="https://www.hautes-bornes.fr/">https://www.hautes-bornes.fr/</a>  est hébergé par la société O2switch dont le siège social se situe 222 Boulevard Gustave-Flaubert - 63000 Clermont-Ferrand.</p> 



<div class="barSection">
   <hr>
</div>

<label for="">Pour approfondir :</label>
<a class="link-secondary" href="{{ route('chemin_confidentialite') }}">Politique de Confidentialité</a>

<div class="d-flex flex-row-reverse">
<div class="mb-1">
   <label for="">Partager cette page :</label>
   <div class="social_media_links d-none d-lg-block" >

       <a style="color:#1877F2; font-size:2.5em;" href="https://www.facebook.com/groups/leshautesbornes/" target="_blank">
           <i class="fa fa-facebook"></i>
       </a>
       <a style="color:rgb(219, 6, 6); font-size:2.5em;" href="https://www.youtube.com/channel/UChqQZLsbzK9K7MtUIbIV6kQ/featured" target="_blank">
           <i class="fa fa-youtube"></i>
       </a>
       <a style=" background: -webkit-linear-gradient(#fdf497 0%, #fdf497 5%, #fd5949 45%,#d6249f 60%,#285AEB 90%);
       -webkit-background-clip: text;
       -webkit-text-fill-color: transparent;; font-size:2.5em;" href="https://www.instagram.com/les_residents_des_hautesbornes/" target="_blank">
           <i class="fa fa-instagram"></i>
       </a>

   </div>
</div>
</div>          </div>
         </div>
      </div>
   </div>
</div>
</div>

@endsection