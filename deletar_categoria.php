<?php 


    include 'conexao.php';

    $id = $_GET['id'];

    $sql = "select * from id_categoria where id = {$id}";
    $produto =  mysqli_query($con,$sql);
    
    $sql = "DELETE from categoria WHERE id_categoria = {$id}";

    $deletar = mysqli_query($con,$sql);

    mysqli_close($con);

    echo" <script> alert('Deletado Com sucesso!'); </script>";
?>

    
    <script>
        window.location.assign('listaCategoria.php'); 
     </script>