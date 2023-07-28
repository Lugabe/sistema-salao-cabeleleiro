<?php

require("db/conexao.php");
?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>Cabeleleila Leila Salão De Beleza</title>
</head>

<body>
    <header>
        <div class="container">
            <h1>Salao Leila</h1>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="#"> </a>


                <div class="collapse navbar-collapse" id="conteudoNavBar">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active"><a class="nav-link" href="index.php?menuop=home">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php?menuop=agendamentos">Agendamentos</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php?menuop=contatos">Contatos</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php?menuop=cad-contato">Novo Contato</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php?menuop=controle">Controle</a></li>
                    </ul>

                </div>
            </nav>
        </div>
    </header>
    <hr>
    </hr>
    <main>
        <div class="container">

            <?php

            $menuop = (isset($_GET["menuop"])) ? $_GET["menuop"] : "home";

            switch ($menuop) {
                case 'home':
                    require("pages/home/home.php");
                    break;

                case "contatos":
                    require("pages/contatos/contatos.php");
                    break;

                case "agendamentos":
                    require("pages/agendamentos/agendamentos.php");
                    break;

                case "controle":
                    require("pages/controle/controle.php");
                    break;

                case "cad-contato":
                    require("pages/contatos/cad-contato.php");
                    break;

                case "inserir-contato":
                    require("pages/contatos/inserir-contato.php");
                    break;

                case "editar-contato";
                    require("pages/contatos/editar-contato.php");
                    break;

                case "atualizar-contato";
                    require("pages/contatos/atualizar-contato.php");
                    break;

                case "excluir-contato";
                    require("pages/contatos/excluir-contato.php");
                    break;

                default:
                    require("pages/home/home.php");
                    break;
            }
            ?>

            <body>

            </body>
        </div>
    </main>
    <footer class="container-fluid fixed-bottom bg-dark">
        <div class="text-center text-white">Sistema de agendamento para são de beleza. -- By Luis Gabriel -- V 1.0</div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
</body>

</html>