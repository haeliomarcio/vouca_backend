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
@endsection
@section('content')
    <div class="wrap">
        <div class="content centro" style="margin-top: 30px;">
            <h2><strong>Contato</strong></h2>
        </div>

        <div class="container" style="background-color: #fff; margin-top: 100px;">
            <div class="container container-sobre">
                <h3 class="subtitulo"><strong>Formulário</strong></h3>

                <p class="text-justify" style="margin-left: 20px;">
                    Acreditamos que uma boa base para o crescimento é a comunicação, por isso estamos certos de que seu contato é muito importante para nós. Preencha os campos abaixo para que sua mensagem seja enviada.
                </p>
                <hr style="margin-left: 20px">
                <div class="container" style="padding: 0 20px 0 20px;">
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="nome">Nome</label>
                                <input type="text" class="form-control" id="nome" placeholder="Digite seu nome" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="email">E-mail</label>
                                <input type="email" class="form-control" id="email" placeholder="Digite seu e-mail" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="telefone">Telefone</label>
                                <input type="text" class="form-control" id="telefone" placeholder="Digite seu telefone" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="cidade">Cidade</label>
                                <input type="text" class="form-control" id="cidade" placeholder="Digite sua cidade" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="estado">Estado</label>
                                <select id="estado" class="form-control" required>
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
                                <select id="sede" class="form-control" required>
                                    <option disabled selected>Escolher...</option>
                                    <option value="CE">Ceará</option>
                                    <option value="MA">Maranhão</option>
                                    <option value="PI">Piauí</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="assunto">Assunto</label>
                                <select id="assunto" class="form-control" required>
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
                                <textarea class="form-control" id="mensagem" rows="5" required></textarea>
                            </div>
                        </div>
                        
                        <button type="submit" class="btn btn-primary" style="background-color: #0a6961; border-color: #0a6961;">Enviar</button>
                    </form>
                    <br />
                    <div class="row">
                        <div class="col-sm-4 centro">
                            <img src="images/ceara-contato.png">
                        </div>
                        <div class="col-sm-4 centro">
                            <img src="images/maranhao-contato.png">
                        </div>
                        <div class="col-sm-4 centro">
                            <img src="images/piaui-contato.png">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection