<?php
/*
* @marcosvha
* Desenvolvido por Marcos Fernandes para o desafio da programação da Jornada Labs Havan 2021
* Essa página refere-se formulário para cadastrar um novo cliente no banco de dados */
include 'navbar.php'; ?>

<form action="cliente.php" method="post">

    <div class="container">
        <h4 class="mb-3">Cadastro de clientes</h4>
        <?php
        if ($_POST) {
            $a = new \App\Model\Cliente();
            $a->setNome_cliente($_POST['nome_cliente']);
            $aDAO = new \App\DAO\ClienteDAO();
            if ($aDAO->inserir($a))
                echo "<div class='form-group alert alert-success'>Cliente cadastrado com sucesso!</div>";
        }
        ?>
        <div class="row">
            <small>
                <p>Os campos com <span class="text-danger">*</span> não podem estar em branco.</p>
            </small>

            <div class="col-md-6">
                <div class="form-group mb-2">
                    <label for="nome"><span class="text-danger">*</span> Nome do cliente</label>
                    <input type="text" class="form-control" id="nome_cliente" name="nome_cliente" placeholder="Ex: Luciano Hang" value="" required>
                </div>
            </div>

            <div class="row">
                <div class="d-grid gap-2 d-md-block">
                    <button type="submit" class="btn btn-success btn-block" type="button">Cadastrar</button>
                    <a type="link" class="btn btn-outline-secondary btn-block" href="home.php">Cancelar</a>
                </div>
            </div>
        </div>
</form>

</body>

<footer>

    <?php include 'footer.php'; ?>

</footer>