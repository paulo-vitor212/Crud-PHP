

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>ProjetoCrud</title>
  </head>
  <body>
    <div class="container p-10" style="margin-top: 100px">
        <div class="card">
            <div class="card-body">
              <h5 class="card-title">Formulário de Cadastro</h5>
              <p class="card-text">Aqui você irá encontrar um formulário de cadastro para inserir produtos ao seu sistema.</p>
              <div class="d-flex justify-content-end">
                <a href="cadastro.php" class="btn btn-primary d-flex justify-content-end">Cadastrar</a>
              </div>
            </div>
        </div>

        <div class="card mt-2">
            <div class="card-body">
              <h5 class="card-title">Seus Produtos</h5>
              <p class="card-text">Aqui você encontrar uma tabela com seus produtos, podendo edita-los, deleta-los ou adicionar um novo.</p>
              <div class="d-flex justify-content-end">
                <a href="listaProdutos.php" class="btn btn-primary d-flex justify-content-end">Listar</a>
              </div>
            </div>
        </div>

        
        <div class="card mt-2">
            <div class="card-body">
              <h5 class="card-title">Categoria</h5>
              <p class="card-text">Opção para adicionar categoria de produtos</p>
              <div class="d-flex justify-content-end">
                <a href="adicionar_categoria.php" class="btn btn-primary d-flex justify-content-end mr-5">Cadastrar Categoria</a>
                <a href="listaCategoria.php" class="btn btn-primary d-flex justify-content-end">Lista das Categorias</a>
              </div>
            </div>
        </div>

        <div class="card mt-2">
            <div class="card-body">
                <h5 class="card-title">Adicionar Fornecedor</h5>
                <p class="card-text">Opção para adicionar fornecedores.</p>
                <div class="d-flex justify-content-end">
                  <a href="adicionar_fornecedor.php" class="btn btn-primary d-flex justify-content-end mr-5">Cadastrar Fornecedores</a>
                  <a href="listaFornecedor.php" class="btn btn-primary d-flex justify-content-end">Lista dos Fornecedores</a>
                </div>
            </div>
        </div>

    
    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>