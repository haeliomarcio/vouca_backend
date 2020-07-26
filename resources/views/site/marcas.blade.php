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
                            <a href="#">
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

                            <a href="#">
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

                            <a href="#">
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
                        </div>

                        <div class="row">
                            <a href="#">
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

                            <a href="#">
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

                            <a href="#">
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
                        </div>
                
            
            </div>
        </div>
    </div>
@endsection