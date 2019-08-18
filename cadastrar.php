<?php
    include 'conexao.php';

    $nroProduto = $_POST['NroProduto'];
    $produto = $_POST['produto'];
    $categoria = $_POST['categoria'];
    $quantidade = $_POST['quantidade'];
    $fornecedor = $_POST['fornecedor'];

    $sql = "INSERT INTO listaprodutos (NroProduto, Produto, Categoria, Quantidade, Fornecedor) Values ($nroProduto,'$produto','$categoria',$quantidade,'$fornecedor')";
    $inserir = mysqli_query($con,$sql);
    echo" <script> alert('Cadastrado com sucesso!'); </script>";
    

?>

<script>
    
    window.location.assign('listaProdutos.php'); 
 </script>

