<html>
    <head>
        <title>{{config('app.name')}}</title>

        <meta charset="UTF-8">
        <meta name="description" content="Grupo Vilarouca">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" type="text/css" href="{{url('/styles/bootstrap.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{url('/styles/font-awesome.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{url('/styles/style.css')}}">

        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin=""/>
        <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js" integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew==" crossorigin=""></script>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        @yield('styles')
        @yield('scripts_top')

        <style>
            #menu li a{
                color: #ffffff;
            }
            #menu li.sociais a{
                float: left;
            }
            #menu li.sociais a i{
                font-size: 20px;
            }
            #menu li a::after { 
                content: "";
                width: 800px;
                height: 5px;
                border-width: 0 0.3em 0.25em 0;
                background-color: yellow;
                border-bottom: 3px solid yellow;
            }
            .leaflet-popup-content h4 {
                font-size: 16px;
                padding-top: 12px;
                line-height: 0px;
            }
            .leaflet-popup-content .info-address-map{
                color: #444;
                padding: 5px;
                text-align: center;
                font-weight: bold;
                border: 2px solid #d79122;
                border-radius: 5px;
            }
            
            .leaflet-popup-content  .info-fone-map{
                color: #444;
                text-align: center;
                padding: 5px;
                font-weight: bold;
                border: 2px solid #d79122;
                border-radius: 5px;
            }
            .info-address-map a, .info-fone-map a {
                color: #444;
            }

            h4 {
                color: #d79122 !important;
            }
            h2::after {
                background-color: #fff !important;
            }
            h3::after {
                top: 114%;
                width: 65%;
            }

        </style>
    </head>
