@extends('layouts.master')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Cadastro - Nova Loja</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <br />
            @include('helpers.messages')
            <form method="post" action="{{url('/dashboard/stores/store')}}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">Nome <span class="required">*</span></label>
                    <input name="name"  value="{{old('name')}}" type="text" class="form-control" id="name" placeholder="Nome">
                </div>
                <div class="form-group">
                    <label for="information">Informações <span class="required">*</span></label>
                    <textarea name="information"  value="{{old('information')}}" class="form-control" id="information"></textarea>
                </div>
                <div class="form-group">
                    <label for="address">Endereço <span class="required">*</span></label>
                    <input name="address"  value="{{old('address')}}" type="text" class="form-control" id="address" placeholder="Endereço">
                </div>
                <div class="row">
                    <div class="col">
                        <label for="city_id">Cidade <span class="required">*</span></label>
                        <select name="city_id" value="{{old('password')}}"  type="city" class="form-control" id="city_id">
                            <option></option>
                        </select>
                    </div>
                    <div class="col">
                        <label for="lat">Latitude <span class="required">*</span></label>
                        <input name="lat" value="{{old('lat')}}"  type="text" class="form-control" id="lat" placeholder="-13.929354846">
                    </div>
                    <div class="col">
                        <label for="lng">Longitude <span class="required">*</span></label>
                        <input name="lng" value="{{old('lng')}}" type="text" class="form-control" id="lng" placeholder="-9.98584184">
                    </div>
                </div>
                <br />
                <div class="row">
                    <div class="col-md-6">
                    <a href="{{url('/dashboard/stores')}}" class="btn btn-warning">Cancelar</a>
                    </div>
                    <div class="col-md-6 text-right">
                        <button type="submit" class="btn btn-success">Salvar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection 