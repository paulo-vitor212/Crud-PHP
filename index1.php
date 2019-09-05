<?php
include 'conexao.php';
include 'password.php';

$usuario = $_POST['usuario'];
$senhausuario = $_POST['senha'];

$sql = "SELECT mail_usuario,senha_usuario FROM  usuarios WHERE mail_usuario = '$usuario' and status = 'Ativo'";
$buscar = mysqli_query($con, $sql);

$total = mysqli_num_rows($buscar);

while ($array = mysqli_fetch_array($buscar)){
        $senha = $array['senha_usuario'];
        $senhadecodificada = sha1($senhausuario);
    if($total > 0){
        if($senhadecodificada == $senha){
            session_start();
            $_SESSION['usuario'] = $usuario;
            header('Location: menu.php');
        }else{
            echo" <script> alert('Erro ao logar'); </script>";
        }
    }else{
        echo" <script> alert('Erro ao logar'); </script>";
    }

}

?>
<script>
    
    window.location.assign('index.php'); 
 </script>