<body>
    <div class="container-fluid" style="padding: 0;">
        
        <!-- Menu Início -->
        <nav class="navbar navbar-expand-lg navbar-light navegacao" style="background-color: #d79122; height: 120px;">
            <div class="container">
                <a href="{{url('/')}}" class="navbar-brand">
                    <img src="{{url('images/logo-nova-white.png')}}" height="70">

                </a>
                <button class="navbar-toggler custom" type="button" data-toggle="collapse" data-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Menu Colapso">  
                    <span class="navbar-toggler-icon text-light">
                        <i class="fa fa-navicon" style="color:#fff; font-size:28px;"></i>
                    </span>
                </button>

                <div id="menu" class="collapse navbar-collapse" style="background-color: #d79122; z-index: 1000;">
                    <ul class="navbar-nav ml-auto  nav-menu">
                        <!--
                        <li class="nav-item">
                            <a href="{{url('/')}}" class="nav-link font-weight-bold" style="font-size: 16px;">Início</a>
                        </li>
                        -->
                        <li class="nav-item">
                            <a href="{{url('/sobre')}}" class="nav-link font-weight-bold" style="font-size: 16px;">Grupo Vilarouca</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/marcas')}}" class="nav-link font-weight-bold" style="font-size: 16px;">Marcas</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/lojas')}}" class="nav-link font-weight-bold" style="font-size: 16px;">Lojas</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/trabalhe-conosco')}}" class="nav-link font-weight-bold" style="font-size: 16px;">Trabalhe Conosco</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/faji')}}" class="nav-link font-weight-bold" style="font-size: 16px;">FAJI</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/contato')}}" class="nav-link font-weight-bold" style="font-size: 16px;">Contato</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/logout')}}" class="nav-link font-weight-bold" style="font-size: 16px;">Sair</a>
                        </li>
                        <li class="nav-item sociais centro">
                            <a href="https://www.facebook.com/grupovilarouca" target="_blank" class="nav-link font-weight-bold" style="font-size: 16px;">
                                <i class="fab fa-facebook-square"></i>
                            </a>
                            &nbsp;
                            <a href="https://www.instagram.com/grupovilarouca" target="_blank" class="nav-link font-weight-bold" style="font-size: 16px;">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Menu Fim -->
        @yield('content')

        <br />
        <!-- Footer Início -->
        <div class="row footer-logos" style="width: 100%;">
            <div class="col-sm-4">
                <img src="/images/footer-bg.png" style="width: 100%;">
            </div>
            <div class="col-sm-8 centro" style="align-items: center;">
                <div class="row">
                    <div class = "col mx-auto text-center arezzo" style="height: 70px; align-items: center;display: flex;">
                        <img src="/images/marcas/marcas/arezzo.png" style="width: 100px;">
                    </div>
                    <div class = "col mx-auto text-center cacau-show" style="height: 70px; align-items: center;display: flex;">
                        <img src="/images/marcas/marcas/cacau-show.png" style="width: 100px;">
                    </div>
                    <div class = "col mx-auto text-center crocs" style="height: 70px; align-items: center;display: flex;">
                        <img src = "/images/marcas/marcas/crocs.png" style="width: 100px;">
                    </div>
                    <div class = "col mx-auto text-center magrella" style="height: 70px; align-items: center;display: flex;">
                        <img src = "/images/marcas/marcas/magrella.png" style="width: 100px;">
                    </div>
                    <div class = "col mx-auto text-center oboticario" style="height: 70px; align-items: center;display: flex;">
                        <img src = "/images/marcas/marcas/boticario.png" style="width: 100px;">
                    </div>
                    <div class = "col mx-auto text-center tim" style="height: 70px; align-items: center;display: flex;">
                        <img src = "/images/marcas/marcas/tim.png" style="width: 100px;">
                    </div>
                </div>
            </div>
        </div>
        <div class="complemento-footer"></div>
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 centro">
                        <div class="grupo">
                            <a class="logo" href="{{url('/')}}">Grupo Vilarouca</a>
                            <p class="copyright">
                                © Grupo Vilarouca. Todos os direitos reservados. 
                                <a href="/dashboard"><img src="images/cadeado.png" width="10px" /></a>
                            </p>
                            <p class="credits">
                                Desenvolvido por <a href="https://www.tecnologiagw.com" target="_blank">GW Tecnologia</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-6 centro">
                        <div class="grupo">
                            <!-- <p style="font-size: 18px; color: #ffffff;"><strong>MENU</strong></p> -->
                            <p class="menu-footer">
                                <a href="{{url('/')}}">INÍCIO</a><br />
                                <a href="{{url('/sobre')}}">GRUPO VILAROUCA</a><br />
                                <a href="{{url('/marcas')}}">MARCAS</a><br />
                                <a href="{{url('/lojas')}}">LOJAS</a><br />
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-6 centro">
                        <div class="grupo">
                        <p class="menu-footer">
                                <a href="{{url('/trabalhe-conosco')}}">TRABALHE CONOSCO</a><br />
                                <a href="{{url('/faji')}}">FAJI</a><br />
                                <a href="{{url('/contato')}}">CONTATO</a> <br />
                                <a href="{{url('/dashboard')}}">GESTOR</a>
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </footer>
        <!-- Footer Fim -->
    </div>
    

<script type="text/javascript" src="/js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="/js/popper.js"></script>
<script type="text/javascript" src="/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script type="text/javascript" src="/js/style.js"></script>
<script src="/js/jquery.mask.min.js"></script>
<script>
    var icon_arezzo = new LeafIcon({iconUrl: '/images/icons/arezzo.png'});
    var icon_boticario = new LeafIcon({iconUrl: '/images/icons/boticario.png'});
    var icon_cacauShow = new LeafIcon({iconUrl: '/images/icons/cacau-show.png'});
    var icon_crocs = new LeafIcon({iconUrl: '/images/icons/crocs.png'});
    var icon_magrella = new LeafIcon({iconUrl: '/images/icons/magrella.png'});
    var icon_tim = new LeafIcon({iconUrl: '/images/icons/tim.png'});

    function getIcons(name) {
        switch (name) {
        case 'O BOTICARIO':
            return icon_boticario;
            break;
        case 'CACAU SHOW':
            return icon_cacauShow;
            break;
        case 'AREZZO':
            return icon_arezzo;
            break;
        case 'MAGRELLA COLLECTION':
            return icon_magrella;
            break;
        case 'CROCS':
            return icon_crocs;
            break
        default:
            return icon_tim;
        }
    }
    
</script>
@yield('scripts_bottom')
</body>

