@extends('layouts.site')
@section('styles')
<style>
    h2 {
        color: #2D170F !important;
    }

    h2::after {
        top: 114%;
        width: 65%;
        background-color: #2D170F !important;
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
            <h2 class="titulo"><strong>Cacau Show</strong></h2>
        </div>

        <div class="container" style="background-color: #fff; margin-top: 100px;">
            <div class="container container-sobre">
                <div class="row centro" style="margin-bottom: 10px;">
                    <div class="col-md-8">
                        <div style="width: 90%;">
                            <img class="img-fluid" src="images/lojas/cacau-show-loja.png">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-2 centro" style="align-items: center;">
                                <i class="fas fa-award" style="font-size: 32;"></i>
                            </div>
                            <div class="col-10">
                                <span style="font-size: 24;">Parceria desde 2010</span>
                            </div>
                        </div>
                        <br />
                        <div class="row">
                            <div class="col-2 centro" style="align-items: center;">
                                <i class="fas fa-map-marked-alt" style="font-size: 32;"></i>
                            </div>
                            <div class="col-10">
                                <span style="font-size: 24;">Presente no Estado: CE</span>
                            </div>
                        </div>
                        <br />
                        <div class="row">
                            <div class="col-2 centro" style="align-items: center;">
                                <i class="fas fa-funnel-dollar" style="font-size: 32;"></i>
                            </div>
                            <div class="col-10">
                                <span style="font-size: 24;">Atuando com 2 PDVS</span>
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
            axios.get(`{{url('/find-store/')}}?store=CACAU SHOW`)
            .then(function(response) {
                for(item of response.data) {

                    var fone = item.information.replace('(', '').replace(')', '-').replace(' ', '');
                    var popup = `<h4>Cacau Show</h4>`;
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
