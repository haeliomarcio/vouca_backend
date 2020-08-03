@extends('layouts.site')
@section('styles')
<style>
    h2 {
        color: #fff !important;
    }
    
    h2::after {
        background-color: #fff !important;
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
            <h2 class="titulo"><strong>Blog</strong></h2>
        </div>

        <div class="container" style="background-color: #fff; margin-top: 100px;">
            <div class="container container-sobre">
                <h3 class="subtitulo"><strong>Novidades</strong></h3>
                @foreach($news as $new)
                    <div class="row">
                        <div class="col-md-12 col-xs-12">
                            <h1 class="subtitulo" style="margin-bottom: 15px">{{$new->title}}</h1>
                            <div class="wrapper">
                                <div class="box">
                                    <img style="float: left; margin-right: 10px; width: 150px; height: 150px;" src="{{url('/files/'.$new->image_path)}}">
                                </div>
                                <p style="margin:5px">{!!$new->introduction!!}</p>
                                <a href="{{url('/blog/'.$new->slug_title)}}" class="btn bg-blue-ui white read" role="button" style="float: right; margin-right: 20px;">Ler mais...</a>
                            </div>
                            <hr>
                        </div>
                    </div>
                    <br />
                @endforeach

                {{ $news->links() }}
            </div>
        </div>
    </div>
@endsection