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
                    <h1 class="display-10">Aprovar Usuário</h1>
                </div>  
            </div>
        </div>

        <div>
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Nome Usuário</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Nível</th>
                    <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    
                        <?php

                            include 'conexao.php';
                            $sql = "select * from usuarios WHERE status = 'Inativo' ";
                            $busca = mysqli_query($con, $sql);

                            while ($array = mysqli_fetch_array($busca)) {
                                
                                $id_usuario = $array['id_usuario'];
                                $nomeusuario = $array['nome_usuario'];
                                $mail = $array['mail_usuario'];
                                $nivel = $array['nivel_usuario'];

                        ?> 

                                <tr>
                                    <th><?php echo $nomeusuario ?></th>
                                    <td><?php echo $mail ?></td>
                                    <td><?php echo $nivel ?></td>
                                   
                                    <!-- <td>
                                        <form action="" method="post">
                                            <div class="form-group">
                                            
                                                <select name="nivelusuario" id="" class="form-control">
                                                    <option value="1">Administrador</option>
                                                    <option value="2">Funcionário</option>
                                                    <option value="3">Conferente</option>
                                                </select>
                                            </div>

                                        </form>
                                    
                                    </td> -->


                                    <td>
                                        <div class="row">
                                            
                                            <div class="col" style="text-align:end">
                                                <a href="_aprovar_usuario.php?id=<?php echo $id_usuario ?>&nivel=1"><i class=" fas fa-check"></i>Administrador</a>
                                                <a href="_aprovar_usuario.php?id=<?php echo $id_usuario ?>&nivel=2"><i class=" fas fa-check"></i>Funcionario</a>
                                                <a href="_aprovar_usuario.php?id=<?php echo $id_usuario ?>&nivel=3"><i class=" fas fa-check"></i>Conferente</a>
                                            </div>
            
                                            <div class="col-4">
                                                <a href="_deletar_usuario.php?id=<?php echo $id_usuario ?>"><i class="fas fa-trash-alt text-danger"></i></a>
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
                <a class="font-weight-bold" href="cadastro_usuario_externo.php?"><i class="fas fa-plus-circle pr-2"></i>Inserir Novo Usuário</a>
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