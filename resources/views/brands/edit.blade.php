@extends('layouts.master')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Edição - Marca</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <br />
            @include('helpers.messages')
            <form method="POST" action="{{url('/dashboard/brands/update/'.$data->id)}}"  enctype="multipart/form-data">
            {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">Nome <span class="required">*</span></label>
                    <input name="name"  value="{{$data->name}}" type="text" class="form-control" id="name" placeholder="Marca">
                </div>
                <div class="form-group">
                    
                    <label for="image">Imagem <span class="required">*</span></label> <a href="{{ url($data->image) }}" target="_blank">Acessar Imagem</a>
                    <input name="image"  value="{{$data->image}}" type="file" class="form-control" id="image" placeholder="Marca">
                </div>
                
                <br />
                <div class="row">
                    <div class="col-md-6">
                    <a href="{{url('/dashboard/brands')}}" class="btn btn-warning">Cancelar</a>
                    </div>
                    <div class="col-md-6 text-right">
                        <button type="submit" class="btn btn-success">Salvar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection 