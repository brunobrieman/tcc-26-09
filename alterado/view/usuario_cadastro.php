
<?php
 include "../cabecalho.php";
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <title>Hello, world!</title>
</head>
<body>

        <br>
        <br>

    <div class="container" id="form" style="margin-top: 5%;">
            <center><h3>Cadastro de usuário:
            Página Nupe</h3></center>
        <form method="post" action="../controllers/usuario.php?acao=salvar">
            <div class="form-group"/>
                <label for="name">Nome</label>
                <input name="nome" type="text" class="form-control" id="name"  placeholder="digite seu nome">
            </div>
            <div class="form-group">
                <label for="email">E-mail</label>
                <input name="email" type="email" class="form-control" id="email"  placeholder="digite seu email">
            </div>
            
              <div class="form-group">
                <label for="exampleFormControlSelect1">Tipo de usuário</label>
                <select  name="codTipuser" class="form-control" id="exampleFormControlSelect1">
                  <option value="1">Nupe</option>
                  <option value="2">Portaria</option>
                  <option value="3">Professor</option>
                  <option value="4">Discente</option>
                  <option value="5">Externo</option>
                </select>
              </div>
            <div class="form-group">
                <label for="login">Login</label>
                <input name="login" type="text" class="form-control" id="password" placeholder="digite seu login">
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
</body>
</html>