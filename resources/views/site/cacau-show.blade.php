@extends('layouts.site')
@section('styles')
<style>
    h3 {
        color: #2D170F !important;
    }

    h3::after {
        top: 114%;
        width: 150px;
        background-color: #2D170F !important;
        display: none;
    }
</style>
@endsection
@section('content')
    <div class="wrap-cacaushow">

        <div class="container" style="background-color: #fff; margin-top: 100px;">
            <div class="container container-sobre">
                <h3 class="subtitulo centro"><strong>Cacau Show</strong></h3>

                    <div class="row centro" style="margin-bottom: 10px;">
                        <div style="width: 75%;">
                            <img class="img-fluid" src="images/lojas/cacau-show-loja.png">
                        </div>
                    </div>
                    
            
            </div>
        </div>
    </div>
@endsection