<style>

	@media only screen and (min-width: 992px) {
        .sectionMapasMobile {
            display: none;
        }
    }
	@media only screen and (max-width: 992px) {
        .sectionMapas {
            display: none;
        }
    }
    
	.marcaInativo {filter: drop-shadow(2px 2px 2px gray) opacity(30%); transition: .2s}
	.marcaAtivo {filter: drop-shadow(2px 2px 2px gray); transition: .2s}
	
	
	.cearaImg2{transition: .4s;}
	/*.cearaImg2:hover{width: 70%}*/
	.cearaZoomIn2{width: 70%}
	.filterCeara2{filter: opacity(30%);}
	
	.maranhaoImg2{transition: .4s;}
	/*.maranhaoImg2:hover{width: 80%; margin-top: -30px; margin-bottom: 20px}*/
	.maranhaoZoomIn2{width: 80%;}
	.filterMaranhao2{filter: opacity(30%);}
	
	.piauiImg2{transition: .4s;}
	/*.piauiImg2:hover{width: 75%}*/
	.piauiZoomIn2{width: 75%}
    .filterPiaui2{filter: opacity(30%);}
    
    .rnImg2{transition: .4s;}
	/*.rnImg2:hover{width: 70%}*/
	.rnZoomIn2{width: 70%}
	.filterRN2{filter: opacity(30%);}

</style>

