@extends('layouts.site')
@section('styles')
<style>
    h4 {
        color: #d79122 !important;
    }
    h2::after {
        background-color: #fff !important;
    }
    h3::after {
        top: 114%;
        width: 65%;
    }

    .searchable-container{margin:20px 0 0 0}
    .searchable-container label.btn-default.active{background-color:#d79122;color:#FFF}
    .searchable-container label.btn-default{width:100%;border:1px solid #efefef;margin:5px; box-shadow:5px 8px 8px 0 #ccc; display: flex; align-items: center; justify-content: center;}
    .searchable-container label .bizcontent{width:100%;}
    .searchable-container .btn-group{width:100%; height: 55px;}
    .searchable-container .btn span.glyphicon{
        opacity: 0;
    }
    .searchable-container .btn.active span.glyphicon {
        opacity: 1;
    }
    
</style>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin=""/>
@endsection
@section('scripts_top')
<script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js" integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew==" crossorigin=""></script>
@endsection
@section('content')
    <div class="wrap">
        <!--
        <div class="content centro" style="margin-top: 30px;">
            <h2 class="titulo"><strong>Lojas</strong></h2>
            <br /><br />
        </div>
        -->
        <div class="container" style="background-color: #fff; margin-top: 100px; padding-bottom: 20px;">
            
            <div class="row">
                <div class="col-sm-3">
                    <div class="form-group">
                        <div class="searchable-container">
                            <div class="row">
                                <div class="items col-sm-12">
                                    <h4 class="subtitulo">SELECIONE UM ESTADO</h4>
                                </div>
                                <div class="items col-sm-12">
                                    <div class="info-block block-info clearfix">
                                        <div data-toggle="buttons" class="btn-group bizmoduleselect">
                                            <label class="btn btn-default">
                                                <div class="bizcontent">
                                                    <input type="checkbox" id="ceara" name="ceara" autocomplete="off" value="">
                                                    <span class="glyphicon glyphicon-ok glyphicon-lg"></span>
                                                    <h6 style="font-family: vilaRoucaBold;">CEARÁ</h6>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="items col-sm-12">
                                    <div class="info-block block-info clearfix">
                                        <div data-toggle="buttons" class="btn-group bizmoduleselect">
                                            <label class="btn btn-default">
                                                <div class="bizcontent">
                                                    <input type="checkbox" id="maranhao" name="maranhao" autocomplete="off" value="">
                                                    <span class="glyphicon glyphicon-ok glyphicon-lg"></span>
                                                    <h6 style="font-family: vilaRoucaBold;">MARANHÃO</h6>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="items col-sm-12">
                                    <div class="info-block block-info clearfix">
                                        <div data-toggle="buttons" class="btn-group bizmoduleselect">
                                            <label class="btn btn-default">
                                                <div class="bizcontent">
                                                    <input type="checkbox" id="piaui" name="piaui" name="var_id[]" autocomplete="off" value="">
                                                    <span class="glyphicon glyphicon-ok glyphicon-lg"></span>
                                                    <h6 style="font-family: vilaRoucaBold;">PIAUÍ</h6>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="items col-sm-12">
                                    <div class="info-block block-info clearfix">
                                        <div data-toggle="buttons" class="btn-group bizmoduleselect">
                                            <label class="btn btn-default">
                                                <div class="bizcontent">
                                                    <input type="checkbox" id="rn" name="rn" name="var_id[]" autocomplete="off" value="">
                                                    <span class="glyphicon glyphicon-ok glyphicon-lg"></span>
                                                    <h6 style="font-family: vilaRoucaBold;">RIO GRANDE DO NORTE</h6>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-1"></div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <div class="searchable-container">
                            <div class="row">
                                <div class="items col-sm-12">
                                    <h4 class="subtitulo">SELECIONE UMA LOJA</h4>
                                </div>
                                <div class="items col-sm-6" style="float: left;">
                                    <div class="info-block block-info clearfix">
                                        <div data-toggle="buttons" class="btn-group bizmoduleselect" style="width: 90%; height: 73px;">
                                            <label class="btn btn-default" style="width: 100%; display: flex; align-items: center; justify-content: center;">
                                                <div class="bizcontent">
                                                    <input type="checkbox" id="logo_arezzo" name="var_id[]" autocomplete="off" value="">
                                                    <span class="glyphicon glyphicon-ok glyphicon-lg"></span>
                                                    <img class="img-fluid" id="img_arezzo" src="images/marcas/marcas/arezzo.png">
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="items col-sm-6" style="float: left;">
                                    <div class="info-block block-info clearfix">
                                        <div data-toggle="buttons" class="btn-group bizmoduleselect" style="width: 90%; height: 73px;">
                                            <label class="btn btn-default" style="width: 100%; display: flex; align-items: center; justify-content: center;">
                                                <div class="bizcontent">
                                                    <input type="checkbox"  id="logo_magrella" name="var_id[]" autocomplete="off" value="">
                                                    <span class="glyphicon glyphicon-ok glyphicon-lg"></span>
                                                    <img class="img-fluid" id="img_magrella" src="images/marcas/marcas/magrella.png">
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="items col-sm-6" style="float: left;">
                                    <div class="info-block block-info clearfix">
                                        <div data-toggle="buttons" class="btn-group bizmoduleselect" style="width: 90%; height: 73px;">
                                            <label class="btn btn-default" style="width: 100%; display: flex; align-items: center; justify-content: center;">
                                                <div class="bizcontent">
                                                    <input type="checkbox" id="logo_cacaushow" name="var_id[]" autocomplete="off" value="">
                                                    <span class="glyphicon glyphicon-ok glyphicon-lg"></span>
                                                    <img class="img-fluid" id="img_cacaushow" src="images/marcas/marcas/cacau-show.png">
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="items col-sm-6" style="float: left;">
                                    <div class="info-block block-info clearfix">
                                        <div data-toggle="buttons" class="btn-group bizmoduleselect" style="width: 90%; height: 73px;">
                                            <label class="btn btn-default" style="width: 100%; display: flex; align-items: center; justify-content: center;">
                                                <div class="bizcontent">
                                                    <input type="checkbox" id="logo_boticario" name="var_id[]" autocomplete="off" value="">
                                                    <span class="glyphicon glyphicon-ok glyphicon-lg"></span>
                                                    <img class="img-fluid" id="img_boticario" src="images/marcas/marcas/boticario.png">
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="items col-sm-6" style="float: left;">
                                    <div class="info-block block-info clearfix">
                                        <div data-toggle="buttons" class="btn-group bizlocmoduleselect" style="width: 90%; height: 73px;">
                                            <label class="btn btn-default" style="width: 100%; display: flex; align-items: center; justify-content: center;">
                                                <div class="bizcontent">
                                                    <input type="checkbox" id="logo_crocs" name="var_id[]" autocomplete="off" value="">
                                                    <span class="glyphicon glyphicon-ok glyphicon-lg"></span>
                                                    <img class="img-fluid" id="img_crocs" src="images/marcas/marcas/crocs.png">
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="items col-sm-6" style="float: left;">
                                    <div class="info-block block-info clearfix">
                                        <div data-toggle="buttons" class="btn-group bizmoduleselect" style="width: 90%; height: 73px;">
                                            <label class="btn btn-default" style="width: 100%; display: flex; align-items: center; justify-content: center;">
                                                <div class="bizcontent">
                                                    <input type="checkbox" id="logo_tim" name="var_id[]" autocomplete="off" value="">
                                                    <span class="glyphicon glyphicon-ok glyphicon-lg"></span>
                                                    <img class="img-fluid" id="img_tim" src="images/marcas/marcas/tim.png">
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--
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
            -->
        </div>
        <div id="map" style="width:100%; height: 600px;"></div>
    </div>
@endsection
@section('scripts_bottom')
    <script>
        // var map = L.map('map').setView([-4.053263, -43.0394255], 6);
        var map = L.map('map', {
            center: [-4.053263, -43.0394255],
            zoom: 6,
            scrollWheelZoom: false,
        });

        function style(feature) {
            return {
                fillColor: getColor(feature.properties.density),
                weight: 2,
                opacity: 1,
                color: 'white',
                dashArray: '3',
                fillOpacity: 0.7
            };
        }
        // L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        //     attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        // }).addTo(map);

        // var positron = L.tileLayer('https://{s}.basemaps.cartocdn.com/light_nolabels/{z}/{x}/{y}.png', {
        //         attribution: 'GrupoVilarouca'
        // }).addTo(map);    
        var positron = L.tileLayer('https://{s}.basemaps.cartocdn.com/rastertiles/voyager_labels_under/{z}/{x}/{y}.png', {
                attribution: 'GrupoVilarouca'
        }).addTo(map);    
        // var positron = L.tileLayer('https://cartocdn_{s}.global.ssl.fastly.net/base-eco/{z}/{x}/{y}.png', {
        //         attribution: 'GrupoVilarouca'
        // }).addTo(map);    
        
        var mapMarkers = [];
        var LeafIcon = L.Icon.extend({
            options: {
                // shadowUrl: 'leaf-shadow.png',
                // iconSize:     [40, 55],                
                // shadowSize:   [50, 64],
                // iconAnchor:   [10, 60],
                // shadowAnchor: [4, 62],
                // popupAnchor:  [-3, -76]
            }
        });
        
        var arezzo = new LeafIcon({iconUrl: '/icons/arezzo.png'});
        var boticario = new LeafIcon({iconUrl: '/icons/boticario.png'});
        var cacauShow = new LeafIcon({iconUrl: '/icons/cacau-show.png'});
        var crocs = new LeafIcon({iconUrl: '/icons/crocs.png'});
        var magrella = new LeafIcon({iconUrl: '/Icons/magrella.png'});
        var tim = new LeafIcon({iconUrl: '/icons/tim.png'});
        
        function listStores() {  
            var ceara = $("#ceara").prop('checked');
            var maranhao = $("#maranhao").prop('checked');
            var piaui = $("#piaui").prop('checked');

            var boticario = $("#logo_boticario").prop('checked');
            var cacaushow = $("#logo_cacaushow").prop('checked');
            var arezzo = $("#logo_arezzo").prop('checked');
            var tim = $("#logo_tim").prop('checked');
            var crocs = $("#logo_crocs").prop('checked');
            var magrella = $("#logo_magrella").prop('checked');

            axios.get(`{{url('/list-lojas/')}}?ceara=${ceara}&maranhao=${maranhao}&piaui=${piaui}&boticario=${boticario}&cacaushow=${cacaushow}&arezzo=${arezzo}&tim=${tim}&crocs=${crocs}&magrella=${magrella}`)
            .then(function(response) {
                for(item of response.data) {
                    var lat = parseFloat(item.lat);
                    var lng = parseFloat(item.lng);
                    var name = item.name;
                    var marker = L.marker([lat, lng], {
                        icon: new LeafIcon({
                            iconUrl: item.image,
                            iconSize:     [68, 95], // size of the icon
                            shadowSize:   [50, 64], // size of the shadow
                            iconAnchor:   [22, 94], // point of the icon which will correspond to marker's location
                            shadowAnchor: [4, 62],  // the same for the shadow
                            popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAncho
                        })}).bindPopup(item.information).addTo(map);
                    mapMarkers.push(marker);
                }
            })
            .catch(function(error){
                console.log(error);
            });
        }

        function removeAllMarker() {
            for(var i = 0; i < mapMarkers.length; i++){
                map.removeLayer(mapMarkers[i]);
            }
        }

        function getIcons(name) {
            switch (name) {
            case 'O BOTICARIO':
                return boticario;
                break;
            case 'CACAU SHOW':
                return cacauShow;
                break;
            case 'AREZZO':
                return arezzo;
                // expected output: "Mangoes and papayas are $2.79 a pound."
                break;
            case 'MAGRELLA COLLECTION':
                return magrella;
                break;
            case 'CROCS':
                return crocs;
                break
            default:
                return tim;
            }
        }

        listStores();

        $("#ceara").change(function() {
            removeAllMarker();
            listStores();
        });
        $("#maranhao").change(function() {
            removeAllMarker();
            listStores();
        });
        $("#piaui").change(function() {
            removeAllMarker();
            listStores();
        });

        // Field States
        $("#state_id").change(function() {
            var state_id = $(this).val();
            listStores();
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

        $(function() {
            $('#search').on('keyup', function() {
                var pattern = $(this).val();
                $('.searchable-container .items').hide();
                $('.searchable-container .items').filter(function() {
                    return $(this).text().match(new RegExp(pattern, 'i'));
                }).show();
            });
        });

        $("#logo_boticario").change(function() {
            var check = $(this).prop('checked');
            var img  = $("#img_boticario");
            if(check) {
                img.prop('src', 'images/marcas/marcas/boticario-white.png');
            } else {
                img.prop('src', 'images/marcas/marcas/boticario.png');
            }
            removeAllMarker();
            listStores();
        });

        $("#logo_cacaushow").change(function() {
            var check = $(this).prop('checked');
            var img  = $("#img_cacaushow");
            if(check) {
                img.prop('src', 'images/marcas/marcas/cacau-show-white.png');
            } else {
                img.prop('src', 'images/marcas/marcas/cacau-show.png');
            }
            removeAllMarker();
            listStores();
        });

        $("#logo_arezzo").change(function() {
            var check = $(this).prop('checked');
            var img  = $("#img_arezzo");
            if(check) {
                img.prop('src', 'images/marcas/marcas/arezzo-white.png');
            } else {
                img.prop('src', 'images/marcas/marcas/arezzo.png');
            }
            removeAllMarker();
            listStores();
        });

        $("#logo_tim").change(function() {
            var check = $(this).prop('checked');
            var img  = $("#img_tim");
            if(check) {
                img.prop('src', 'images/marcas/marcas/tim-white.png');
            } else {
                img.prop('src', 'images/marcas/marcas/tim.png');
            }
            removeAllMarker();
            listStores();
        });

        $("#logo_crocs").change(function() {
            var check = $(this).prop('checked');
            var img  = $("#img_crocs");
            if(check) {
                img.prop('src', 'images/marcas/marcas/crocs-white.png');
            } else {
                img.prop('src', 'images/marcas/marcas/crocs.png');
            }
            removeAllMarker();
            listStores();
        });

        $("#logo_magrella").change(function() {
            var check = $(this).prop('checked');
            var img  = $("#img_magrella");
            if(check) {
                img.prop('src', 'images/marcas/marcas/magrella-white.png');
            } else {
                img.prop('src', 'images/marcas/marcas/magrella.png');
            }
            removeAllMarker();
            listStores();
        });

        
    </script>
@endsection
