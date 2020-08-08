@extends('layouts.site')
@section('styles')
<style>
    h3 {
        color: #004691 !important;
    }

    h3::after {
        top: 114%;
        width: 65%;
        background-color: #004691 !important;
        display: none;
    }
</style>
@endsection
@section('content')
    <div class="wrap-tim">

        <div class="container" style="background-color: #fff; margin-top: 100px;">
            <div class="container container-sobre">
                <h3 class="subtitulo centro"><strong>Tim</strong></h3>

                    <div class="row centro" style="margin-bottom: 10px;">
                        <div style="width: 75%;">
                            <img class="img-fluid" src="images/lojas/tim-loja.png">
                        </div>
                    </div>
                    <div id="map" style="width:100%; height: 400px;"></div>
            
            </div>
        </div>
    </div>
@endsection
@section('scripts_bottom')
    <script>
        var map = L.map('map', {
            center: [-4.053263, -43.0394255],
            zoom: 6,
            scrollWheelZoom: false
        });

        var positron = L.tileLayer('https://{s}.basemaps.cartocdn.com/light_nolabels/{z}/{x}/{y}.png', {
                attribution: '©OpenStreetMap, ©CartoDB'
        }).addTo(map);    

        var mapMarkers = [];
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
        
        var arezzo = new LeafIcon({iconUrl: '/images/icons/arezzo.png'});
        var boticario = new LeafIcon({iconUrl: '/images/icons/boticario.png'});
        var cacauShow = new LeafIcon({iconUrl: '/images/icons/cacau-show.png'});
        var crocs = new LeafIcon({iconUrl: '/images/icons/crocs.png'});
        var magrella = new LeafIcon({iconUrl: '/images/icons/magrella.png'});
        var tim = new LeafIcon({iconUrl: '/images/icons/tim.png'});
        
        function listStores() {  
            axios.get(`{{url('/find-store/')}}?store=TIM`)
            .then(function(response) {
                for(item of response.data) {
                    var lat = parseFloat(item.lat);
                    var lng = parseFloat(item.lng);
                    var name = item.name;
                    var marker = L.marker([lat, lng], {icon: tim}).bindPopup(item.lat + " - " + item.lng + ' - ' + item.name).addTo(map);
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

        $(document).ready(function() {
            listStores();
        });

    </script>
@endsection