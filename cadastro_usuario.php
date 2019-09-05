

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <title>ProjetoCrud</title>

    <style>
        #tamanho{
            width:350px;
            margin-top: 100px;
            padding-bottom: 15px;
            border: 2px solid #f3f3f3;
            -webkit-box-shadow: 10px 10px 28px 0px rgba(194,194,194,1);
            -moz-box-shadow: 10px 10px 28px 0px rgba(194,194,194,1);
            box-shadow: 10px 10px 28px 0px rgba(194,194,194,1);
        }
 

    </style>
  </head>
  <body>

    <div class="container" id="tamanho">
        <div class="justify-content-start">
            <a href="menu.php" class="btn btn-secondary btn-sm active fas fa-arrow-circle-left" role="button" aria-pressed="true"></a>
        </div>
    <center>
        <img src="cada5.png" width="125px" height="125px">
    </center>
        <form action="_insert_usuario.php" method="POST">
            <div class="form-group">
                <label for="">Nome do Usuário</label>
                <input type="text" name="nomeusuario" class="form-control" placeholder="Nome Completo" autocomplete="off" required >
            </div>
            <div class="form-group">
                <label for="">E-mail</label>
                <input type="email" name="mailusuario" class="form-control" placeholder="Seu e-mail" autocomplete="off" required >
            </div>
            <div class="form-group">
                <label for="">Senha</label>
                <input type="password" name="senhausuario" id="txtSenha" class="form-control" placeholder="Sua senha aqui"  autocomplete="off" required>
            </div>
            <div class="form-group">
                <label for="">Repetir Senha</label>
                <input type="password" name="senhausuario2" class="form-control" placeholder="Repetir Senha"  autocomplete="off" oninput="validaSenha(this)" required>
                <small>Precisa ser igual a senha digitada a cima.</small>
            </div>
            <div class="form-group">
                <label for="">Nível de Acesso</label>
                <select name="nivelusuario" id="" class="form-control">
                    <option value="1">Administrador</option>
                    <option value="2">Funcionário</option>
                    <option value="3">Conferente</option>
                </select>
            </div>
            <div style="text-align: right;">
                <button class="btn btn-sm btn-success"> Cadastrar</button>
            </div>
        </form>
        
    </div>


    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
        function validaSenha (input){ 
            if (input.value != document.getElementById('txtSenha').value) {
                input.setCustomValidity('Repita a senha corretamente');
            } else {
                input.setCustomValidity('');
            }
        }   
    </script>
  </body>
</html>