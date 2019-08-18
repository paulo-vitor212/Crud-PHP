<?php
    include 'conexao.php';

    $fornecedor = $_POST['fornecedor'];

    $sql = "INSERT INTO fornecedor (fornecedor) values ('$fornecedor')";

    $inserir = mysqli_query($con,$sql);

    echo" <script> alert('Adicionado com sucesso!'); </script>";
    

?>

<script>
    
    window.location.assign('listaFornecedor.php'); 
 </script>