<script>

    $(document).ready(function () {

        /////////* CEARA *//////
        $('#mapper #ce').mouseenter(function () {
            $('.cacau-show').show('slow');
            $('.magrella').show('slow');
            $('.tim').show('slow');
            $('.maranhaoImg2').addClass('filterMaranhao2');
            $('.piauiImg2').addClass('filterPiaui2');
            $('.rnImg2').addClass('filterRN2');

        });
        $('#mapper #ce').mouseout(function () {
            $('.maranhaoImg2').removeClass('filterMaranhao2');
            $('.piauiImg2').removeClass('filterPiaui2');
            $('.rnImg2').removeClass('filterRN2');
        });


        ///////* MARANHAO *///////
        $('#mapper #ma').mouseenter(function () {
        //                                $('.cacau-show').hide('slow');
        //                                $('.magrella').hide('slow');
        //                                $('.tim').hide('slow');
            $('.cacau-show').addClass('marcaInativo');
            $('.magrella').addClass('marcaInativo');
            $('.tim').addClass('marcaInativo');

            $('.cearaImg2').addClass('filterCeara2');
            $('.piauiImg2').addClass('filterPiaui2');
            $('.rnImg2').addClass('filterRN2');
        });

        $('#mapper #ma').mouseout(function () {
        //                                $('.cacau-show').show('slow');
        //                                $('.magrella').show('slow');
        //                                $('.tim').show('slow');
            $('.cacau-show').removeClass('marcaInativo');
            $('.magrella').removeClass('marcaInativo');
            $('.tim').removeClass('marcaInativo');

            $('.cearaImg2').removeClass('filterCeara2');
            $('.piauiImg2').removeClass('filterPiaui2');
            $('.rnImg2').removeClass('filterRN2');
        });


        ///////* PIAUI *///////
        $('#mapper #pi').mouseenter(function () {
        //                                $('.cacau-show').hide('slow');
        //                                $('.magrella').hide('slow');
        //                                $('.tim').hide('slow');
            $('.cacau-show').addClass('marcaInativo');
            $('.magrella').addClass('marcaInativo');
            $('.tim').addClass('marcaInativo');

            $('.cearaImg2').addClass('filterCeara2');
            $('.maranhaoImg2').addClass('filterMaranhao2');
            $('.rnImg2').addClass('filterRN2');
        });

        $('#mapper #pi').mouseout(function () {
        //                                $('.cacau-show').show('slow');
        //                                $('.magrella').show('slow');
        //                                $('.tim').show('slow');
            $('.cacau-show').removeClass('marcaInativo');
            $('.magrella').removeClass('marcaInativo');
            $('.tim').removeClass('marcaInativo');


            $('.cearaImg2').removeClass('filterCeara2');
            $('.maranhaoImg2').removeClass('filterMaranhao2');
            $('.rnImg2').removeClass('filterRN2');
        });


        ///////* RIO-GRANDE-DO-NORTE *///////
        $('#mapper #rn').mouseenter(function () {
        //                                $('.cacau-show').hide('slow');
        //                                $('.magrella').hide('slow');
        //                                $('.tim').hide('slow');
            $('.cacau-show').addClass('marcaInativo');
            $('.magrella').addClass('marcaInativo');
            $('.tim').addClass('marcaInativo');
            $('.crocs').addClass('marcaInativo');
            $('.arezzo').addClass('marcaInativo');

            $('.cearaImg2').addClass('filterCeara2');
            $('.maranhaoImg2').addClass('filterMaranhao2');
            $('.piauiImg2').addClass('filterPiaui2');
        });

        $('#mapper #rn').mouseout(function () {
            $('.cacau-show').removeClass('marcaInativo');
            $('.magrella').removeClass('marcaInativo');
            $('.tim').removeClass('marcaInativo');
            $('.crocs').removeClass('marcaInativo');
            $('.arezzo').removeClass('marcaInativo');


            $('.cearaImg2').removeClass('filterCeara2');
            $('.maranhaoImg2').removeClass('filterMaranhao2');
            $('.piauiImg2').removeClass('filterPiaui2');
        });


        //////* CACAU-SHOW *////////
        $('.cacau-showImg').mouseenter(function () {
            $('.maranhaoImg2').addClass('filterMaranhao2');
            $('.piauiImg2').addClass('filterPiaui2');
            $('.rnImg2').addClass('filterRN2');

        });
        $('.cacau-showImg').mouseout(function () {
            $('.maranhaoImg2').removeClass('filterMaranhao2');
            $('.piauiImg2').removeClass('filterPiaui2');
            $('.rnImg2').removeClass('filterRN2');
        });
        
        //////* TIM *////////
        $('.timImg').mouseenter(function () {
            $('.maranhaoImg2').addClass('filterMaranhao2');
            $('.piauiImg2').addClass('filterPiaui2');
            $('.rnImg2').addClass('filterRN2');

        });
        $('.timImg').mouseout(function () {
            $('.maranhaoImg2').removeClass('filterMaranhao2');
            $('.piauiImg2').removeClass('filterPiaui2');
            $('.rnImg2').removeClass('filterRN2');
        });

        //////* MAGRELLA *////////
        $('.magrellaImg').mouseenter(function () {
            $('.maranhaoImg2').addClass('filterMaranhao2');
            $('.piauiImg2').addClass('filterPiaui2');
            $('.rnImg2').addClass('filterRN2');

        });
        $('.magrellaImg').mouseout(function () {
            $('.maranhaoImg2').removeClass('filterMaranhao2');
            $('.piauiImg2').removeClass('filterPiaui2');
            $('.rnImg2').removeClass('filterRN2');
        });

        //////* AREZZO *////////
        $('.arezzoImg').mouseenter(function () {
            $('.rnImg2').addClass('filterRN2');
        });
        $('.arezzoImg').mouseout(function () {
            $('.rnImg2').removeClass('filterRN2');
        });

        //////* CROCS *////////
        $('.crocsImg').mouseenter(function () {
            $('.rnImg2').addClass('filterRN2');
        });
        $('.crocsImg').mouseout(function () {
            $('.rnImg2').removeClass('filterRN2');
        });

        //////* O BOTICARIO *////////
        $('.oboticarioImg').mouseenter(function () {
            $('.rnImg2').addClass('filterRN2');
        });
        $('.oboticarioImg').mouseout(function () {
            $('.rnImg2').removeClass('filterRN2');
        });

        function getPopup(item) {
            var fone = item.information.replace('(', '').replace(')', '-').replace(' ', '');
            var popup = `<h4>${item.name}</h4>`;
            popup += `<p class="info-address-map">
                <a href="https://www.google.com.br/maps/place//@${item.lat},${item.lng},17z/" target="_blank">
                    ${item.address}
                </a>
            </p>`;
            popup += `<p class="info-fone-map">
                <a href="tel:${fone}">
                    ${item.information}
                </a>
            </p>`;
            return popup;
        }
    })
</script>
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
</html>