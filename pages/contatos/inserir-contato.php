<header>
    <h3>Novo Contato</h3>
</header>

<?php

$nomeContato = mysqli_real_escape_string($conexao, $_POST["nomeContato"]);
$emailContato = mysqli_real_escape_string($conexao, $_POST["emailContato"]);
$telefoneContato = mysqli_real_escape_string($conexao, $_POST["telefoneContato"]);
$dataAgendamento = $_POST["dataAgendamento"];
$horarioAgendamento = $_POST["horarioAgendamento"];
$servico = mysqli_real_escape_string($conexao, $_POST["servico"]);
$valorServico = $_POST["valorServico"];

$sql = "INSERT INTO tbcontatos (
nomeContato,
emailContato,
telefoneContato,
dataAgendamento,
horarioAgendamento,
servico,
valorServico)
VALUES(
        '{$nomeContato}',
        '{$emailContato}',
        '{$telefoneContato}',
        '{$dataAgendamento}',
        '{$horarioAgendamento}',
        '{$servico}',
        '{$valorServico}'
        )";

$rs = mysqli_query($conexao, $sql) or die("Erro ao inserir os dados" . mysqli_error($conexao));
echo "O registro foi inserido com sucesso!";
?>