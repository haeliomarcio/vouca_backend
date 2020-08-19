@extends('layouts.master')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Currículos</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    @include('helpers.form-search')
                </div>
                <!-- <div class="col-md-6 text-right">
                    <a href="{{url('/dashboard/stores/create')}}" class="btn btn-success">Novo Currículo</a>
                </div> -->
            </div>
            <br />
            @include('helpers.messages')
            
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>Nome</th>
                    <th>Vaga</th>
                    <th>Link</th>
                    <th style="width: 40px">Ações</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($list as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->job->title }} - {{$item->job->city->name}}/{{$item->job->city->state->name}}</td>
                            <td><a target="_blank" href="{{url('/files/'.$item->document_path)}}">Currículo</a></td>
                            <td style="width: 200px;" class="project-actions text-right">
                                <a class="btn btn-info btn-sm" href="{{url('/dashboard/curriculum/edit/'.$item->id)}}">
                                    <i class="fas fa-file"></i>
                                    Visualizar
                                </a>
                                <a id="confirmation-delete" data-info="{{url('/dashboard/curriculum/delete/'.$item->id)}}" class="btn btn-danger btn-sm" href="#">
                                    <i class="fas fa-trash"></i>
                                    Deletar
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <br />
            {{ $list->links() }}
        </div>
    </div>
@endsection 