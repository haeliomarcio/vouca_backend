@extends('layouts.master')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Usuários</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            
            <!-- @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif -->

        <table class="table table-bordered">
            <thead>
            <tr>
                <th style="width: 10px">#</th>
                <th>Name</th>
                <th>E-mail</th>
                <th style="width: 40px">Ações</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td style="width: 180px;" class="project-actions text-right">
                            <a class="btn btn-info btn-sm" href="{{url('/dashboard/usuarios/edit/'.$user->id)}}">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Editar
                            </a>
                            <a class="btn btn-danger btn-sm" href="{{url('/dashboard/usuarios/delete/'.$user->id)}}">
                              <i class="fas fa-trash">
                              </i>
                              Deletar
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    </div>
    {{ $users->links() }}
@endsection 