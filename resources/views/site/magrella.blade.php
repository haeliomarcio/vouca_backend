@extends('layouts.site')
@section('styles')
<style>
    h3 {
        color: #F36F2E !important;
    }

    h3::after {
        top: 114%;
        width: 65%;
        background-color: #F36F2E !important;
        display: none;
    }
</style>
@endsection
@section('content')
    <div class="wrap-magrella">

        <div class="container" style="background-color: #fff; margin-top: 100px;">
            <div class="container container-sobre">
                <h3 class="subtitulo centro"><strong>Magrella</strong></h3>

                    <div class="row centro" style="margin-bottom: 10px;">
                        <div style="width: 75%;">
                            <img class="img-fluid" src="images/lojas/magrella-loja.png">
                        </div>
                    </div>
                    
            
            </div>
        </div>
    </div>
@endsection