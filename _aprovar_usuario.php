<?php
include 'conexao.php';

$id = $_GET['id'];
$nivel = $_GET['nivel'];

if($nivel == 1){
    $update = "UPDATE usuarios SET status = 'Ativo', nivel_usuario = 1 WHERE id_usuario = $id";
    $atualizacao = mysqli_query($con,$update);
    echo" <script> alert('Aprovado como Administrador'); </script>";
}
if($nivel == 2){
    $update = "UPDATE usuarios SET status = 'Ativo', nivel_usuario = 2 WHERE id_usuario = $id";
    $atualizacao = mysqli_query($con,$update);
    echo" <script> alert('Aprovado como funcionário'); </script>";
}
if($nivel == 3){
    $update = "UPDATE usuarios SET status = 'Ativo', nivel_usuario = 3 WHERE id_usuario = $id";
    $atualizacao = mysqli_query($con,$update);
    echo" <script> alert('Aprovado como conferente'); </script>";
}

?>

<script>
    
    window.location.assign('aprovar_usuario.php'); 
 </script>