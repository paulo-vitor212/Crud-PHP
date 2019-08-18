
<?php
    $con = mysqli_connect("localhost", "root", "", "clientes");

    if (!$con) {
        echo "Erro na conexão com o banco de dados." . PHP_EOL;
        echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }

    "Banco de dados conectado com sucesso!." . PHP_EOL;
    "Host information: " . mysqli_get_host_info($con) . PHP_EOL;

    // mysqli_close($con);
?>

