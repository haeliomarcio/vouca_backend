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
                            <select name="state_id" id="state_id" class="form-control">
                                <option value="">Todos</option>
                                @foreach($states as $state)
                                    <option value="{{$state->id}}">{{$state->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="city_id">Cidade</label>
                            <select name="city_id" id="city_id" class="form-control">
                                <option value="">Todos</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="vaga">Vaga</label>
                            <select name="vaga" id="vaga" class="form-control">
                                <option value="">Todos</option>
                                @foreach($jobs as $job) 
                                    <option value="{{$job->id}}">{{$job->title}}</option>  
                                @endforeach
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
                    <tbody id="tabela">
                        <!-- @foreach($jobs as $job) 
                        <tr data-href="#">
                            <td style="color: #0a6961; font-weight: bold;">{{$job->title}}</td>
                            <td>{{$job->city_name}}/{{$job->state_name}}</td>
                        </tr>
                        @endforeach -->
                    </tbody>
                </table>
                {{ $jobs->links() }}
            </div>
        </div>
    </div>
@endsection
@section('scripts_bottom')
    <script>

        function listJobs() {
            var state_id = $("#state_id").val();
            var city_id = $("#city_id").val();
            var vaga = $("#vaga").val();
            $('#tabela').html('');
            var row = '';
            axios.get(`{{url('/list-jobs/')}}?state_id=${state_id}&city_id=${city_id}&vaga=${vaga}`)
            .then(function(response) {
                for (item of response.data.jobs.data) {
                    row += '<tr>';
                    row += '<td style="color: #0a6961; font-weight: bold;">';
                    row += `<a style="color: #0a6961;" href="{{url('/vaga/${item.id}')}}">${item.title}</a>`;
                    row += '</td>';
                    row += '<td>';
                    row += item.city_name + '/' + item.state_name;
                    row += '</td>';
                    row += '</tr>';
                }
                $('#tabela').html(row);
            })
            .catch(function(error){
                console.log(error);
            });
        }

        $(document).ready(function(){
            listJobs();
        });

        $("#city_id").change(function() {
            listJobs();
        });

        $("#vaga").change(function() {
            listJobs();
        });

        $("#state_id").change(function() {
            var state_id = $(this).val();
            listJobs();
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