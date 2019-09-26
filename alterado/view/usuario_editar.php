<?php
include "../cabecalho.php";
?>

    <div class="container" style="margin-top: 10%;">

        <h4>Editar Usuário</h4>

        <form method="post" action="../controllers/usuario.php?acao=atualizar">

            <input type="hidden" name="cod_user" value="<?= $_GET['cod_user'] ?>">

            <div class="form-group">
                <label for="name">Nome</label>
                <input value="<?= $dados_user['nome'] ?>" name="nome" type="text" class="form-control" id="name"  placeholder="digite seu nome">
            </div>


            <div class="form-group">
                <label for="email">E-mail</label>
                <input value="<?= $dados_user['email'] ?>" name="email" type="email" class="form-control" id="email"  placeholder="digite seu email">
            </div>

            <div class="form-group">
                <label for="cod_user">Código de usuario</label>
                <input value="<?= $dados_user['cod_user'] ?>" name="cod_user" type="number" class="form-control" id="email"  placeholder="digite seu email">
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input value="<?= $dados_user['senha'] ?>" name="senha" type="password" class="form-control" id="password" placeholder="digite sua senha">
            </div>

            <button type="submit" class="btn btn-success">Submit</button>
        </form>


    </div>

</body>
</html>