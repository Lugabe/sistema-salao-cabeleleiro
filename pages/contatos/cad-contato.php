<head>
    <h3>Cadastro de Contatos</h3>
</head>
<div>
    <form action="index.php?menuop=inserir-contato" method="post">
        <div class="mb-3">
            <label class="form-label" for="nomeContato">Nome:</label>
            <input class="form-control" type="text" name="nomeContato" placeholder="Digite o seu nome.">
        </div>

        <div class="mb-3">
            <label class="form-label" for="emailContato">E-mail:</label>
            <input class="form-control" type="email" name="emailContato" placeholder="Digite o seu e-mail">
        </div>

        <div class="mb-3">
            <label class="form-label" for="telefoneContato">Telefone:</label>
            <input class="form-control" type="tel" name="telefoneContato" placeholder="Digite o seu telefone">
        </div>

        <div class="mb-3">
            <label class="form-label" for="dataAgendamento">Data de Agendamento:</label>
            <input class="form-control" type="date" name="dataAgendamento" placeholder="Escolha uma data">
        </div>

        <div class="mb-3">
            <label class="form-label" for="horarioAgendamento">Horário de Agendamento:</label>
            <input class="form-control" type="time" name="horarioAgendamento" placeholder="Escolha um horário">
        </div>

        <div class="mb-3">
            <label class="form-label" for="servico">Serviço:</label>
            <input class="form-control" type="text" name="servico" placeholder="Qual o serviço?">
        </div>

        <div>
            <label class="form-label" for="valorServico">Valor do Serviço:</label>
            <input class="form-control" type="text" name="valorServico" placeholder="Digite o valor">
        </div>

        <div>
            <input class="btn btn-success btn-sm mt-2" type="submit" value="Adicionar" name="btnAdicionar">
        </div>

    </form>

</div>