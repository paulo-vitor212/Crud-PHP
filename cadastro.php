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
    <div class="container p-10" style="margin-top: 100px">

        <div class="row">
            <div class="col-1">
                <div class="justify-content-start">

                    <a href="#" onclick=goBack() class="btn btn-secondary btn-lg active fas fa-arrow-circle-left" role="button" aria-pressed="true"></a>

                </div>
            </div>
            <div class="col">
                <div class="d-flex justify-content-center">
                    <h1 class="display-10">Formulário de Cadastro</h1>
                </div>  
            </div>
        </div>
        <hr>
        <form action="cadastrar.php" method="post" id="formulario">
            <div class="row">
                <div class="form-group col-4" >
                    <label>Nº do Produto</label>
                    <input name="NroProduto" type="number" required="true" class="form-control" placeholder="Ex: 0001" >
                </div>
                <div class="form-group col-8" >
                    <label>Nome do Produto</label>
                    <input name="produto" type="text" required="true" class="form-control" placeholder="Ex: Monitor">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-7" >
                    <label>Categoria</label>
                    <select class="form-group custom-select" required="true" name="categoria">
                        <option value="" disabled="disabled" selected>- Selecione -</option>
                            <?php 
                                include 'conexao.php';
                                $sql = "select * from categoria order by categoria ASC";
                                
                                $buscar = mysqli_query($con,$sql);
                                while ($array = mysqli_fetch_array($buscar)) {

                                    $id_categoria = $array['id_categoria'];
                                    $nome_categoria = $array['categoria'];
                                
                            ?>

                        <option> <?php  echo $nome_categoria;?> </option>

                        <?php } ?>

                    </select>
                </div>
                <div class="form-group col-5" >
                    <label>Quantidade</label>
                    <input name="quantidade" required="true" type="number" class="form-control" placeholder="Ex: 123">
                </div>
                <div class="form-group col-8" >
                    <select class="form-group custom-select" required="true" name="fornecedor">
                        <option value="" disabled="disabled" selected>- Selecione -</option>
                        <?php 
                                //include 'conexao.php';
                                $sql = "select * from fornecedor order by fornecedor ASC";
                                
                                $busca = mysqli_query($con,$sql);
                                while ($array = mysqli_fetch_array($busca)) {

                                    $id_fornecedor = $array['id_fornecedor'];
                                    echo $nome_fornecedor = $array['fornecedor'];
                                    
                                
                            ?>

                        <option> <?php  echo $nome_fornecedor;?> </option>

                        <?php } ?>
                    </select>
                </div>

                <div class="col-4" style="text-align:end; padding-top: 28px">
                    <button type="submit" class="btn btn-success">Enviar</button>
                </div>

            </div>
        </form>
    </div>
    <script>
        function goBack() {
            window.history.back();    
        }
    </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
