@extends('layouts.site')
@section('styles')
<style>
    h2 {
        color: #fff !important;
    }
    
    h2::after {
        background-color: #fff !important;
    }

    h3::after {
        top: 114%;
        width: 65%;
    }
</style>
@endsection
@section('content')
    <div class="wrap">
        <div class="content centro" style="margin-top: 30px;">
            <h2 class="titulo"><strong>Novidades</strong></h2>
        </div>

        <div class="container" style="background-color: #fff; margin-top: 100px;">
            <div class="container container-sobre">
                <h3 class="subtitulo" style="margin-bottom: 15px;"><strong>Título da postagem</strong></h3>
                <div class="data">
                    31.07.2020
                </div>

                <div class="centro">
                    <img src="images/no-pic.png" style="width: 500px; heigth: 500px;">
                </div>

                <p style="margin-top: 30px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed elementum, arcu ut iaculis mollis, augue nunc aliquam magna, eu lobortis felis odio ac augue. Praesent aliquet tellus erat, et rutrum nibh mattis vitae. Duis a nisi eros. Proin suscipit consequat sapien vitae ultricies. Aenean vel lacus imperdiet, ullamcorper est ac, vulputate nunc. Donec sagittis ac neque in lobortis. Suspendisse a dignissim sapien, ut euismod sapien. Sed vestibulum, velit eu viverra tristique, nisi ipsum maximus tellus, aliquam vulputate urna turpis ac eros. Duis faucibus turpis augue. Morbi leo ligula, fringilla in enim vel, facilisis finibus libero.</p>
                <p>Maecenas auctor turpis nunc, vel eleifend libero fermentum ac. Ut vitae blandit magna. Nam tellus nulla, fermentum et dictum vel, lobortis sit amet mi. In consectetur dui in gravida semper. Cras commodo nunc at orci cursus feugiat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Praesent dapibus nec magna in tristique. Etiam interdum tellus ac purus laoreet, bibendum convallis purus auctor. Proin interdum nulla vel arcu vestibulum molestie.</p>
                <p>Sed pulvinar velit in eros feugiat rhoncus. Nullam lacinia elit quis tortor tempus vulputate dignissim ac purus. Morbi nisi ligula, fringilla aliquam rhoncus nec, convallis commodo risus. In dapibus dolor quis purus iaculis, a interdum est commodo. Cras luctus fermentum ex at sodales. Vestibulum commodo magna vitae suscipit commodo. Duis at ornare urna.</p>
            </div>
        </div>
@endsection