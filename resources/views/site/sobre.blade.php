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
                
                <p style="margin-top: 30px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed elementum, arcu ut iaculis mollis, augue nunc aliquam magna, eu lobortis felis odio ac augue. Praesent aliquet tellus erat, et rutrum nibh mattis vitae. Duis a nisi eros. Proin suscipit consequat sapien vitae ultricies. Aenean vel lacus imperdiet, ullamcorper est ac, vulputate nunc. Donec sagittis ac neque in lobortis. Suspendisse a dignissim sapien, ut euismod sapien. Sed vestibulum, velit eu viverra tristique, nisi ipsum maximus tellus, aliquam vulputate urna turpis ac eros. Duis faucibus turpis augue. Morbi leo ligula, fringilla in enim vel, facilisis finibus libero.</p>
                <p>Maecenas auctor turpis nunc, vel eleifend libero fermentum ac. Ut vitae blandit magna. Nam tellus nulla, fermentum et dictum vel, lobortis sit amet mi. In consectetur dui in gravida semper. Cras commodo nunc at orci cursus feugiat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent dapibus nec magna in tristique. Etiam interdum tellus ac purus laoreet, bibendum convallis purus auctor. Proin interdum nulla vel arcu vestibulum molestie.</p>
                <p>Sed pulvinar velit in eros feugiat rhoncus. Nullam lacinia elit quis tortor tempus vulputate dignissim ac purus. Morbi nisi ligula, fringilla aliquam rhoncus nec, convallis commodo risus. In dapibus dolor quis purus iaculis, a interdum est commodo. Cras luctus fermentum ex at sodales. Vestibulum commodo magna vitae suscipit commodo. Duis at ornare urna.</p>

                <h2 class="subtitulo" style="margin-top: 50px;"><strong>Nossa marca</strong></h2>
                <p>O <strong>símbolo VILAROUCA</strong> é um importante elemento da identidade visual do grupo, contribuindo para transmitir os atributos de sua imagem. Na busca de um caminho criativo, de força conceitual, sua composição foi idealizada a partir da junção de <strong>três elementos:</strong><br /><strong>A letra V</strong>, inicial do nome Vilarouca; a <strong>conexão afetiva</strong> das marcas representado pela imagem do coração; e a árvore que remete a ideia da <strong>genealogia</strong> da famíliaVilarouca.</p>
            </div>
        </div>
    </div>
@endsection