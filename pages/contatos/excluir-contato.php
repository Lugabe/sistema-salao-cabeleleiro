<header>
    <h3>Excluindo Contato</h3>
</header>

<?php

$idContato = mysqli_real_escape_string($conexao, $_GET["idContato"]);
$sql = "DELETE FROM tbcontatos WHERE idContato = '{$idContato}'";

$rs = mysqli_query($conexao, $sql) or die("ERRO ao excluir o contato" . mysqli_error($conexao));

echo "Contato excluido com sucesso.";
?>