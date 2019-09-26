
<?php
include "../cabecalho.php";
?>

<body>

    <div class="container" style="margin-top:10%;">

        <h4>Listagem de Usuários:</h4>

        <a class="btn btn-success" href="../controllers/usuario.php?acao=cadastrar">Cadastrar novo</a>

        <table class="table" style="margin-top: 25px">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Login</th>
                
            </tr>
            </thead>
            <tbody>

                <?php foreach ($listaUsuarios as $usuario): ?>

                <tr>
                    <th scope="row"><?= $usuario->cod_user; ?></th>
                    <td><?= $usuario->nome; ?></td>
                    <td><?= $usuario->email; ?></td>
                    <td><?= $usuario->login; ?></td>
                    <td>
                        <a class="btn btn-danger" href="http://localhost/IFaControl/teste_bruno/controllers/usuario.php?acao=editar&cod_user=<?= $usuario->cod_user ?>">editar</a>
                        <a class="btn btn-danger" href="http://localhost/IFaControl/teste_bruno/controllers/usuario.php?acao=excluir&cod_user=<?= $usuario->cod_user ?>">excluir</a>
                    </td>
                </tr>
                
                <?php endforeach; ?>

            </tbody>
        </table>

    </div>


</body>
</html>

