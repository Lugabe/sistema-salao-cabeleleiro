<head>
    <h3><i class="bi bi-plus-square"></i> Cadastro de Contatos</h3>
</head>
<div>
    <form action="index.php?menuop=inserir-contato" method="post">
        <div class="mb-3">
            <div class=" mb-2 col-4 ">
                <label class="form-label" for="nomeContato">Nome:</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-pen"></i></span>
                    <input class="form-control bg-secondary text-white" type="text" name="nomeContato" placeholder="Digite o seu nome.">
                </div>
            </div>
            <div class=" mb-3 col-4">
                <label class="form-label" for="emailContato">E-mail:</label>
                <div>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                        <input class="form-control bg-secondary text-white" type="email" name="emailContato" placeholder="Digite o seu e-mail">
                    </div>
                </div>
            </div>

            <div class=" mb-2 col-3">
                <label class="form-label" for="telefoneContato">Telefone:</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-telephone-fill"></i></span>
                    <input class="form-control bg-secondary text-white" type="tel" name="telefoneContato" placeholder="Digite o seu telefone">
                </div>
            </div>

            <div class="row">
                <div class=" ml-3 mb-3 col-3">
                    <label class="form-label" for="dataAgendamento">Data de Agendamento:</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-calendar"></i></span>
                        <input class="form-control bg-secondary text-white" type="date" name="dataAgendamento" placeholder="Escolha uma data">

                    </div>
                </div>

                <div class=" mb-2 col-3">
                    <label class="form-label" for="horarioAgendamento">Horário de Agendamento:</label>

                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-clock"></i></span>
                        <input class="form-control bg-secondary text-white" type="time" name="horarioAgendamento" placeholder="Escolha um horário">
                    </div>
                </div>

            </div>


            <div class=" mb-2 col-5">
                <label class="form-label" for="servico">Serviço:</label>

                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-tools"></i></span>

                    <select class="form-select bg-secondary text-white" name="servico" id="servico">
                        <option value="">Selecione o serviço a realizar</option>
                        <option value=" cabelo">Cortar o Cabelo</option>
                        <option value="barba">Fazer a Barba</option>
                        <option value="sobrancelha">Fazer a Sobrancelha</option>
                        <option value="pezinho">Fazer o Pézinho</option>
                        <option value="unhas">Fazer a Unha</option>
                        <option value="outros">Outros</option>

                    </select>
                </div>
            </div>

            <div class=" mb-2 col-3">
                <label class="form-label" for="valorServico">Valor do Serviço:</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-cash-coin"></i></span>
                    <input class="form-control bg-secondary text-white" type="text" name="valorServico" placeholder="Digite o valor">
                </div>
            </div>

            <div>
                <button class="btn btn-success btn-sm mt-2" type="submit" name="btnAdicionar">Adicionar Contado</button>
            </div>

    </form>

</div>