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
                    <a href="{{url('/o-boticario')}}">
                        <img class="d-block w-100" src="images/home-slider/slider_2.png" alt="O Boticário">
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
                    <div class="col-sm-2"></div>
                    <div class="col-sm-8">
                        <div class="row">
                            <div class = "col mx-auto text-center arezzo" style="height: 70px; align-items: center;display: flex;">
                                <img class="arezzoImg" src = "images/marcas/marcas/arezzo.png" style="width: 100px;">
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
                            <div class = "col mx-auto text-center oboticario" style="height: 70px; align-items: center;display: flex;">
                                <img class="oboticarioImg" src = "images/marcas/marcas/boticario.png" style="width: 100px;">
                            </div>
                            <div class = "col mx-auto text-center tim" style="height: 70px; align-items: center;display: flex;">
                                <img class="timImg" src = "images/marcas/marcas/tim.png" style="width: 100px;">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2"></div>
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
                                    <img class="maranhaoImg2" src="images/home-mapa/MAPA + MA + SMALL.png" usemap="#image-ma">
                                    <map id="maranhaoImg2" name="image-ma">
                                        <area target="" alt="" title="" href="" coords="92,122,80,126,70,129,62,135,60,142,62,150,58,155,48,150,40,143,35,132,46,136,22,122,23,113,26,103,12,103,3,101,10,95,22,91,30,87,41,76,49,69,51,60,55,56,52,47,55,37,60,26,70,24,81,23,88,23,94,32,96,40,94,49,90,60,92,72,107,70,118,70,123,71,134,74,142,76,129,81,122,89,120,96,121,101,121,110,117,117,106,115,97,115" shape="poly">
                                    </map>
                                    <!-- <img class="maranhaoImg2" src = "images/home-mapa/MAPA + MA.png" width="148"> -->
                                </div>
                            </div>

                            <!-- MAPA PIAUI -->
                            <div class="col-md-3 " style="margin-top: -147;margin-left: 549;">
                                <div>

                                    <img class="piauiImg2"  src="images/home-mapa/MAPA + PI + SMALL.png" usemap="#image-pi">
                                    <map id="piauiImg2"  name="image-pi">
                                        <area target="" alt="" title="" href="" coords="79,137,62,135,56,134,48,139,44,146,33,146,23,146,13,144,2,141,2,134,2,127,6,118,15,112,24,110,33,107,40,104,50,105,58,105,64,97,63,87,66,78,70,74,76,70,68,59,63,45,64,36,69,27,79,22,86,22,96,22,104,33,106,39,104,53,97,58,99,64,105,70,106,76,108,84,109,89,110,98,117,102,120,107,117,111,105,124,114,117,112,126,98,126,92,131" shape="poly">
                                    </map>
                                    <!-- <img  class="piauiImg2" src = "images/home-mapa/MAPA + PI.png" width="122"> -->
                                </div>
                            </div>

                            <!-- MAPA CEARA -->
                            <div class="col-md-3" style="margin-left: 650;margin-top: -150;">
                                <div>
                                    <img class="cearaImg2"  src="images/home-mapa/MAPA + CE + SMALL.png" usemap="#image-ce">
                                    <map id="cearaImg2" name="image-ce">
                                        <area target="" alt="" title="" href="" coords="46,115,42,111,30,108,8,98,19,104,13,93,13,85,6,78,3,68,16,63,25,61,21,56,20,49,20,36,27,27,37,22,51,25,58,35,58,45,50,64,58,73,69,74,80,77,74,88,69,91,60,100,58,106,55,110" shape="poly">
                                    </map>
                                    <!-- <img  class="cearaImg2" src = "images/home-mapa/MAPA + CE.png" width="88"> -->
                                </div>
                            </div>

                            <!-- MAPA RIO GRANDE DO NORTE -->
                            <div class="col-md-3" style="margin-left: 712;margin-top: -135;">
                                <div>
                                    <img class="rnImg2" src="images/home-mapa/MAPA + RN + SMALL.png" width="82" usemap="#image-rn">
                                    <map id="rnImg2"  name="image-rn">
                                        <area target="" alt="" title="" href="" coords="37,90,28,90,21,87,12,85,3,85,7,77,14,72,21,68,28,69,36,71,42,71,53,69,49,60,41,47,40,33,48,26,57,23,70,23,76,31,81,38,80,51,74,61,66,72,70,81,62,85,50,85,41,87" shape="poly">
                                    </map>
                                    <!-- <img  class="rnImg2" src = "images/home-mapa/MAPA + RN.png" width="82"> -->
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-4" style="height: 480px; max-width: 28%; margin-top: 85px; margin-left: 50px; background: url('../images/area-atuacao-bg.png') no-repeat center center; background-size: cover;">
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
                    <div class="col-3">
                        <div>
                            <img  class="maranhaoImg2" src = "images/home-mapa/MAPA + MA.png" width="100%">
                        </div>
                    </div>

                    <div class="col-3">
                        <div class=" mt-1 ml-4">
                            <img  class="piauiImg2" src = "images/home-mapa/MAPA + PI.png" width="100%">
                        </div>
                    </div>

                    <div class="col-3">
                        <div class=" mt-1 ml-4">
                            <img  class="cearaImg2" src = "images/home-mapa/MAPA + CE.png" width="100%">
                        </div>
                    </div>

                    <div class="col-3">
                        <div class=" mt-1 ml-4">
                            <img  class="rnImg2" src = "images/home-mapa/MAPA + RN.png" width="100%">
                        </div>
                    </div>
                </div>	
                <br /><br /><br />
                <div class = "row">
                    <div class = "col mx-auto text-center oboticario" style="height: 70px; align-items: center;display: flex;">
                        <img class="oboticarioImg" src = "images/marcas/marcas/boticario.png" style="width: 100px;">
                    </div>
                    <div class = "col mx-auto text-center arezzo" style="height: 70px; align-items: center;display: flex;">
                        <img class="arezzoImg" src = "images/marcas/marcas/arezzo.png" style="width: 100px;">
                    </div>
                    <div class = "col mx-auto text-center tim" style="height: 70px; align-items: center;display: flex;">
                        <img class="timImg" src = "images/marcas/marcas/tim.png" style="width: 100px;">
                    </div>
                    <div class = "col mx-auto text-center crocs" style="height: 70px; align-items: center;display: flex;">
                        <img class="crocsImg" src = "images/marcas/marcas/crocs.png" style="width: 100px;">
                    </div>
                    <div class = "col mx-auto text-center magrella" style="height: 70px; align-items: center;display: flex;">
                        <img class="magrellaImg" src = "images/marcas/marcas/magrella.png" style="width: 100px;">
                    </div>
                    <div class = "col mx-auto text-center cacau-show" style="height: 70px; align-items: center;display: flex;">
                        <img class="cacau-showImg" src = "images/marcas/marcas/cacau-show.png" style="width: 100px;">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12" style="height: 400px; margin-top: 85px; background: url('../images/area-atuacao-bg.png') no-repeat center center; background-size: cover;">
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

@section('scripts_bottom')
<!-- OmniChat web-chat widget -->
<script>
    window.omnichatConfig = {
    retailerId: "ZthMnuoZs4"
    };
</script>
<script defer type="text/javascript">
    !function(){var t=document.createElement("script");t.type="text/javascript",t.defer=!0,t.src="https://static.omni.chat/web-chat/web-chat.min.js",t.onload=function(){OmniChatWebChat.init(window.omnichatConfig)};var e=document.getElementsByTagName("script")[0];e.parentNode.insertBefore(t,e)}();
</script>
<!-- OmniChat web-chat widget -->
@endsection