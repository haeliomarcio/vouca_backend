@extends('layouts.site')
@section('styles')
<style>
    h2 {
        color: #d79122 !important;
    }
    
    h2::after {
        background-color: #d79122 !important;
    }

    h3 {
        color: #d79122 !important;
    }

    h3::after {
        top: 114%;
        width: 65%;
    }
</style>
@endsection
@section('content')
    <div class="wrap">
        <!--
        <div class="content" style="margin-top: 50px; margin-left: 90px;">
            <h2 class="titulo"><strong>Seja Grupo Vilarouca</strong></h2>
        </div>
        -->

        <div class="container" style="background-color: #fff; margin-top: 100px;">
            <div class="container container-sobre">
                <div style="border-left: 5px solid; border-color: #d79122;">
                    <h3 style="margin-left: 10px;" class="subtitulo"><strong>Vaga selecionada: {{$job->title}}</strong></h3>
                    <h3 style="margin-left: 10px;" class="subtitulo"><strong>Cidade: {{$job->city->name}}/{{$job->city->state->name}}</strong></h3>
                </div>
                <hr />
                <h3 class="subtitulo"><strong>Formulário</strong></h3>

                <div class="container" style="padding: 0 20px 0 20px;">
                    <form id="form" action="{{url('send-curriculum')}}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="nome">Nome</label>
                                <input name="name" type="text" class="form-control" id="nome" placeholder="Digite seu nome" required>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="telefone">CPF</label>
                                <input name="cpf" type="text" class="form-control" id="cpf" placeholder="000.000.000-00" required>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="telefone">Telefone</label>
                                <input name="telephone" type="text" class="form-control" id="telefone" placeholder="Digite seu telefone" required>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="email">E-mail</label>
                                <input  name="email" type="email" class="form-control" id="email" placeholder="Digite seu e-mail" required>
                            </div>
                            <div id="focus-cep" class="form-group col-md-3">
                                <label for="email">CEP</label>
                                <input  name="cep" type="text" class="form-control" id="cep" placeholder="00000000" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="rua">Endereço</label>
                                <input name="address" type="text" class="form-control" id="rua" placeholder="Digite a rua que você mora" required>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="numero">Número</label>
                                <input name="number" type="text" class="form-control" id="numero" placeholder="Digite o número da sua residência" required>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="bairro">Bairro</label>
                                <input name="district" type="text" class="form-control" id="bairro" placeholder="Digite o bairro que você mora" required>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="cidade">Cidade</label>
                                <input name="city" type="text" class="form-control" id="cidade" placeholder="Digite a cidade que você mora" required>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="estado">Estado</label>
                                <select name="state" id="estado" class="form-control" required>
                                    <option disabled selected>Escolher...</option>
                                    <option value="AC">AC</option>
                                    <option value="AL">AL</option>
                                    <option value="AM">AM</option>
                                    <option value="AP">AP</option>
                                    <option value="BA">BA</option>
                                    <option value="CE">CE</option>
                                    <option value="DF">DF</option>
                                    <option value="ES">ES</option>
                                    <option value="GO">GO</option>
                                    <option value="MA">MA</option>
                                    <option value="MT">MT</option>
                                    <option value="MS">MS</option>
                                    <option value="MG">MG</option>
                                    <option value="PA">PA</option>
                                    <option value="PB">PB</option>
                                    <option value="PR">PR</option>
                                    <option value="PE">PE</option>
                                    <option value="PI">PI</option>
                                    <option value="RJ">RJ</option>
                                    <option value="RN">RN</option>
                                    <option value="RO">RO</option>
                                    <option value="RS">RS</option>
                                    <option value="RR">RR</option>
                                    <option value="SC">SC</option>
                                    <option value="SE">SE</option>
                                    <option value="SP">SP</option>
                                    <option value="TO">TO</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="descricao">Fale sobre você</label>
                                <textarea  name="description" class="form-control" id="descricao" rows="5" required></textarea>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="anexo">Anexar curriculo</label>
                                <input name="file" type="file" class="form-control-file" id="anexo" required>
                            </div>
                        </div>
                        <br />
                        <button type="submit" class="btn btn-primary" style="background-color: #d79122; border-color: #d79122;">Enviar</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection

@section('scripts_bottom')
    <script>
        
        
        $(document).ready(function() {
            
            $("#cep").focusout(function() {
                var cep = $("#cep").val();
                
                    axios.get(`https://viacep.com.br/ws/${cep}/json/`)
                    .then(function(response) {
                        if(response.data.logradouro) {
                            $("#rua").val(response.data.logradouro);
                            $("#bairro").val(response.data.bairro);
                            $("#cidade").val(response.data.localidade);
                            $("#estado").val(response.data.uf);
                        }
                    })
                    .catch(function(error) {
                        console.log(error);
                    });
            });

            $("#cpf").focusout(function() {
                var cep = $("#cep").val();
                
                    axios.get(`https://viacep.com.br/ws/${cep}/json/`)
                    .then(function(response) {
                        if(response.data.logradouro) {
                            $("#rua").val(response.data.logradouro);
                            $("#bairro").val(response.data.bairro);
                            $("#cidade").val(response.data.localidade);
                            $("#estado").val(response.data.uf);
                        }
                    })
                    .catch(function(error) {
                        console.log(error);
                    });
            });
        });
        

    </script>
@endsection