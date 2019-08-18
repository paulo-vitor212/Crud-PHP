


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
  </head>
  <body>
        <div class="container border p-4"  style="margin-top: 40px; width: 500px">

        <?php 
            include 'conexao.php';
            $id = $_GET['id'];
        ?>
            <form action="atualizar_fornecedor.php<?php echo'?id='.$id;?>" method="post">
                <label>Formulário de fornecedor</label>
                <hr class="mb-5" style="margin-top: -5px;">
                <div class="form-group">

                    <?php 
                        $sql = "Select fornecedor from fornecedor where id_fornecedor = {$id}";
                        $buscar = mysqli_query($con,$sql);

                        while($array = mysqli_fetch_array($buscar)){
                              $resultado = $array['fornecedor'];  
                    ?>
                    <label>Nome Antigo: <?php echo $resultado; ?> </label>
                    <?php } ?>
                    <input type="text" name="fornecedor" value="" class="form-control">
                </div>
                <div class="d-flex justify-content-between">
                    <a href="menu.php" role="button" class="btn btn-secondary text-light btn-sm">voltar</a>
                    <button type="submit" class="btn btn-primary text-light btn-sm"><i class="fas fa-edit text-secondary text-light p-2"></i>Editar</button>
                </div>
            </form>

        </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
