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
@section('scripts_top')
    <script src="{{url('js/dragscroll-master/dragscroll.js')}}"></script>
@endsection
@section('content')
    <div class="wrap">
        <div class="content" style="margin-top: 50px; margin-left: 90px">
            <h2 class="titulo"><strong>O Grupo Vilarouca</strong></h2>
        </div>

        <div class="container" style="background-color: #fff; margin-top: 50px;">
            <div class="container container-sobre">
                <!--
                <h3 class="subtitulo"><strong>Sobre nós</strong></h3>
                -->
                
                <!--
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe src="https://www.youtube.com/embed/awoebbWZCmw" allowfullscreen="" width="100%" height="100%" frameborder="0"></iframe>
                </div>
                -->
                <div class="centro">
                    <img src="images/simbolo-grupo-vilarouca.png" style="width: 100%;">
                </div>
                
                <p style="margin-top: 30px;">Em 1983, o casal José de Sá Vilarouca e Cleonice Vilarouca, decidem vender sua casa, que era o seu único bem, para abrir seu primeiro negócio. A Magrella Decorações, uma pequena loja de artigos de decoração que ficava localizada no centro de Iguatu, interior do Ceará. Aos poucos a loja foi diversificando seus produtos, passando também a vender roupas e perfumes.</p>
                <p>Em 1990, apenas 3 anos após a criação da ABF (Associação Brasileira de Franchising – 1987), mostrando sua visão empreendedora, abrem a primeira franquia O Boticário, marca ainda pouco conhecida nacionalmente.</p>
                <p>Com foco no negócio e sempre engajando pessoas, em poucos meses, começaram a expansão pelo Estado do CE, e em 2 anos já eram 6 lojas. Então em 1993, decidem alçar voos maiores, e começa a expansão para o Estado do PI, iniciando pela cidade de Parnaíba.</p>
                <p>A partir daí, não parou mais, vieram as marcas AREZZO, Cacau Show, TIM e CROCS. Em 2018, montou sua primeira usina solar, se tornando auto sustentável no Estado do CE, e em 2019 veio a segunda no Estado do PI.</p>
                <p>Incrível né? Assim, nasceu o Grupo Vilarouca. Hoje, multifranqueado, já somos mais de 50 pontos de vendas, operando Grandes Marcas, presente em 4 estados do Nordeste, e com muito orgulho, gerando cerca de 400 empregos diretos.</p>

                <h2 class="subtitulo" style="margin-top: 50px;"><strong>Nossa marca</strong></h2>
                <div class="centro">
                    <img src="images/simbolo-grupo-vilarouca-2.png" style="width: 100%;">
                </div>
                <br />
                <p>A <strong>nova identidade do grupo Vilarouca</strong> é a congruência entre os elementos que durante toda essa jornada se provaram os mais importantes para o sucesso do Grupo como um todo: a <strong>solidificação</strong> de um grupo que só aumenta a cada ciclo, o <strong>escudo</strong> que referencia a solidez da família e por fim o claro senso de <strong>liderança</strong> que está presente na busca do próximo voo! Esse três elementos estão reunidos em um escudo que destaca uma comunidade de pessoas com o mesmo objetivo.</p>
                
                <!-- TIMELINE -->
                <h2 class="subtitulo" style="margin-top: 50px;"><strong>Timeline</strong></h2>
                @include('site.timeline2')


            </div>
        </div>
    </div>
@endsection
@section('scripts_bottom')
    <script>
        var position = 0;
        $('#prevTimeline').click(function() {
            var ele = document.getElementById("timeline-horizontal");
            if(ele.scrollLeft) {
                position = ele.scrollLeft;
                $('#timeline-horizontal').animate({scrollLeft: position - 500}, 800);
            }
        });
        $('#nextTimeline').click(function() {
            var ele = document.getElementById("timeline-horizontal");
            if((ele.scrollLeft + 100) < ele.scrollWidth) {
                position = ele.scrollLeft;
                $('#timeline-horizontal').animate({scrollLeft: position + 500}, 800);
            }
        });
    </script>
@endsection