@extends('layouts.site')
@section('content')
     <!-- Slider Início -->
     <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="10000">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <a href="sobre.html">
                        <img class="d-block w-100" src="images/home-slider/slider_1.png" alt="Grupo Vilarouca">
                    </a>
                </div>
                <div class="carousel-item">
                    <a href="o-boticario.html">
                        <img class="d-block w-100" src="images/home-slider/slider_2.png" alt="O Boticário">
                    </a>
                </div>
                <div class="carousel-item">
                    <a href="cacau-show.html">
                        <img class="d-block w-100" src="images/home-slider/slider_3.png" alt="Cacau Show">
                    </a>
                </div>
                <div class="carousel-item">
                    <a href="arezzo.html">
                        <img class="d-block w-100" src="images/home-slider/slider_4.png" alt="Arezzo">
                    </a>
                </div>
                <div class="carousel-item">
                    <a href="tim.html">
                        <img class="d-block w-100" src="images/home-slider/slider_5.png" alt="Tim">
                    </a>
                </div>
                <div class="carousel-item">
                    <a href="crocs.html">
                        <img class="d-block w-100" src="images/home-slider/slider_6.png" alt="Crocs">
                    </a>
                </div>
                <div class="carousel-item">
                    <a href="magrella.html">
                        <img class="d-block w-100" src="images/home-slider/slider_7.png" alt="Magrella Collection">
                    </a>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Próximo</span>
            </a>
        </div>
        <!-- Slider Fim -->

        <!-- Mapas Início -->
        <section class = "mt-5 sectionMapas section-maps">
            <div class = "container-fluid">

                <div class = "row">
                    <div class="col-md-2"></div>

                    <div class = "col-md-6 p-0" style = "height: 600px; background-image: url('images/home-mapas/BRASIL.png'); background-repeat: no-repeat; background-size: 100%; margin-top: 85px;">
                        <br/><br/><br/>

                        <!-- MAPA MARANHÃO E CEARÁ -->                        
                        <div class="row">
                            <div class="col-md-6"></div>
                            <div class="col-md-3 p-0">
                                <div>
                                    <img  class="maranhaoImg2" src = "images/home-mapas/maranhao.png" width="150">
                                </div>
                            </div>

                            <div class="col-md-3 p-0 ">
                                <div class=" mt-1 ml-4">
                                    <img  class="cearaImg2" src = "images/home-mapas/ceara.png" width="130">
                                </div>
                            </div>
                        </div>	

                        <!-- MAPA PIAUI -->
                        <div class="row">
                            <div class="col-md-7"></div>
                            <div class="col-md-3 " style="margin-top: -95px">
                                <div>
                                    <img  class="piauiImg2" src = "images/home-mapas/piaui.png" width="160">
                                </div>
                            </div>
                            <div class="col-md-2 p-0"></div>
                        </div>

                    </div>

                    <!--                    <style>.marcas .col-md-5, .marcas .col-md-4, .marcas .col-md-3, .marcas .col-md-2, .marcas .col-md-1{border: 1px solid}</style>-->

                    <div class = "col-md-4 marcas">
                        <div class = "row pt-4" style="margin-top: 200px">


                            <div class = "col-md-5 pt-3">
                                <div class="crocs" style="margin-top: 3px">
                                    <img class="crocsImg marcaAtivo" src = "images/marcas/hexagono/crocs.png" style="width: 100%;">
                                </div>	
                            </div>

                            <div class = "col-md-5">
                                <div class="arezzo" style="margin-top: -35px; margin-left: -50px;" > <!-- style="margin-top: -58px; margin-left: -50px;" -->
                                    <img class="arezzoImg marcaAtivo" src = "images/marcas/hexagono/arezzo.png" style="width: 78%;">
                                </div>							
                            </div>

                            <div class = "col-md-5">
                                <div class="cacau-show" style="margin-top: 20px">					
                                    <img class="cacau-showImg marcaAtivo" src = "images/marcas/hexagono/cacauShow.png" style="width: 100%;">
                                </div> 
                            </div>


                            <div class = "col-md-5">
                                <div class="oboticario" style="margin-top: -30px; margin-left: -50px;"><!-- style="margin-top: -55px; margin-left: -50px;"-->
                                    <img class="oboticarioImg marcaAtivo" src = "images/marcas/hexagono/oBoticario.png" style="width: 78%;">					
                                </div>	
                            </div>


                            <div class = "col-md-5">
                                <div class="tim" style="margin-top: 20px;">
                                    <img class="timImg marcaAtivo" src = "images/marcas/hexagono/tim.png" style="width: 100%; filter: drop-shadow(2px 2px 2px gray);">
                                </div>							
                            </div>


                            <div class = "col-md-5">
                                <div class="magrella" style="margin-top: -30px; margin-left: -45px;"><!-- style="margin-top: -58px; margin-left: -50px;" -->
                                    <img class="magrellaImg marcaAtivo" src = "images/marcas/hexagono/magrella.png"  style="width: 78%;">
                                </div>	
                            </div>

                        </div>
                    </div>  
                </div><!-- .row -->
                <img src = "images/phone.png" style="top: 700px; left: 100px; height: 550px; position: absolute;  z-index: 1;">	
            </div><!-- .container-fluid -->
        </section>

        <section class = "mt-5 sectionMapasMobile section-maps">
            <div class = "container-fluid" style="margin-top: 35px;">
                <div class="row">
                    <div class="col-4">
                        <div>
                            <img  class="maranhaoImg2" src = "images/home-mapas/maranhao.png" width="100%">
                        </div>
                    </div>

                    <div class="col-4">
                        <div class=" mt-1 ml-4">
                            <img  class="piauiImg2" src = "images/home-mapas/piaui.png" width="100%">
                        </div>
                    </div>

                    <div class="col-4">
                        <div class=" mt-1 ml-4">
                            <img  class="cearaImg2" src = "images/home-mapas/ceara.png" width="100%">
                        </div>
                    </div>
                </div>	

                <div class = "row">
                    <div class = "col-4">
                        <div class="crocs">					
                            <img class="crocsImg marcaAtivo" src = "images/marcas/hexagono/crocs.png" width="100%">
                        </div> 
                    </div>

                    <div class = "col-4">
                        <div class="oboticario">
                            <img class="oboticarioImg marcaAtivo" src = "images/marcas/hexagono/oBoticario.png" width="100%">					
                        </div>	
                    </div>

                    <div class = "col-4">
                        <div class="arezzo">
                            <img class="arezzoImg marcaAtivo" src = "images/marcas/hexagono/arezzo.png" width="100%">
                        </div>	
                    </div>

                    <div class = "col-4 pt-4">
                        <div class="magrella">
                            <img class="magrellaImg marcaAtivo" src = "images/marcas/hexagono/magrella.png" width="100%">
                        </div>							
                    </div>

                    <div class = "col-4 pt-4">
                        <div class="cacau-show">
                            <img class="cacau-showImg marcaAtivo" src = "images/marcas/hexagono/cacauShow.png" width="100%">
                        </div>							
                    </div>

                    <div class = "col-4 pt-4">
                        <div class="tim">
                            <img class="timImg marcaAtivo" src = "images/marcas/hexagono/tim.png" width="100%">
                        </div>							
                    </div>
                </div>
            </div><!-- .container-fluid -->
        </section>
        <!-- Mapas Fim -->

        <!-- Blog Início -->
        <section class="blog mt-5">
            <div class="container">
                <div class="content">
                    <div class="centro">
                        <h2 class="titulo">Fique por <br> <strong>dentro</strong></h2>
                    </div>
                    <br /><br /><br />

                    <div class="row">
                        @foreach($news as $new) 
                            <div class="col-md-4" >
                                <div class="item-box-blog" style="background: #ffffff;">

                                    <div class="item-box-blog-image">
                                        <!--Date-->
                                        <div class="item-box-blog-date bg-blue-ui white">
                                            <span class="mon">
                                                {{date('d.m.Y', strtotime($new->publish))}}

                                            </span>
                                        </div>
                                        <!--Image-->
                                        <figure>
                                            <img alt="Coronavírus" src="{{url('files/'.$new->image_path)}}">
                                        </figure>
                                    </div>
                                    
                                    <div class="item-box-blog-body">
                                        <!--Heading-->
                                        <div class="item-box-blog-heading">
                                            <h5 style="font">{{$new->title}}</h5>
                                        </div>
                                        <!--Data-->
                                        <!-- <div class="item-box-blog-data" style="padding: px 15px;">
                                            <p><i class="fa fa-user-o"></i> Admin</p>
                                        </div> -->
                                        <!--Text-->
                                        <div class="item-box-blog-text">
                                            <p>{!!$new->introduction!!}</p>
                                        </div>
                                        <div class="mt">
                                            <a href="{{url('blog/'.$new->slug_title)}}" class="btn bg-blue-ui white read">Ler mais...</a>
                                        </div>
                                        <!--Read More Button-->
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div style="justify-content: right; display: flex; width: 100%;">
                            <a href="{{url('/blog')}}" class="btn bg-blue-ui white read" role="button" style="margin-right: 15px;">Ver todas ></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog Fim -->
@endsection