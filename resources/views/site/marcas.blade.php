@extends('layouts.site')
@section('styles')
<style>
    h2 {
        color: #E05E3B !important;
    }
    h2::after {
        background-color: #E05E3B !important;
        display: none;
    }  
</style>
@endsection
@section('content')
    <div class="wrap">
        <div class="content" style="margin-top: 50px; margin-left: 90px">
            <h2 class="titulo"><strong>Nossas marcas</strong></h2>
        </div>

        <div class="container" style="background-color: #fff; margin-top: 50px;">
            <div class="container container-sobre container-marcas">
                <!--
                <h3 class="subtitulo"><strong>Marcas</strong></h3>
                -->
                        <div class="row">
                            <a href="{{url('/arezzo')}}">
                                <div class="col" style="margin: 2.5 2.5 2.5 2.5;">
                                    <div class="row">
                                        <div class="limite">
                                            <img class="marcas" src="images/marcas/lojas/arezzo-banner.png">
                                            <div class="overlay arezzo-color">
                                                <img class="marcas" src="images/marcas/lojas/arezzo-sem-fundo.png">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="{{url('/o-boticario')}}">
                                <div class="col" style="margin: 2.5 2.5 2.5 2.5;">
                                    <div class="row">
                                        <div class="limite">
                                            <img class="marcas" src="images/marcas/lojas/boticario-banner.png">
                                            <div class="overlay boticario-color">
                                                <img class="marcas" src="images/marcas/lojas/boticario-sem-fundo.png">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="{{url('/cacau-show')}}">
                                <div class="col" style="margin: 2.5 2.5 2.5 2.5;">
                                    <div class="row">
                                        <div class="limite">
                                            <img class="marcas" src="images/marcas/lojas/cacau-show-banner.png">
                                            <div class="overlay cacau-show-color">
                                                <img class="marcas" src="images/marcas/lojas/cacau-show-sem-fundo.png">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>

                        </div>

                        <div class="row">
                            <a href="{{url('/crocs')}}">
                                <div class="col" style="margin: 2.5 2.5 2.5 2.5;">
                                    <div class="row">
                                        <div class="limite">
                                            <img class="marcas" src="images/marcas/lojas/crocs-banner.png">
                                            <div class="overlay crocs-color">
                                                <img class="marcas" src="images/marcas/lojas/crocs-sem-fundo.png">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="{{url('/magrella')}}">
                                <div class="col" style="margin: 2.5 2.5 2.5 2.5;">
                                    <div class="row">
                                        <div class="limite">
                                            <img class="marcas" src="images/marcas/lojas/magrella-banner.png">
                                            <div class="overlay magrella-color">
                                                <img class="marcas" src="images/marcas/lojas/magrella-sem-fundo.png">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <a href="{{url('/tim')}}">
                                <div class="col" style="margin: 2.5 2.5 2.5 2.5;">
                                    <div class="row">
                                        <div class="limite">
                                            <img class="marcas" src="images/marcas/lojas/tim-banner.png">
                                            <div class="overlay tim-color">
                                                <img class="marcas" src="images/marcas/lojas/tim-sem-fundo.png">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>

                        </div>
                
            
            </div>
        </div>
    </div>
@endsection