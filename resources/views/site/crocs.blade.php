@extends('layouts.site')
@section('styles')
<style>
    h3 {
        color: #444444 !important;
    }

    h3::after {
        top: 114%;
        width: 65%;
        background-color: #444444 !important;
        display: none;
    }
</style>
@endsection
@section('content')
    <div class="wrap-crocs">

        <div class="container" style="background-color: #fff; margin-top: 100px;">
            <div class="container container-sobre">
                <h3 class="subtitulo centro"><strong>Crocs</strong></h3>

                    <div class="row centro" style="margin-bottom: 10px;">
                        <div style="width: 75%;">
                            <img class="img-fluid" src="images/lojas/crocs-loja.png">
                        </div>
                    </div>
                    
            
            </div>
        </div>
    </div>
@endsection