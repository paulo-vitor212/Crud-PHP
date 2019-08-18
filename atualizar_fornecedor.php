<?php
    include 'conexao.php';

    $id = $_GET['id'];
    $fornecedor = $_POST['fornecedor'];

    $sql = "UPDATE fornecedor SET fornecedor = '$fornecedor' WHERE id_fornecedor= {$id}";
    mysqli_query($con,$sql);

    echo" <script> alert('Atualizado com sucesso!' ); </script>";
    

?>

<script>
    
    window.location.assign('listafornecedor.php'); 
 </script>