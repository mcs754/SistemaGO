<?php
/*
* @marcosvha
* Desenvolvido por Marcos Fernandes para o desafio da programação da Jornada Labs Havan 2021
* Essa página refere-se ao relatório dos registros de operações que estão salvas no banco de dados */
include 'navbar.php'; ?>
<div class="container">
    <h4 class="mb-3">Relatório de operações de câmbio ordenado pelas datas</h4>
    <?php
    $a = new \App\Model\Cambio();
    $aDAO = new \App\DAO\CambioDAO();
    $cambios = $aDAO->pesquisar($a);
    if (count($cambios) > 0) {
    }
    ?>
    <div class="table-responsive-sm align-items-center">
        <table class="table table-sm table-striped table-hover table-bordered">
            <thead>
                <tr class="text-center">
                    <th>Cliente</th>
                    <th>Data</th>
                    <th>Valor original</th>
                    <th>Valor convertido</th>
                    <th>Taxa cobrada</th>
                    <th colspan="2">Ações</th>
                </tr>
            </thead>
            <?php
            foreach ($cambios as $cambio) {
                echo "<tr class='text-center'>";
                echo "<td class='text-start text-capitalize'>{$cambio->getNome_cliente()}</td>";
                //echo "<td class='text-start text-capitalize'>marcos vinicius pereira fernandes</td>";
                echo "<td>" . \App\Helper\Data::get($cambio->getData_cambio()) . "</td>";
                echo "<td class='text-end'>{$cambio->getValor_original()}</td>";
                echo "<td class='text-end'>{$cambio->getValor_convertido()}</td>";
                echo "<td class='text-end'>{$cambio->getTaxa_cobrada()}</td>";
                echo "<td><a class='text-success' title='Imprimir' href='#'><i class='bi bi-printer-fill'></i></a></td>";
                echo "<td><a class='text-danger' title='Excluir' href='#'><i class='bi bi-trash-fill'></i></a></td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>
</div>
</body>

<footer>

    <?php include 'footer.php'; ?>

</footer>

</html>