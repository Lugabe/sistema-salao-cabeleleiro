<header>
    <h3>Agendamentos</h3>
</header>
<div>
    <form action="index.php?menuop=agendamentos" method="post">
        <input type="text" name="buscarNome" placeholder="Buscar contato..">
        <input class="btn btn-success btn-sm mb-2" type="submit" value="Pesquisar Nome"><i class='bi bi-search'></i>
    </form>
</div>
<div class="tabela">
    <table class="table table-dark  table-hover table-bordered table-sm">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Telefone</th>
                <th>Data de Agendamento</th>
                <th>Horário de Agendamento</th>
                <th>Serviço</th>
                <th>Valor do Serviço</th>

            </tr>
        </thead>
        <tbody>
            <?php

            // QUANTIDADE DE CONTATOS POR PÁGINA
            $quantidadeContatoPagina = 15;
            $pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
            $inicio = ($quantidadeContatoPagina * $pagina) - $quantidadeContatoPagina;

            $pesquisarNome = isset($_POST["buscarNome"]) ? $_POST["buscarNome"] : "";

            $sql = "SELECT idContato, upper(nomeContato) as nomeContato,
           lower(emailContato) as emailContato,
           telefoneContato,
           DATE_FORMAT(dataAgendamento,'%d/%m/%Y') as dataAgendamento,
           horarioAgendamento,
           upper(servico) as servico,
           FORMAT(valorServico, '2', 'pt-BR') as valorServico
        FROM tbcontatos WHERE idContato ='{$pesquisarNome}' or
        nomeContato like '%{$pesquisarNome}%' order by nomeContato ASC
        LIMIT {$inicio}, {$quantidadeContatoPagina}
        ";

            $rs = mysqli_query($conexao, $sql) or die("Erro ao realizar a consulta" . mysqli_error($conexao));
            while ($dados = mysqli_fetch_assoc($rs)) {
            ?>
                <tr>
                    <td><?= $dados["idContato"] ?></td>
                    <td class="text-nowrap"><?= $dados["nomeContato"] ?></td>
                    <td><?= $dados["telefoneContato"] ?></td>
                    <td><?= $dados["dataAgendamento"] ?></td>
                    <td><?= $dados["horarioAgendamento"] ?></td>
                    <td><?= $dados["servico"] ?></td>
                    <td><?= $dados["valorServico"] ?></td>
                </tr>
            <?php
            };
            ?>
        </tbody>

    </table>
</div>
<br>

<?php
// CRIANDO PÁGINAÇÃO DOS CONTATOS

$sqlTotal = "SELECT idContato FROM tbcontatos";
$qrTotal = mysqli_query($conexao, $sqlTotal) or die("ERRO ao consultar as paginas" . mysqli_error($conexao));
$numTotal = mysqli_num_rows($qrTotal);
$totalPagina = ceil($numTotal / $quantidadeContatoPagina);

echo '<li class="page-item"><a class= "page-link" href="?menuop=agendamentos&pagina=1">Primeira Página</a></li>';



if ($pagina > 6) {
?>

    <li class="page-item"><a class="page-link" href="?menuop=agendamentos&pagina=<?php echo $pagina - 1 ?>"> << </a></li>";
        <?php
    }
    //Criando as setinhas para pular de pagina

    for ($i = 1; $i <= $totalPagina; $i++) {

        if ($i >= ($pagina - 5) && $i <= ($pagina + 5)) {
            if ($i == $pagina) {
                echo $i;
            } else {
                echo "<li class='page-item'><a class='page-link' href=\"?menuop=agendamentos&pagina=$i\"> $i </a></li> ";
            }
        }
    }
    if ($pagina < ($totalPagina - 5)) {
        ?>

            <li class="page-item"><a class="page-link" href="?menuop=agendamentos&pagina=<?php echo $pagina + 1 ?>"> >> </a></li>";
        <?php
    }
    echo "<li class='page-item'><a class= 'page-link' href=\"?menuop=agendamentos&pagina=$totalPagina\"> Ultima Página</a> </li>";
        ?>