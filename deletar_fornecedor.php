<?php 


    include 'conexao.php';

    $id = $_GET['id'];

    $sql = "select * from id_fornecedor where id = {$id}";
    $produto =  mysqli_query($con,$sql);
    
    $sql = "DELETE from fornecedor WHERE id_fornecedor = {$id}";

    $deletar = mysqli_query($con,$sql);

    mysqli_close($con);

    echo" <script> alert('Deletado Com sucesso!'); </script>";
?>

    
    <script>
        window.location.assign('listafornecedor.php'); 
     </script>