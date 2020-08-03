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
            <h2 class="titulo"><strong>Trabalhe conosco</strong></h2>
        </div>

        <div class="container" style="background-color: #fff; margin-top: 100px;">
            <div class="container container-sobre">
                <h3 class="subtitulo"><strong>Seja Grupo Vilarouca</strong></h3>

                <div class="centro">
                    <img src="images/grupo-vilarouca-equipe.png" style="width: 100%;">
                </div>

                <p class="text-justify" style="margin-top: 20px; margin-left: 20px;">
                    Buscamos sempre novos talentos para compor nosso quadro de colaboradores. O crescimento pessoal e profissional vem através de experiências que são adquiridas de acordo com o surgimento de novas oportunidades. Acreditando nisso, seguimos há quase 40 anos no mercado oferecendo nosso melhor a todos os nossos clientes. <strong>#vemservilarouca</strong>
                </p>

                <h3 class="subtitulo" style="margin-top: 40px;"><strong>Nossas oportunidades</strong></h3>

                <form>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="state_id">Estado</label>
                            <select id="state_id" class="form-control">
                                <option value="">Todos</option>
                                @foreach($states as $state)
                                    <option value="{{$state->id}}">{{$state->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="city_id">Cidade</label>
                            <select id="city_id" class="form-control">
                                <option value="">Todos</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="vaga">Vaga</label>
                            <select id="vaga" class="form-control">
                                <option value="">Todos</option>
                                
                            </select>
                        </div>
                    </div>
                </form>

                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Vaga</th>
                            <th scope="col">Cidade/Estado</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr data-href="#">
                            <td style="color: #0a6961; font-weight: bold;">Analista Financeiro</td>
                            <td>Iguatu/CE</td>
                        </tr>
                        <tr data-href="#">
                            <td style="color: #0a6961; font-weight: bold;">Operador de Caixa</td>
                            <td>Cedro/CE</td>
                        </tr>
                        <tr data-href="#">
                            <td style="color: #0a6961; font-weight: bold;">Operador de Caixa</td>
                            <td>Iguatu/CE</td>
                        </tr>
                        <tr data-href="#">
                            <td style="color: #0a6961; font-weight: bold;">Vendedor</td>
                            <td>Quixeramobim/CE</td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection
@section('scripts_bottom')
    <script>
        $("#state_id").change(function() {
            var state_id = $(this).val();
            var options = '<option value="">Todos</option>';
            if(!state_id) {
                $('#city_id').html(options);
            }
            axios.get("{{url('/states/list-city-by-id')}}" + '/' + state_id)
            .then(function(response) {
                for (var i = 0; i < response.data.length; i++) {
                    options += '<option value="' +
                    response.data[i].id + '">' +
                    response.data[i].name + '</option>';
                }
                $('#city_id').html(options);
            })
            .catch(function(error){
                console.log(error);
            });
        });
    </script>
@endsection