@extends('layouts.site')
@section('styles')
<style>
    h2 {
        color: #fff;
    }
    
    h2::after {
        background-color: #fff;
    }

    h3::after {
        top: 114%;
        width: 100px;
    }
</style>
 @endsection
@section('content')
    <div class="wrap">
        <div class="content centro" style="margin-top: 30px;">
            <h2><strong>Nossas marcas</strong></h2>
        </div>

        <div class="container" style="background-color: #fff; margin-top: 100px;">
            <div class="container container-sobre">
                <h3 class="subtitulo"><strong>Marcas</strong></h3>

                <div class="row">
                    
                </div>
            
            </div>
        </div>
    </div>
@endsection