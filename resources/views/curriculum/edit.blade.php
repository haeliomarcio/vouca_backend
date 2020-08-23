@extends('layouts.master')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Visualização - Currículo - {{$data->name}}</h3>
        </div>
        <div class="card-body">
            <br />
            <form>
                <div class="form-row">
                    <div class="form-group col-md-{{$data->id === 1 ? '8' : '12'}}">
                        <label for="nome">Nome</label>
                        <input name="name" type="text" disabled value="{{$data->name}}" class="form-control" id="nome" placeholder="Digite seu nome" required>
                    </div>
                    <?php if($data->id === 1) { ?>
                        <div class="form-group col-md-{{$data->id === 1 ? '8' : '12'}}">
                            <label for="nome">Setor</label>
                            <input name="name" type="text" disabled value="{{$data->sector}}" class="form-control">
                        </div>
                    <?php } ?>
                    <div class="form-group col-md-3">
                        <label for="cpf">CPF</label>
                        <input name="cpf" type="text" disabled  value="{{$data->cpf}}" class="form-control" id="cpf" placeholder="000.000.000-00" required>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="telefone">Telefone</label>
                        <input name="telephone" type="text" disabled  value="{{$data->telephone}}" class="form-control" id="telefone" placeholder="Digite seu telefone" required>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="email" >E-mail</label>
                        <input  name="email" type="email" disabled value="{{$data->email}}" class="form-control" id="email" placeholder="Digite seu e-mail" required>
                    </div>
                    <div id="focus-cep" class="form-group col-md-3">
                        <label for="cep" >CEP</label>
                        <input  name="cep" type="text" disabled  value="{{$data->cep}}" class="form-control" id="cep" placeholder="00000000" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="rua" >Endereço</label>
                        <input name="address" type="text" disabled value="{{$data->address}}"  class="form-control" id="rua" placeholder="Digite a rua que você mora" required>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="numero" >Número</label>
                        <input name="number_address" type="text" disabled value="{{$data->number}}" class="form-control" id="numero" placeholder="Digite o número da sua residência" required>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="bairro">Bairro</label>
                        <input name="district" type="text" disabled  value="{{$data->district}}" class="form-control" id="bairro" placeholder="Digite o bairro que você mora" required>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="cidade">Cidade</label>
                        <input name="city" type="text" disabled  value="{{$data->city}}" class="form-control" id="cidade" placeholder="Digite a cidade que você mora" required>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="estado" >Estado</label>
                        <input disabled  value="{{$data->state}}" class="form-control">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="descricao" >Fale-nos sobre você</label>
                        <textarea  name="description" disabled  class="form-control" id="descricao" rows="5"> {{$data->description}}</textarea>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label for="anexo">Anexo</label>
                        <a href="{{url('/files/'.$data->document_path)}}" target="_blank">Currículo</a>
                    </div>
                </div>
                <br />
                <div class="row">
                    <div class="col-md-6">
                    <a href="{{url('/dashboard/curriculum')}}" class="btn btn-warning">Voltar</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection