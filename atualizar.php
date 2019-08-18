<?php
    include 'conexao.php';

    //$getID = $_GET['id'];

    
    $nroProduto = $_POST['nroproduto'];
    $produto = $_POST['produto'];
    $categoria = $_POST['categoria'];
    $quantidade = $_POST['quantidade'];
    $fornecedor = $_POST['fornecedor'];
    //$sql = "UPDATE listaprodutos SET Produto = '{$produto}', Categoria = '{$categoria}', Quantidade = {$quantidade}, Fornecedor = '{$fornecedor}' WHERE NroProduto = {$getID}";
    $sql = "UPDATE listaprodutos SET Produto = '$produto', Categoria = '$categoria', Quantidade = $quantidade, Fornecedor ='$fornecedor' WHERE NroProduto = $nroProduto";
    mysqli_query($con,$sql);

    echo" <script> alert('Atualizado com sucesso!' ); </script>";
    

?>

<script>
    
    window.location.assign('listaProdutos.php'); 
 </script>