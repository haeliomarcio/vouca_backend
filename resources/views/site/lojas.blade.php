@extends('layouts.site')
@section('styles')
<style>
    h2 {
        color: #fff;
    }
    h2::after {
        background-color: #fff;
    }
    h3::after {
        top: 114%;
        width: 65%;
    }
</style>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin=""/>
@endsection
@section('scripts_top')
<script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js" integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew==" crossorigin=""></script>
@endsection
@section('content')
    <div class="wrap">
        <div class="content centro" style="margin-top: 30px;">
            <h2><strong>Lojas</strong></h2>
            <br /><br />
        </div>
        <div class="container">
            <form>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label>Estados</label>
                            <select id="state_id" name="state_id" value="" class="form-control">
                                <option value="">Todos</option>
                                @foreach($states as $state)
                                    <option value="{{$state->id}}">{{$state->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label>Cidades</label>
                            <select id="city_id" name="city_id" name="" value="" class="form-control">
                                <option value="">Todos</option>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label>Lojas</label>
                            <select name="" value="" class="form-control">
                                <option value="">Todos</option>
                                @foreach($stores as $store)
                                    <option value="{{$store->id}}">{{$store->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div id="map" style="width:100%; height: 600px;"></div>
    </div>
@endsection
@section('scripts_bottom')
    <script>
        var map = L.map('map').setView([-4.053263, -43.0394255], 6);
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);
        var LeafIcon = L.Icon.extend({
            options: {
                //shadowUrl: 'leaf-shadow.png',
                iconSize:     [40, 55],
                shadowSize:   [50, 64],
                iconAnchor:   [22, 94],
                shadowAnchor: [4, 62],
                popupAnchor:  [-3, -76]
            }
        });
        var arezzo = new LeafIcon({iconUrl: '/images/icons/arezzo.png'}),
            boticario = new LeafIcon({iconUrl: '/images/icons/boticario.png'}),
            cacauShow = new LeafIcon({iconUrl: '/images/icons/cacau-show.png'});

        // L.marker([51.5, -0.09], {icon: greenIcon}).bindPopup("I am a green leaf.").addTo(map);
        // L.marker([51.495, -0.083], {icon: redIcon}).bindPopup("I am a red leaf.").addTo(map);
        // L.marker([51.49, -0.1], {icon: orangeIcon}).bindPopup("I am an orange leaf.").addTo(map);
        // L.marker([-6.3601557, -39.3013629], {icon: greenIcon}).bindPopup("I am a green leaf.").addTo(map);

        axios.get('/list-lojas')
        .then(function(response) {
            for(item of response.data) {
                var lat = parseFloat(item.lat);
                var lng = parseFloat(item.lng);
                L.marker([lat, lng], {icon: arezzo}).bindPopup(item.name).addTo(map);
            }
        })
        .catch(function(error){
            console.log(error);
        });


        // Field States
        $("#state_id").change(function() {
            var state_id = $(this).val();
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
