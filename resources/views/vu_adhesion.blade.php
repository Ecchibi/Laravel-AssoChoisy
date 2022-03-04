@extends('squelette/app')
    @section('contenu2') 


<link type="text/css" rel="stylesheet" href="{{ asset('css/colorlib_style.css') }}" />


<div id="bookingAdhesion">
   <div class="container">
   <div class="backgroundform">

      <div class="TitreTelecharger">
         <img src="img/cropped-logo-nom-3.png" alt="logo d'une main">
         <p> Formulaire d'adhésion : </p>
         
      </div>
   
            

      <center>
         <a href="PDF/Adhesion_Assoc_LRHB_v2_1.pdf" target="_blank">  {{--  lien a modifier vers pdf modifiable = public/pdf/Adhesion-AssocChoisy.pdf --}}
            <button class="bn54">
               
               <span class="bn54span">Télécharger PDF</span>
            </button>
         </a>
      </center>

      
       <p class="text-light "  style="font-weight:bold;" >Renvoyer le formulaire ci-dessous</p>
         
         <form action="{{ route('chemin_uplaodFichier') }}" method="post" enctype="multipart/form-data">
                                                         {{--  enctype permet de dire quon vas dl un ficher --}}
            {{ csrf_field() }} 
                  
            <center> <div class="file-input">
                     <input type="file" id="file" class="file" name="pdf_File" accept="application/pdf">
                     <label for="file">Choisir un fichier</label>

                     @includeWhen($Success != null , 'msgSucces', ['Success' =>  $Success])

                     <input class="submitFile" type="submit" name="valider" value="Envoyer votre fichier" accept="application/pdf">
            </center>        
               
               </div> 
            </div>
         </form>
   </div>
</div>

   @endsection