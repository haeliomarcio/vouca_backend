@extends('layouts.site')
@section('styles')
<style>
    h2 {
        color: #000 !important;
    }

    h2::after {
        top: 114%;
        width: 65%;
        background-color: #000 !important;
        display: none;
    }

    .link-black a {
        color: #212529;
    }

    .link-black a:visited {
        color: #212529;
    }

    .link-black a:link {
        text-decoration: none;
    }
</style>
@endsection
@section('content')
    <div class="wrap">
        <div class="content" style="margin-top: 50px; margin-left: 90px">
            <h2 class="titulo"><strong>Magrella</strong></h2>
        </div>

        <div class="container" style="background-color: #fff; margin-top: 100px;">
            <div class="container container-sobre">

                <div class="row centro" style="margin-bottom: 10px;">
                    <div class="col-md-8">
                        <div style="width: 90%;">
                            <img class="img-fluid" src="images/lojas/magrella-loja.png">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-2 centro" style="align-items: center;">
                                <i class="fas fa-award" style="font-size: 32;"></i>
                            </div>
                            <div class="col-10">
                                <span style="font-size: 24;">Desde 1983</span>
                            </div>
                        </div>
                        <br />
                        <div class="row">
                            <div class="col-2 centro" style="align-items: center;">
                                <i class="fas fa-map-marked-alt" style="font-size: 32;"></i>
                            </div>
                            <div class="col-10">
                                <span style="font-size: 24;">Presente em Iguatu/CE</span>
                            </div>
                        </div>
                        <br />
                        <div class="row">
                            <div class="col-2 centro" style="align-items: center;">
                                <i class="fas fa-funnel-dollar" style="font-size: 32;"></i>
                            </div>
                            <div class="col-10">
                                <span style="font-size: 24;">Atuando com 1 PDV</span>
                            </div>
                        </div>
                        <br />
                        <div class="row">
                            <div class="col-2 centro" style="align-items: center;">
                                <i class="fab fa-whatsapp" style="font-size: 32;"></i>
                            </div>
                            <div class="col-10">
                                <span class="link-black" style="font-size: 24;"><a href="https://api.whatsapp.com/send?phone=5588999010191&text=Ol%C3%A1!" target="_blank">Compre pelo WhatsApp: (88) 99901 0191</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            
            </div>
        </div>
        <div id="map" style="width:100%; height: 600px;"></div>
    </div>
@endsection
@section('scripts_bottom')
    <script>
        var map = L.map('map', {
            center: [-4.053263, -43.0394255],
            zoom: 6,
            scrollWheelZoom: false
        });

        var positron = L.tileLayer('https://{s}.basemaps.cartocdn.com/rastertiles/voyager_labels_under/{z}/{x}/{y}.png', {
                attribution: 'GrupoVilarouca'
        }).addTo(map);    

        var mapMarkers = [];
        var LeafIcon = L.Icon.extend({
            options: {
                // shadowUrl: 'leaf-shadow.png',
                iconSize:     [40, 55],
                shadowSize:   [50, 64],
                iconAnchor:   [22, 94],
                shadowAnchor: [4, 62],
                popupAnchor:  [-3, -76]
            }
        });
        
        function listStores() {  
            axios.get(`{{url('/find-store/')}}?store=MAGRELLA`)
            .then(function(response) {
                for(item of response.data) {

                    var fone = item.information.replace('(', '').replace(')', '-').replace(' ', '');
                    var popup = `<h4>MAGRELLA</h4>`;
                    popup += `<p class="info-address-map">
                        <a href="https://www.google.com.br/maps/place//@${item.lat},${item.lng},17z/" target="_blank">
                            ${item.address}
                        </a>
                    </p>`;
                    popup += `<p class="info-fone-map">
                        <a href="tel:${fone}">
                            ${item.information}
                        </a>
                    </p>`;
                    var lat = parseFloat(item.lat);
                    var lng = parseFloat(item.lng);
                    var name = item.name;
                    var marker = L.marker([lat, lng], {icon: new LeafIcon({
                            iconUrl: item.image,
                            iconSize:     [68, 95], 
                            shadowSize:   [50, 64], 
                            iconAnchor:   [22, 94], 
                            shadowAnchor: [4, 62],  
                            popupAnchor:  [-3, -76] 
                        })}).bindPopup(popup).addTo(map);
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
        $(document).ready(function() {
            listStores();
        });
    </script>
@endsection