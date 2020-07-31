@extends('layouts.master')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Edição - Notícia - {{$data->title}}</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <br />
            @include('helpers.messages')
            <form method="post" action="{{url('/dashboard/news/update/'.$data->id)}}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="title">Título <span class="required">*</span></label>
                    <input name="title"  value="{{$data->title}}" type="text" class="form-control" id="title" placeholder="Título">
                </div>
                <div class="row">
                    <div class="col">
                        <label for="image">Imagem de Capa <span class="required">*</span></label>
                        <input type="file"  name="image"  type="image" class="form-control" id="image" />
                    </div>
                    <div class="col">
                        
                        <label for="publish">Data da Publicação </label>
                        <input type="date"  name="publish" value="{{$data->publish}}"  class="form-control" id="publish" placeholder="-00/00/00000">
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <label for="introduction">Introdução <span class="required">*</span></label>
                        <textarea id="full-featured" name="introduction"  value="" class="form-control" id="introduction">{{$data->introduction}}</textarea>
                        <br />
                        <label for="description">Descrição <span class="required">*</span></label>
                        <textarea id="full-featured" name="description"  value="" class="form-control" id="description">{{$data->description}}</textarea>
                    </div>
                    <div class="col-4" style="padding: 20px;">
                        <img height="300px" src="{{url('files/'.$data->image_path)}}" />
                    </div>
                </div>
                <br />
                <div class="row">
                    <div class="col-md-6">
                    <a href="{{url('/dashboard/news')}}" class="btn btn-warning">Cancelar</a>
                    </div>
                    <div class="col-md-6 text-right">
                        <button type="submit" class="btn btn-success">Salvar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection 
@section('scripts')
    <script>
        tinymce.init({
            selector: 'textarea',  // change this value according to your HTML
            menu: {
                happy: {title: 'Happy', items: 'code'}
            },
            plugins: 'code',  // required by the code menu item
            menubar: 'happy'  // adds happy to the menu bar
        });
    </script>
@endsection