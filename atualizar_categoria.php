<?php
    include 'conexao.php';

    $id = $_GET['id'];
    $categoria = $_POST['categoria'];

    $sql = "UPDATE categoria SET categoria = '$categoria' WHERE id_categoria= {$id}";
    mysqli_query($con,$sql);

    echo" <script> alert('Atualizado com sucesso!' ); </script>";
    

?>

<script>
    
    window.location.assign('listaCategoria.php'); 
 </script>