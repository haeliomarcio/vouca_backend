@extends('layouts.site')
@section('styles')
<style>
    h2 {
        color: #d79122 !important;
    }
    h2::after {
        background-color: #d79122 !important;
    }  
</style>
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
                
                <p style="margin-top: 30px;">Em 1983, o casal José de Sá e Cleonice Vilarouca, decidem abrir seu primeiro negócio. A Magrella Decorações, uma pequena loja de artigos de decoração que ficava localizada no centro de Iguatu, interior do Ceará. Aos poucos a loja foi diversificando seus produtos, passando também a vender roupas e perfumes.</p>
                <p>Em 1990, apenas 3 anos após a criação da ABF (Associação Brasileira de Franchising – 1987), o casal decide vender sua casa própria, para abrir sua primeira franquia O Boticário, marca ainda pouco conhecida nacionalmente.</p>
                <p>Com foco no negócio e sempre engajando pessoas, nesse mesmo ano começou a expansão pelo Estado do CE, e em 2 anos já eram 6 lojas. Então em 1993, decidem alçar voos maiores, e começa a expansão para o Estado do PI, iniciando pela cidade de Parnaíba.</p>
                <p>A partir daí, não parou mais, vieram as marcas AREZZO, Cacau Show, TIM e CROCS. Em 2018, montou sua primeira usina solar, se tornando auto sustentável no Estado do CE, e em 2019 veio a segunda no Estado do PI.</p>
                <p>Incrível né? Assim, nasceu o Grupo Vilarouca. Hoje, multifranqueado, já somos mais de 50 pontos de vendas, operando Grandes Marcas, presente em 4 estados do Nordeste, e com muito orgulho, gerando mais de 350 empregos diretos.</p>

                <h2 class="subtitulo" style="margin-top: 50px;"><strong>Nossa marca</strong></h2>
                <p>O <strong>símbolo VILAROUCA</strong> é um importante elemento da identidade visual do grupo, contribuindo para transmitir os atributos de sua imagem. Na busca de um caminho criativo, de força conceitual, sua composição foi idealizada a partir da junção de <strong>três elementos:</strong><br /><strong>A letra V</strong>, inicial do nome Vilarouca; a <strong>conexão afetiva</strong> das marcas representada pela imagem do coração; e a árvore que remete a ideia da <strong>genealogia</strong> da família Vilarouca e de <strong>sua responsabilidade socioambiental.</strong></p>
                
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