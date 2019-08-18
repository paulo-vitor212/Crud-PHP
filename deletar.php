<?php 


    include 'conexao.php';

    $id = $_GET['id'];

    $sql = "select Produto from listaprodutos where id = {$id}";
    $produto =  mysqli_query($con,$sql);
    
    $sql = "DELETE from listaprodutos WHERE NroProduto = {$id}";

    $deletar = mysqli_query($con,$sql);

    mysqli_close($con);

    echo" <script> alert('Deletado Com sucesso!'); </script>";
?>

    
    <script>
        window.location.assign('listaProdutos.php'); 
     </script>