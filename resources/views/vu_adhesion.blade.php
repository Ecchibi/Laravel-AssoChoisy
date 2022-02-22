@extends('squelette/app')
   @section('contenu1')
      
   @endsection

    @section('contenu2') 
<!--Code a venir -->

<link type="text/css" rel="stylesheet" href="{{ asset('css/colorlib_style.css') }}" />


<div id="bookingAdhesion">
      <div class="our_volunteer_area section_padding">
      <center><a href="https://www.hautes-bornes.fr/wp-content/uploads/2020/04/Adhésion-Assoc-LRHB-v1-2.pdf" target="_blank">  {{--  lien a modifier vers pdf modifiable = public/pdf/Adhesion-AssocChoisy.pdf --}}
            <button class="bn54">
            <span class="bn54span">PDF: Formulaire d'adhésion</span>
            </button>
         </a></center>  
      </div>
       <p><center>Renvoyer le formulaire ici </center></p>
      
       <form action="{{ route('chemin_uplaodImage') }}" method="post">
         {{ csrf_field() }} 
            <center> <div class="file-input">
                  <input type="file" id="file" class="file" name="pdf_File">
                  <label for="file">Select file</label>
                  <input class="submitFile" type="submit" name="valider" value="upload">
               </div> </center> 
               
      </form>
</div>


   @endsection