@extends('layouts.master')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Edição - Vaga - {{$data->title}}</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <br />
            @include('helpers.messages')
            <form method="POST" action="{{url('/dashboard/stores/update/'.$data->id)}}">
            {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">Título da Vaga <span class="required">*</span></label>
                    <input name="title"  value="{{$data->title}}" type="text" class="form-control" id="name" placeholder="Nome">
                </div>
                <div class="form-group">
                    <label for="description">Descrição <span class="required">*</span></label>
                    <textarea 
                        name="description" 
                        class="form-control" 
                        rows="6"
                        id="description" 
                        placeholder="Descrição">{{$data->description}}</textarea>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="status">Status <span class="required">*</span></label>
                        <select name="status" value="{{$data->status}}" class="form-control" id="status">
                            <option value="">Selecione</option>
                            <option value="1" {{$data->status ? 'selected' : ''}}>Ativo</option>
                            <option value="0" {{$data->status ? '' : 'selected'}}>Desativado</option>
                        </select>
                    </div>
                    <div class="col">
                        <label for="begin">Início de Publicação <span class="required">*</span></label>
                        <input name="begin" value="{{$data->begin}}"  type="date" class="form-control" id="begin">
                    </div>
                    <div class="col">
                        <label for="end">Fim de Publicação <span class="required">*</span></label>
                        <input name="end" value="{{$data->end}}" type="date" class="form-control" id="end" >
                    </div>
                </div>
                <br />
                <div class="row">
                    <div class="col-md-6">
                    <a href="{{url('/dashboard/jobs')}}" class="btn btn-warning">Cancelar</a>
                    </div>
                    <div class="col-md-6 text-right">
                        <button type="submit" class="btn btn-success">Salvar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection 