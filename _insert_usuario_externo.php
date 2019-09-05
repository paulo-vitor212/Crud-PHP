<?php 
    include 'conexao.php';
    include 'script/password.php';

    $nomeusuario = $_POST['nomeusuario'];
    $mail = $_POST['mailusuario'];
    $senha = $_POST['senhausuario'];
    //$nivel = $_POST['nivelusuario'];
    $status = 'Inativo';

    $sql = "INSERT INTO usuarios (nome_usuario, mail_usuario, senha_usuario, status) VALUES ('$nomeusuario','$mail',sha1('$senha'), '$status')";
    $inserir = mysqli_query($con, $sql);
    echo" <script> alert('Cadastrado com sucesso!'); </script>";
?>

<script>
    
    window.location.assign('cadastro_usuario_externo.php'); 
 </script>