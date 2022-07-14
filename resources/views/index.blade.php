@extends('squelette/app')

    @section('contenu1')
        @include('vu_banniere')
    @endsection


    @section('contenu2')
        @include('vu_articleVideo')
    @endsection


    @section('contenu3')
        @include('vu_lesActivites')
    @endsection