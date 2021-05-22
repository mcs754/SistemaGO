<?php
/*
* @marcosvha
* Desenvolvido por Marcos Fernandes para o desafio da programação da Jornada Labs Havan 2021
* Essa página refere-se formulário para cadastrar uma nova moeda no banco de dados */
include 'navbar.php'; ?>
<form action="moeda.php" method="post">

    <div class="container">
        <h4 class="mb-3">Cadastro de moedas</h4>
        <?php
        if ($_POST) {
            $a = new \App\Model\Moeda();
            $a->setCifra_moeda($_POST['cifra_moeda']);
            $a->setNome_moeda($_POST['nome_moeda']);
            $a->setValor_moeda($_POST['valor_moeda']);
            $aDAO = new \App\DAO\MoedaDAO();
            if ($aDAO->inserir($a))
                echo "<div class='form-group alert alert-success'>Moeda cadastrada com sucesso!</div>";
        }
        ?>
        <small>
            <p>Os campos com <span class="text-danger">*</span> não podem estar em branco.</p>
        </small>
        <div class="row">
            <div class="col-md-2">
                <div class="form-group mb-2">
                    <label for="cifra_moeda"><span class="text-danger">*</span> Cifra da moeda</label>
                    <input type="text" class="form-control" id="cifra_moeda" name="cifra_moeda" placeholder="Ex: BRL" value="" required>
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group mb-2">
                    <label for="nome_moeda"><span class="text-danger">*</span> Nome da moeda</label>
                    <input type="text" class="form-control" id="nome_moeda" name="nome_moeda" placeholder="Ex: Real" value="" required>
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group mb-2">
                    <label for="valor_moeda"><span class="text-danger">*</span> Valor da moeda</label>
                    <input type="number" step="any" class="form-control" id="valor_moeda" name="valor_moeda" placeholder="BRL 0,0000" value="" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="d-grid gap-2 d-md-block">
                <button type="submit" class="btn btn-success btn-block" type="button">Cadastrar</button>
                <a type="link" class="btn btn-outline-secondary btn-block" href="home.php">Cancelar</a>
            </div>
        </div>

</form>
</body>

<footer>

    <?php include 'footer.php'; ?>

</footer>

</html>
