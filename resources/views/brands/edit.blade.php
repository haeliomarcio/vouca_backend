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
            <form method="POST" action="{{url('/dashboard/stores/update/'.$data->id)}}">
            {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">Endereço <span class="required">*</span></label>
                    <input name="name"  value="{{$data->name}}" type="text" class="form-control" id="name" placeholder="Marca">
                </div>
                <div class="form-group">
                    
                    <label for="image">Endereço <span class="required">*</span></label> <a href="{{ url($data->image) }}" target="_blank">Acessar Imagem</a>
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
@section('scripts')
    <script>
        $(document).ready(function() {
            var state_id = $("#state_id").val();
            var city_id = "{{$data->city_id}}";
            axios.get("{{url('/dashboard/states/list-city-by-id')}}" + '/' + state_id)
            .then(function(response) {
                var options = '<option value="">Selecione</option>';
                for (var i = 0; i < response.data.length; i++) {
                    var selected  = city_id === `${response.data[i].id}` ? 'selected' : '';
                    options += `<option value="` +
                    response.data[i].id + `" ${selected}>` +
                    response.data[i].name + '</option>';
                }
                $('#city_id').html(options);
            })
            .catch(function(error){
                console.log(error);
            });
        });
        
        $("#state_id").change(function() {
            axios.get("{{url('/dashboard/states/list-city-by-id')}}" + '/' + $(this).val())
            .then(function(response) {
                var options = '<option value=""></option>';
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