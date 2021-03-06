@extends('layouts.site')
@section('styles')
<style>
    h2 {
        color: #E05E3B !important;
    }
    
    h2::after {
        background-color: #E05E3B !important;
        display: none;
    }

    h3 {
        color: #E05E3B !important;
    }

    h3::after {
        top: 114%;
        width: 65%;
    }
</style>
@endsection
@section('content')
    <div class="wrap">
        <div class="content" style="margin-top: 50px; margin-left: 90px">
            <h2 class="titulo"><strong>Contato</strong></h2>
        </div>

        <div class="container" style="background-color: #fff; margin-top: 100px;">
            <div class="container container-sobre">
                <!-- <h3 class="subtitulo"><strong>Formulário</strong></h3> -->
                <p class="text-justify" style="margin-left: 20px;">
                    Acreditamos que uma boa base para o crescimento é a comunicação, por isso estamos certos de que seu contato é muito importante para nós. Preencha os campos abaixo para que sua mensagem seja enviada.
                </p>
                <hr style="margin-left: 20px">
                @include('helpers.messages')
                <div class="container" style="padding: 0 20px 0 20px;">
                    <form method="POST" action="{{url('/contato')}}">
                        {{ csrf_field() }}
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="nome">Nome</label>
                                <input name="nome" type="text" value="{{old('nome')}}" class="form-control" id="nome" placeholder="Digite seu nome" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="email">E-mail</label>
                                <input  name="email" type="email" value="{{old('email')}}" class="form-control" id="email" placeholder="Digite seu e-mail" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="telefone">Telefone</label>
                                <input  name="telefone" type="text" value="{{old('telefone')}}" class="form-control" id="telefone" placeholder="Digite seu telefone" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="cidade">Cidade</label>
                                <input  name="cidade" type="text"  value="{{old('cidade')}}" class="form-control" id="cidade" placeholder="Digite sua cidade" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="estado">Estado</label>
                                <select  name="estado" id="estado" value="{{old('estado')}}" class="form-control" required>
                                    <option disabled selected>Escolher...</option>
                                    <option value="AC">AC</option>
                                    <option value="AL">AL</option>
                                    <option value="AM">AM</option>
                                    <option value="AP">AP</option>
                                    <option value="BA">BA</option>
                                    <option value="CE">CE</option>
                                    <option value="DF">DF</option>
                                    <option value="ES">ES</option>
                                    <option value="GO">GO</option>
                                    <option value="MA">MA</option>
                                    <option value="MT">MT</option>
                                    <option value="MS">MS</option>
                                    <option value="MG">MG</option>
                                    <option value="PA">PA</option>
                                    <option value="PB">PB</option>
                                    <option value="PR">PR</option>
                                    <option value="PE">PE</option>
                                    <option value="PI">PI</option>
                                    <option value="RJ">RJ</option>
                                    <option value="RN">RN</option>
                                    <option value="RO">RO</option>
                                    <option value="RS">RS</option>
                                    <option value="RR">RR</option>
                                    <option value="SC">SC</option>
                                    <option value="SE">SE</option>
                                    <option value="SP">SP</option>
                                    <option value="TO">TO</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="sede">Sede</label>
                                <select  name="sede" id="sede" value="{{old('sede')}}" class="form-control" required>
                                    <option disabled selected>Escolher...</option>
                                    <option value="CE">Ceará</option>
                                    <option value="MA">Maranhão</option>
                                    <option value="PI">Piauí</option>
                                    <option value="RN">Rio Grande do Norte</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="assunto">Assunto</label>
                                <select  name="assunto" id="assunto" value="{{old('assunto')}}" class="form-control" required>
                                    <option disabled selected>Escolher...</option>
                                    <option value="duvida">Dúvida</option>
                                    <option value="elogios">Elogios</option>
                                    <option value="reclamacao">Reclamação</option>
                                    <option value="sugestao">Sugestão</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="mensagem">Mensagem</label>
                                <textarea name="mensagem" class="form-control" id="mensagem" rows="5" required>{{old('mensagem')}}</textarea>
                            </div>
                        </div>
                        
                        <button type="submit" class="btn btn-primary" style="background-color: #E05E3B; border-color: #E05E3B;">Enviar</button>
                    </form>
                    <br /><br />
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="subtitulo" style="margin: 0 0 20px;"><i class="fas fa-phone"></i><strong>SAC</strong></h3>
                        </div>
                        <div class="col-sm-12">
                            <span>Rua Epitácio Pessoa, 122, Centro, IGUATU-CE CEP 63500-044</span>
                            <br />
                            <span>E-mail: sac@grupovilarouca.com.br</span> 
                            
                        </div>
                        <div class="col-sm-12">
                            <span>Telefone: 08002808525</span>
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
            center: [-6.361741, -39.3002579],
            zoom: 6,
            scrollWheelZoom: false
        });

        var positron = L.tileLayer('https://{s}.basemaps.cartocdn.com/rastertiles/voyager_labels_under/{z}/{x}/{y}.png', {
                attribution: 'GrupoVilarouca'
        }).addTo(map);    

        var LeafIcon = L.Icon.extend({
            options: {
                iconSize:     [68, 95], 
                shadowSize:   [50, 64], 
                iconAnchor:   [22, 94], 
                shadowAnchor: [4, 62],  
                popupAnchor:  [-3, -76] 
            }
        });

        var popup = `<h4>Grupo Vilarouca</h4>`;
        popup += `<p class="info-address-map">
            <a href="https://www.google.com.br/maps/place//@-6.361741,-39.3002579,17z/" target="_blank">
                Rua Epitácio Pessoa, 122, Centro, IGUATU-CE CEP 63500-044
            </a>
        </p>`;
        popup += `<p class="info-fone-map">
            <a href="tel:0800-280-85-25">
                08002808525
            </a>
        </p>`;

        var icon = new LeafIcon({iconUrl: "{{url('/images/icon-vilarouca.png')}}"});
                
        L.marker([-6.361741, -39.300257], {icon: icon}).bindPopup(popup).addTo(map);
        
    </script>
@endsection