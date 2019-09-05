<?php 

include 'conexao.php';

$id = $_GET['id'];
$deletar = "DELETE FROM usuarios WHERE id_usuario = $id";
$fila = mysqli_query($con,$deletar);
echo" <script> alert('Usuário deletado com sucesso'); </script>";


header("location: aprovar_usuario.php");
?>

