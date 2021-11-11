<?php
include "header.php";
include "modalCliente.php";
require "../controller/clienteController.php"
?>

<body class="container-fluid">
    <h1>Cadastro de Clientes</h1>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#cadCliente">Cadastrar</button>
    <br>
    <br>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Código</th>
                <th scope="col">Nome</th>
                <th scope="col">Endereço</th>
                <th scope="col">Telefone</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($objcli = $dados->fetch_object()) {
            ?>
                <tr>
                    <th scope="row"><?php echo $objcli->codigo ?></th>
                    <td><?php echo $objcli->nome ?></td>
                    <td><?php echo $objcli->endereco ?></td>
                    <td><?php echo $objcli->telefone ?></td>
                    <td>Editar |

                        <a href="../controller/clienteController.php?id=<?php echo $objcli->codigo ?>&acao=Editar">
                            Excluir </a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>