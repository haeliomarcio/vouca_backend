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
        width: 65%;
    }
</style>
@endsection
@section('content')
    <div class="wrap">
        <div class="content centro" style="margin-top: 30px;">
            <h2><strong>Blog</strong></h2>
        </div>

        <div class="container" style="background-color: #fff; margin-top: 100px;">
            <div class="container container-sobre">
                <h3 class="subtitulo"><strong>Novidades</strong></h3>

                
            
            </div>
        </div>
    </div>
@endsection