<?php
/*
* @marcosvha
* Desenvolvido por Marcos Fernandes para o desafio da programação da Jornada Labs Havan 2021
* Essa página refere-se à barra de navegação que ficará disponível em TODAS as telas sendo apenas um arquivo facilitando alterações futuras
*/ ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/Imagens/favicon.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"><?php //esse link acessa o framework de ícones do bootstrap. Decidi permitir que o sistema o acesse externamente e não localmente, pois utilizei poucos ícones e assim eu economizo espaço em disco no meu servidor?>
    <link rel="stylesheet" href="/vendor/twbs/bootstrap/dist/css/bootstrap.css"><?php //link de acesso local ao framework de css bootstrap. Utilizei tal framework para garantir responsividade do sistema?>
    <link rel="stylesheet" href="/style.css"><?php //link de acesso local aos meus códigos personalizados de css?>
    <title>Sistema Gerenciador de Operações</title>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <?php //os scrips acima acessam remotamente os framework de javascript do bootstrap necessário para que alguns efeitos visuais do supracitado framework funcione no navegador?>
    <?php include '../Vendor/autoload.php' ?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" title="Abrir tela inicial" href="home.php"><img height="25" src="/Imagens/brand.png"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" title="Abrir tela de câmbio" href="cambio.php">Câmbio</a>
                    </li>
                    <?php /* escondendo menu descartado, porém poderei devolvê-lo no futuro
                    <li class="nav-item">
                        <a class="nav-link" href="cliente.php">Cliente</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="moeda.php">Moeda</a>
                    </li>
                    */ ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" title="Abrir telas de cadastros">
                            Cadastros
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="cliente.php">Cliente</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="moeda.php">Moeda</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" title="Abrir telas de relatórios">
                            Relatórios
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="cambios.php">Câmbios</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>