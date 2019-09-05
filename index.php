

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>ProjetoCrud</title>

    <style>
        #tamanho{
            width:350px;
            margin-top: 100px;
            border: 2px solid #f3f3f3;
            -webkit-box-shadow: 10px 10px 28px 0px rgba(194,194,194,1);
            -moz-box-shadow: 10px 10px 28px 0px rgba(194,194,194,1);
            box-shadow: 10px 10px 28px 0px rgba(194,194,194,1);
        }
 

    </style>
  </head>
  <body>

    <div class="container" id="tamanho">
    <center>
        <img src="64572.png" width="125px" height="125px">
    </center>
        <form action="index1.php" method="post">
            <div class="form-group">
                <label for="">Usuário</label>
                <input type="text" name="usuario" class="form-control" placeholder="Usuário" required>
            </div>
            <div class="form-group">
                <label for="">Senha</label>
                <input type="password" name="senha" class="form-control" placeholder="Senha" required >
            </div>
        <div style="text-align: right;">
            <button class="btn btn-sm btn-success"> Entrar</button>
        </div>
        </form>
        
    </div>
    
    <center style="padding-top:5px;">
        <p>Você não possui cadastro <a href="cadastro_usuario_externo.php">Clique Aqui.</a></p>
    </center>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>