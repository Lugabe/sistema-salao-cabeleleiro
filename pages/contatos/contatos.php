<header>
    <h3><i class="bi bi-person-bounding-box"></i>Contatos</h3>
</header>
<div>
    <a class="btn btn-secondary mb-2" href="index.php?menuop=cad-contato"><i class="bi bi-person-add"></i>Novo Contato</a>
</div>
<div>
    <form action="index.php?menuop=contatos" method="post">
        <div class="input-group ">
            <input class="form-control bg-secondary text-white" type="text" name="buscarNome" placeholder="Buscar contato..">
            <button class="btn btn-success btn mb-2 " type="submit" value="Pesquisar Nome"><i class='bi bi-search'></i> Pesquisar</button>
        </div>

    </form>
</div>
<table class="table table-dark table-hover table-bordered table-sm">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Telefone</th>
            <th>Editar</th>
            <th>Excluir</th>

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
                <td class="text-nowrap"><?= $dados["emailContato"] ?></td>
                <td><?= $dados["telefoneContato"] ?></td>
                <td class="text-center"><a class="btn btn-warning btn-sm" href="index.php?menuop=editar-contato&idContato=<?= $dados["idContato"] ?>"><i class="bi bi-pencil-square"></i></a> </td>
                <td class="text-center"><a class="btn btn-danger btn-sm" href="index.php?menuop=excluir-contato&idContato=<?= $dados["idContato"] ?>"><i class="bi bi-trash"></i></a> </td>

            </tr>
        <?php
        };
        ?>
    </tbody>

</table>

<br>

<ul class="pagination">

    <?php
    // CRIANDO PÁGINAÇÃO DOS CONTATOS

    $sqlTotal = "SELECT idContato FROM tbcontatos";
    $qrTotal = mysqli_query($conexao, $sqlTotal) or die("ERRO ao consultar as paginas" . mysqli_error($conexao));
    $numTotal = mysqli_num_rows($qrTotal);
    $totalPagina = ceil($numTotal / $quantidadeContatoPagina);

    echo '<li class="page-item"><a class= "page-link" href="?menuop=contatos&pagina=1">Primeira Página</a></li>';

    if ($pagina > 6) {
    ?>


        <li class="page-item"> <a class="page-link" href="?menuop=contatos&pagina=<?php echo $pagina - 1 ?>">
                << </a>"</li>;
    <?php
    }
    //Criando as setinhas para pular de pagina

    for ($i = 1; $i <= $totalPagina; $i++) {

        if ($i >= ($pagina - 5) && $i <= ($pagina + 5)) {
            if ($i == $pagina) {
                echo $i;
            } else {
                echo "<li class='page-item'><a class='page-link' href=\"?menuop=contatos&pagina=$i\"> $i </a></li> ";
            }
        }
    }
    if ($pagina < ($totalPagina - 5)) {
    ?>

        <li class="page-item"><a class="page-link" href="?menuop=contatos&pagina=<?php echo $pagina + 1 ?>"> >> </a></li>";
    <?php
    }
    echo "<li class='page-item'><a class= 'page-link' href=\"?menuop=contatos&pagina=$totalPagina\"> Ultima Página</a> </li>";
    ?>
</ul>