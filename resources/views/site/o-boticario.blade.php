@extends('layouts.site')
@section('styles')
<style>
    h3 {
        color: #6FA287 !important;
    }

    h3::after {
        top: 114%;
        width: 65%;
        background-color: #6FA287 !important;
        display: none;
    }
</style>
@endsection
@section('content')
    <div class="wrap-boticario">

        <div class="container" style="background-color: #fff; margin-top: 100px;">
            <div class="container container-sobre">
                <h3 class="subtitulo centro"><strong>O Boticário</strong></h3>

                    <div class="row centro" style="margin-bottom: 10px;">
                        <div style="width: 75%;">
                            <img class="img-fluid" src="images/lojas/boticario-loja.png">
                        </div>
                    </div>
                    
            
            </div>
        </div>
    </div>
@endsection