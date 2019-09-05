<?php 
    include 'conexao.php';
    include 'script/password.php';

    $nomeusuario = $_POST['nomeusuario'];
    $mail = $_POST['mailusuario'];
    $senha = $_POST['senhausuario'];
    $nivel = $_POST['nivelusuario'];
    $status = 'Ativo';

    $sql = "INSERT INTO usuarios (nome_usuario, mail_usuario, senha_usuario, nivel_usuario, status) VALUES ('$nomeusuario','$mail',sha1('$senha'),'$nivel', '$status')";
    $inserir = mysqli_query($con, $sql);
    echo" <script> alert('Adicionado com sucesso!'); </script>";
?>

<script>
    
    window.location.assign('cadastro_usuario.php'); 
 </script>