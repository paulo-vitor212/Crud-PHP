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
                    <h1 class="display-10">Lista de fornecedor</h1>
                </div>  
            </div>
        </div>

        <div>
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Nome fornecedor</th>
                    <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    
                        <?php

                            include 'conexao.php';
                            $sql = "select * from fornecedor";
                            $buscar2 = mysqli_query($con, $sql);

                            while ($array = mysqli_fetch_array($buscar2)) {
                                
                                $id_fornecedor = $array['id_fornecedor'];
                                $fornecedor = $array['fornecedor'];

                        ?> 

                                <tr>
                                    <th><?php echo $fornecedor ?></th>

                                    <td>
                                        <div class="row">
                                            
                                            <div class="col-6">
                                                <a href="editar_fornecedor.php?id=<?php echo $id_fornecedor ?>"><i class="fas fa-edit text-secondary"></i></i></a>
                                            </div>

                                            <div class="col-6">
                                                <a href="deletar_fornecedor.php?id=<?php echo $id_fornecedor ?>"><i class="fas fa-trash-alt text-danger"></i></a>
                                            </div>
                                        </div>
                                    </td>
                        
                                </tr>     
                            
                            <?php } ?>
                    
                </tbody>

            </table>
        </div>

        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <a class="font-weight-bold" href="adicionar_fornecedor.php?"><i class="fas fa-plus-circle pr-2"></i>Inserir Nova fornecedor</a>
            </div>
        </div>
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