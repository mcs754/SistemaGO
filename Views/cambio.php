<?php
/*
* @marcosvha
* Desenvolvido por Marcos Fernandes para o desafio da programação da Jornada Labs Havan 2021
* Essa página refere-se ao formulário de para criar uma operação única de câmbio de moedas que será salvo no banco de dados */
include 'navbar.php'; ?>
<form action="cambio.php" method="post">
    <div class="container">
        <h4 class="mb-3">Câmbio de moedas</h4>
        <?php
        if ($_POST) {
            $a = new \App\Model\Cambio();
            $a->setId_cliente($_POST['id_cliente']);
            $a->setMoeda_origem($_POST['moeda_origem']);
            $a->setMoeda_destino($_POST['moeda_destino']);
            $a->setValor_original($_POST['valor_original']);
            !empty($_POST['data_cambio']) ? $a->setData_cambio(\App\Helper\Data::set($_POST['data_cambio'])) : $a->setData_cambio(null);
            $origem = $a->getMoeda_origem(); //primeiro eu capturo o valor da moeda original
            $destino = $a->getMoeda_destino(); //depois capturo o valor da moeda de destino
            $valor = $a->getValor_original(); //e por último capturo o valor informado pelo usuário
            $converter = $valor * $origem; //converto o valor informado em reais que será a cifra padrão no sistema
            $convertido = $converter / $destino; //pego o valor convertido em reais e converto na moeda destino
            $taxa = $_POST['taxa_cobrada'] * $convertido; //aplicando o desconto de 10%
            //$saldo = $convertido - $desconto; //mensurando resultado final para apresentar na tela
            $a->setValor_convertido($convertido); //faço um set com valor convertido
            $a->setTaxa_cobrada($taxa); //faço um set com valor da taxa que será a monetização da empresa
            $aDAO = new \App\DAO\CambioDAO();
            if ($aDAO->inserir($a))
                echo "<div class='form-group alert alert-success'>Operação de câmbio registrada com sucesso!</div>";
        }
        ?>
        <small>
            <p>Os campos com <span class="text-danger">*</span> não podem estar em branco.</p>
        </small>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group mb-2">
                    <label for="id_cliente"><span class="text-danger">*</span> Selecione o cliente</label>
                    <select name="id_cliente" id="id_cliente" class="form-control" required>
                        <option disabled selected>Selecione</option>
                        <?php
                        $cli = new \App\Model\Cliente();
                        $aDAO = new \App\DAO\ClienteDAO();
                        $clientes = $aDAO->pesquisar($cli);
                        foreach ($clientes as $cliente) {
                            echo "<option value='{$cliente->getId_cliente()}'>{$cliente->getNome_cliente()}</option>";
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group mb-2">
                    <label for="taxa_cobrada"><span class="text-danger">*</span> Taxa de câmbio</label>
                    <select name="taxa_cobrada" id="taxa_cobrada" class="form-control" required>
                        <option selected value="0.1">10%</option>
                        <option disabled value="0.11">11%</option>
                        <option disabled value="0.12">12%</option>
                    </select>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="form-group mb-2">
                    <label for="moeda_origem"><span class="text-danger">*</span> Moeda de origem</label>
                    <select name="moeda_origem" id="moeda_origem" class="form-control" required>
                        <option disabled selected>Selecione</option>
                        <?php
                        $moe1 = new \App\Model\Moeda();
                        $aDAO1 = new \App\DAO\MoedaDAO();
                        $moedas1 = $aDAO1->pesquisar($moe1);
                        foreach ($moedas1 as $moeda) {
                            echo "<option value='{$moeda->getValor_moeda()}'>{$moeda->getNome_moeda()} ({$moeda->getCifra_moeda()})</option>";
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group mb-2">
                    <label for="moeda_destino"><span class="text-danger">*</span> Moeda de destino</label>
                    <select name="moeda_destino" id="moeda_destino" class="form-control" required>
                        <option disabled selected>Selecione</option>
                        <?php
                        $moe2 = new \App\Model\Moeda();
                        $aDAO2 = new \App\DAO\MoedaDAO();
                        $moedas2 = $aDAO2->pesquisar($moe2);
                        foreach ($moedas2 as $moeda) {
                            echo "<option value='{$moeda->getValor_moeda()}'>{$moeda->getNome_moeda()} ({$moeda->getCifra_moeda()})</option>";
                        }
                        ?>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="form-group mb-2">
                    <label for="data_cambio"><span class="text-danger">*</span> Data da operação</label>
                    <input type="date" class="form-control" id="data_cambio" name="data_cambio" required>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group mb-2">
                    <label for="valor_original"><span class="text-danger">*</span> Valor a ser convertido</label>
                    <input type="number" step="any" class="form-control" id="valor_original" name="valor_original" placeholder="0,0000" value="" required>
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