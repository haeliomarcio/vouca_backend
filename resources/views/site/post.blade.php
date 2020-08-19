@extends('layouts.site')
@section('styles')
<style>
    h2 {
        color: #d79122 !important;
    }
    
    h2::after {
        background-color: #d79122 !important;
    }

    h3 {
        color: #000 !important;
    }

    h3::after {
        top: 114%;
        width: 65%;
    }
</style>
@endsection
@section('content')
    <div class="wrap">
        <div class="content" style="margin-top: 50px; margin-left: 90px;">
            <h2 class="titulo"><strong>Novidades</strong></h2>
        </div>

        <div class="container" style="background-color: #fff; margin-top: 100px;">
            <div class="container container-sobre">
                <h3 class="subtitulo" style="margin-bottom: 15px;"><strong>{{$new->title}}</strong></h3>
                <div class="data" style="color: 000;">
                    {{date('d.m.Y', strtotime($new->publish))}}
                </div>

                <div class="centro">
                    <img src="{{url('/files/'.$new->image_path)}}" style="width: 500px; heigth: 500px;">
                </div>
                <p style="margin-top: 30px;">{!! $new->description !!}</p>
            </div>
        </div>
@endsection