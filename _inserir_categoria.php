<?php
    include 'conexao.php';

    $categoria = $_POST['categoria'];

    $sql = "INSERT INTO categoria (categoria) values ('$categoria')";

    $inserir = mysqli_query($con,$sql);

    echo" <script> alert('Adicionado com sucesso!'); </script>";
    

?>

<script>
    
    window.location.assign('adicionar_categoria.php'); 
 </script>