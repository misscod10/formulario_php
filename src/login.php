<?php

// Conexión a la base de datos
$servername = "localhost";
$username = "user1";
$password = "MaNF48Fc";
$dbname = "php";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Comprobar la conexión
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Comprobar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom"];
    $correu = $_POST["correu"];
    $passwd = $_POST["passwd"];

    // Comprobar si las credenciales son válidas
    $sql = "SELECT * FROM login_data WHERE nom = '$nom' AND correu = '$correu' AND passwd = '$passwd'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // Las credenciales son válidas, redirigir a index.html
        header("Location: index.html");
        exit();
    } else {
        // Las credenciales son incorrectas, mostrar mensaje y redirigir al formulario
        echo "Credenciales incorrectas, por favor inténtelo de nuevo.";
        header("Refresh: 5; url=formulario.php");
        exit();
    }
}

mysqli_close($conn);

?>