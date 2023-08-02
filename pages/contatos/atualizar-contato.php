<header>
    <h3>Atualizar</h3>
</header>

<?php

$idContato = mysqli_real_escape_string($conexao, $_POST["idContato"]);
$nomeContato = mysqli_real_escape_string($conexao, $_POST["nomeContato"]);
$emailContato = mysqli_real_escape_string($conexao, $_POST["emailContato"]);
$telefoneContato = mysqli_real_escape_string($conexao, $_POST["telefoneContato"]);
$dataAgendamento = $_POST["dataAgendamento"];
$horarioAgendamento = $_POST["horarioAgendamento"];
$servico = $_POST["servico"];
$valorServico = $_POST["valorServico"];

$sql = "UPDATE tbcontatos SET
nomeContato = '{$nomeContato}',
emailContato = '{$emailContato}',
telefoneContato = '{$telefoneContato}',
dataAgendamento = '{$dataAgendamento}',
horarioAgendamento = '{$horarioAgendamento}',
servico = '{$servico}',
valorServico = '{$valorServico}'
WHERE idContato = '{$idContato}'
";

$rs = mysqli_query($conexao, $sql) or die("Erro ao inserir os dados" . mysqli_error($conexao));
echo "O registro foi atualizado com sucesso!";
?>