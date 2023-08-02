<?php

$idContato = $_GET['idContato'];
$sql = "SELECT * FROM tbcontatos WHERE idContato = {$idContato}";
$rs = mysqli_query($conexao, $sql) or die("Erro ao recuperar os dados para editar os dados do cliente" . mysqli_error($conexao));
$dados = mysqli_fetch_assoc($rs);

?>

<header>
    <h3>Edição de Contatos</h3>
</header>

<div>
    <form action="index.php?menuop=atualizar-contato" method="post">
        <div class="col-3">
            <label class="form-label" for="idContato">ID:</label>

            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-person-vcard"></i></span>
                <input class="form-control bg-secondary text-white" type="number" name="idContato" placeholder="Digite um ID." value="<?= $dados["idContato"] ?>">
            </div>
        </div>

        <div class="col-5">
            <label class="form-label mt-2" for="nomeContato">Nome:</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-pen"></i></span>
                <input class="form-control bg-secondary text-white" type="text" name="nomeContato" placeholder="Digite o seu nome." value="<?= $dados["nomeContato"] ?>">
            </div>
        </div>

        <div class="col-5">
            <label class="form-label mt-2" for="emailContato">E-mail:</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-envelope"></i></span>

                <input class="form-control bg-secondary text-white" type="email" name="emailContato" placeholder="Digite o seu e-mail" value="<?= $dados["emailContato"] ?>">
            </div>
        </div>
        <div class=" mb-2 col-5">
            <label class="form-label mt-2" for="telefoneContato">Telefone:</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-telephone-fill"></i></span>
                <input class="form-control bg-secondary text-white" type="tel" name="telefoneContato" placeholder="Digite o seu telefone">
            </div>

        </div>

        <div class="row">
            <div class=" ml-3 mb-2 col-3">
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

        <div class="col-5">
            <label class="form-label mt-2" for="servico">Serviço:</label>


            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-tools"></i></span>

                <select class="form-select bg-secondary text-white" name="servico" id="servico">
                    <option <?php echo ($dados['servico'] == '') ? 'selected' : '' ?> value="">Selecione o serviço a realizar</option>
                    <option <?php echo ($dados['servico'] == 'cabelo') ? 'selected' : '' ?> value=" cabelo">Cortar o Cabelo</option>
                    <option <?php echo ($dados['servico'] == 'barba') ? 'selected' : '' ?> value="barba">Fazer a Barba</option>
                    <option <?php echo ($dados['servico'] == 'sobrancelha') ? 'selected' : '' ?> value="sobrancelha">Fazer a Sobrancelha</option>
                    <option <?php echo ($dados['servico'] == 'pezinho') ? 'selected' : '' ?> value="pezinho">Fazer o Pézinho</option>
                    <option <?php echo ($dados['servico'] == 'unhas') ? 'selected' : '' ?> value="unhas">Fazer a Unha</option>
                    <option <?php echo ($dados['servico'] == 'outros') ? 'selected' : '' ?> value="outros">Outros</option>

                </select>

            </div>
        </div>

        <div class=" col-2">
            <label class="form-label mt-2" for="valorServico">Valor do Serviço:</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-cash-coin"></i></span>
                <input class="form-control bg-secondary text-white" type="text" name="valorServico" placeholder="Digite o valor" value="<?= $dados["valorServico"] ?>">
            </div>
        </div>

        <div>
            <button class="btn btn-primary mt-2 mb-4" type="submit" value="Atualizar" name="btnAtualizar">Atualizar Cadastro</button>
        </div>

    </form>

</div>