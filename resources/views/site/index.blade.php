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
                            <img src="images/home-mapa/MAPA COMPLETO.png" style="width: 850px;">
                        </div>
                        <div class = "row">
                            <!-- MAPA MARANHÃO -->                        
                            <div class="col-md-3" style="margin-top: 13;margin-left: 492;">
                                <div>
                                    <img  class="maranhaoImg2" src = "images/home-mapa/MAPA + MA.png" width="148">
                                </div>
                            </div>

                            <!-- MAPA PIAUI -->
                            <div class="col-md-3 " style="margin-top: -147;margin-left: 549;">
                                <div>
                                    <img  class="piauiImg2" src = "images/home-mapa/MAPA + PI.png" width="122">
                                </div>
                            </div>

                            <!-- MAPA CEARA -->
                            <div class="col-md-3" style="margin-left: 648;margin-top: -155;">
                                <div>
                                    <img  class="cearaImg2" src = "images/home-mapa/MAPA + CE.png" width="88">
                                </div>
                            </div>

                            <!-- MAPA RIO GRANDE DO NORTE -->
                            <div class="col-md-3" style="margin-left: 712;margin-top: -135;">
                                <div>
                                    <img  class="rnImg2" src = "images/home-mapa/MAPA + RN.png" width="82">
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