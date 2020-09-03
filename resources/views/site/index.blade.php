@extends('layouts.site')
@section('content')
     <!-- Slider Início -->
     <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="5000" style="border-bottom: 3px solid #d79122;">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <a href="{{url('/sobre')}}">
                        <img class="d-block w-100" src="images/home-slider/slider_1.png" alt="Grupo Vilarouca">
                    </a>
                </div>
                <div class="carousel-item">
                    <a href="https://api.whatsapp.com/send?phone=5588999010191&text=Ol%C3%A1!" target="_blank">
                        <img class="d-block w-100" src="images/home-slider/slider_8.png" alt="Atendimento">
                    </a>
                </div>
                <div class="carousel-item">
                    <a href="{{url('/arezzo')}}">
                        <img class="d-block w-100" src="images/home-slider/slider_4.png" alt="Arezzo">
                    </a>
                </div>
                <div class="carousel-item">
                    <a href="{{url('/o-boticario')}}">
                        <img class="d-block w-100" src="images/home-slider/slider_2.png" alt="O Boticário">
                    </a>
                </div>
                <div class="carousel-item">
                    <a href="{{url('/cacau-show')}}">
                        <img class="d-block w-100" src="images/home-slider/slider_3.png" alt="Cacau Show">
                    </a>
                </div>
                <div class="carousel-item">
                    <a href="{{url('/crocs')}}">
                        <img class="d-block w-100" src="images/home-slider/slider_6.png" alt="Crocs">
                    </a>
                </div>
                <div class="carousel-item">
                    <a href="{{url('/magrella')}}">
                        <img class="d-block w-100" src="images/home-slider/slider_7.png" alt="Magrella Collection">
                    </a>
                </div>
                <div class="carousel-item">
                    <a href="{{url('/tim')}}">
                        <img class="d-block w-100" src="images/home-slider/slider_5.png" alt="Tim">
                    </a>
                </div>
                <div class="carousel-item">
                    <a href="#">
                        <img class="d-block w-100" src="images/home-slider/slider_9.png" alt="FAJI">
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
        <section class = "mt-5 sectionMapas" style="border-bottom: 3px solid #d79122;">
            <div class = "container-fluid">
                <div class = "row align-items-center">
                    <div class="col-sm-8 offset-2">
                        <div class="row">
                            <div class = "col mx-auto text-center arezzo" style="height: 70px; align-items: center;display: flex;">
                                <img class="arezzoImg" src = "images/marcas/marcas/arezzo.png" style="width: 100px;">
                            </div>
                            <div class = "col mx-auto text-center oboticario" style="height: 70px; align-items: center;display: flex;">
                                <img class="oboticarioImg" src = "images/marcas/marcas/boticario.png" style="width: 100px;">
                            </div>
                            <div class = "col mx-auto text-center cacau-show" style="height: 70px; align-items: center;display: flex;">
                                <img class="cacau-showImg" src = "images/marcas/marcas/cacau-show.png" style="width: 100px;">
                            </div>
                            <div class = "col mx-auto text-center crocs" style="height: 70px; align-items: center;display: flex;">
                                <img class="crocsImg" src = "images/marcas/marcas/crocs.png" style="width: 100px;">
                            </div>
                            <div class = "col mx-auto text-center magrella" style="height: 70px; align-items: center;display: flex;">
                                <img class="magrellaImg" src = "images/marcas/marcas/magrella.png" style="width: 100px;">
                            </div>
                            <div class = "col mx-auto text-center tim" style="height: 70px; align-items: center;display: flex;">
                                <img class="timImg" src = "images/marcas/marcas/tim.png" style="width: 100px;">
                            </div>
                        </div>
                    </div>
                </div>
                <div class = "row">
                    <div class="col-md-1"></div>

                    <div class = "col-md-7 p-0" style = "height: 480px; margin-top: 85px;">
                        <div style="z-index: 0;position: absolute; margin-left: -60px;">
                            <img src="images/home-mapa/MAPA COMPLETO.png" style="width: 850px;" >
                        </div>
                        <div class = "row">
                            <!-- MAPA MARANHÃO -->                        
                            <div class="col-md-3" style="margin-top: 13;margin-left: 492;">
                                <div>
                                    <img class="maranhaoImg2" src="images/home-mapa/MAPA + MA + SMALL.png">
                                </div>
                            </div>

                            <!-- MAPA PIAUI -->
                            <div class="col-md-3 " style="margin-top: -147;margin-left: 549;">
                                <div>
                                    <img class="piauiImg2"  src="images/home-mapa/MAPA + PI + SMALL.png">
                                </div>
                            </div>

                            <!-- MAPA CEARA -->
                            <div class="col-md-3" style="margin-left: 650;margin-top: -150;">
                                <div>
                                    <img class="cearaImg2"  src="images/home-mapa/MAPA + CE + SMALL.png">
                                </div>
                            </div>

                            <!-- MAPA RIO GRANDE DO NORTE -->
                            <div class="col-md-3" style="margin-left: 712;margin-top: -135;">
                                <div>
                                    <img class="rnImg2" src="images/home-mapa/MAPA + RN + SMALL.png" width="82">
                                </div>
                            </div>

                            <div id="mapper">
                            <img 
                                src="images/home-mapa/MAPA SEM OS ESTADOS MAP SMALL.png" 
                                usemap="#image-map"
                            >
                            <map name="image-map">
                                <area target="" id="ma" alt="" title="" href="" coords="602,72,595,82,590,89,582,96,573,101,562,109,548,114,561,119,571,119,572,126,572,133,580,143,590,150,582,152,585,158,596,163,605,162,607,149,619,140,633,138,642,130,653,130,662,130,671,130,671,121,666,108,671,101,678,96,665,87,647,88,637,88,630,78,643,57,643,49,635,43,621,40,611,40,605,50" shape="poly">
                                <area target="" id="pi" alt="" title="" href="" coords="608,157,614,167,635,173,654,170,655,162,671,159,690,157,712,151,725,145,720,132,712,114,708,101,704,90,707,76,708,64,698,50,682,48,672,54,669,72,684,100,673,100,669,110,672,130,657,130,646,130,626,136,615,139" shape="poly">
                                <area target="" id="ce" alt="" title="" href="" coords="733,139,755,139,764,140,762,131,772,119,784,113,794,109,779,104,755,95,759,80,766,64,761,52,748,46,731,48,729,59,728,73,729,90,721,92,712,92,715,116,716,126" shape="poly">
                                <area target="" id="rn" alt="" title="" href="" coords="771,124,771,128,786,135,800,138,808,138,823,137,836,132,833,119,836,108,842,96,847,92,844,79,835,69,819,68,811,87,813,101,817,116,808,115,797,112,789,112" shape="poly">
                                </map>
                            </map>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-4">
                        <div class="card-info-map" style="height: 480px; padding: 10px; max-width: 100%; margin-top: 85px; margin-left: 50px; background: url('../images/area-atuacao-bg.png') no-repeat center center; background-size: cover;">
                            <div style="margin-left: 20px;">
                                <div class="row" style="margin-top: 50;">
                                    <div class="col">
                                        <span style="font-size: 35px; color: #fff; font-family: vilaRoucaLight;">Área de atuação</span>
                                    </div>
                                </div>
                                <div class="row" style="margin-top: 50;">
                                    <div class="col">
                                        <span style="font-size: 35px; color: #fff; font-family: vilaRoucaLight;">Presentes em<br /><strong style="font-family: vilaRoucaBold;">4</strong> estados</span>
                                    </div>
                                </div>
                                <div class="row" style="margin-top: 50;">
                                    <div class="col">
                                        <span style="font-size: 35px; color: #fff; font-family: vilaRoucaLight;">Com mais de<br /><strong style="font-family: vilaRoucaBold;">50</strong> PDVS</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--                    <style>.marcas .col-md-5, .marcas .col-md-4, .marcas .col-md-3, .marcas .col-md-2, .marcas .col-md-1{border: 1px solid}</style>-->

                     
                </div><!-- .row -->
                <!--
                <img src = "images/phone.png" style="top: 700px; left: 100px; height: 550px; position: absolute;  z-index: 1;">	
                -->
            </div><!-- .container-fluid -->
        </section>

        <section class = "mt-5 sectionMapasMobile section-maps" style="border-bottom: 3px solid #d79122;">
            <div class = "container-fluid" style="margin-top: 35px;">
                <div class="row">
                    <div class="col-6 col-md-3">
                        <div>
                            <img  class="maranhaoImg2" src = "images/home-mapa/MAPA + MA.png" width="80%">
                        </div>
                    </div>

                    <div class="col-6 col-md-3" >
                        <div class=" mt-1 ml-4">
                            <img  class="piauiImg2" src = "images/home-mapa/MAPA + PI.png" width="80%">
                        </div>
                    </div>

                    <div class="col-6 col-md-3">
                        <div class=" mt-1 ml-4">
                            <img  class="cearaImg2" src = "images/home-mapa/MAPA + CE.png" width="80%">
                        </div>
                    </div>

                    <div class="col-6 col-md-3">
                        <div class=" mt-1 ml-4">
                            <img  class="rnImg2" src = "images/home-mapa/MAPA + RN.png" width="80%">
                        </div>
                    </div>
                </div>	
                <br /><br /><br />
                <div class="container logos">
                    <div class = "row">
                        <div class="col-md-2 col-6">
                        <img class="arezzoImg" src = "images/marcas/marcas/arezzo.png" >
                        </div>
                        <div class="col-md-2 col-6">
                            <img class="oboticarioImg" src = "images/marcas/marcas/boticario.png" >
                            <br />
                        </div>
                        <div class="col-md-2 col-6">
                            <img class="cacau-showImg" src = "images/marcas/marcas/cacau-show.png" >
                        </div>
                        <div class="col-md-2 col-6">
                            <img class="crocsImg" src = "images/marcas/marcas/crocs.png" >
                        </div>
                        <div class="col-md-2 col-6">
                            <img class="magrellaImg" src = "images/marcas/marcas/magrella.png" >
                        </div>
                        <div class="col-md-2 col-6">
                            <img class="timImg" src = "images/marcas/marcas/tim.png" >
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12" style="height: 400px; margin-top: 35px; background: url('../images/area-atuacao-bg.png') no-repeat center center; background-size: cover;">
                        <div style="margin-left: 20px;">
                            <div class="row" style="margin-top: 50;">
                                <div class="col">
                                    <span style="font-size: 30px; color: #fff; font-family: vilaRoucaBold;"><u>Área de atuação</u></span>
                                </div>
                            </div>
                            <div class="row" style="margin-top: 50;">
                                <div class="col">
                                    <span style="font-size: 30px; color: #fff; font-family: vilaRoucaLight;">Presentes em <strong style="font-family: vilaRoucaBold;">4</strong> estados</span>
                                </div>
                                <div class="col">
                                    <span style="font-size: 30px; color: #fff; font-family: vilaRoucaLight;">Com mais de <strong style="font-family: vilaRoucaBold;">50</strong> PDVS</span>
                                </div>
                            </div>
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
                        @if (count($news) === 1)
                        <div style="justify-content: right; display: flex; width: 100%;">
                            <a href="{{url('/blog')}}" class="btn bg-blue-ui white read" role="button" style="margin-right: 15px;">Ver todas ></a>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog Fim -->
@endsection