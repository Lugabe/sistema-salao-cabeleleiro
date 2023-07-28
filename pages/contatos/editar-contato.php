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

        <div>
            <label for="idContato">ID:</label>
            <input type="number" name="idContato" placeholder="Digite um ID." value="<?= $dados["idContato"] ?>">
        </div>

        <div>
            <label for="nomeContato">Nome:</label>
            <input type="text" name="nomeContato" placeholder="Digite o seu nome." value="<?= $dados["nomeContato"] ?>">
        </div>

        <div>
            <label for="emailContato">E-mail:</label>
            <input type="email" name="emailContato" placeholder="Digite o seu e-mail" value="<?= $dados["emailContato"] ?>">
        </div>

        <div>
            <label for="telefoneContato">Telefone:</label>
            <input type="tel" name="telefoneContato" placeholder="Digite o seu telefone" value="<?= $dados["telefoneContato"] ?>">
        </div>

        <div>
            <label for="dataAgendamento">Data de Agendamento:</label>
            <input type="date" name="dataAgendamento" placeholder="Escolha uma data" value="<?= $dados["dataAgendamento"] ?>">
        </div>

        <div>
            <label for="horarioAgendamento">Horário de Agendamento:</label>
            <input type="time" name="horarioAgendamento" placeholder="Escolha um horário" value="<?= $dados["horarioAgendamento"] ?>">
        </div>

        <div>
            <label for="servico">Serviço:</label>
            <input type="text" name="servico" placeholder="Qual o serviço?" value="<?= $dados["servico"] ?>">
        </div>

        <div>
            <label for="valorServico">Valor do Serviço:</label>
            <input type="text" name="valorServico" placeholder="Digite o valor" value="<?= $dados["valorServico"] ?>">
        </div>

        <div>
            <input type="submit" value="Atualizar" name="btnAtualizar">
        </div>

    </form>

</div>