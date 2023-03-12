<?php

// Connect to MySQL database
$servername = "localhost";
$username = "user1";
$password = "MaNF48Fc";
$dbname = "php";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create table if it doesn't exist
$sql = "CREATE TABLE IF NOT EXISTS form_data (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(30) NOT NULL,
    correu VARCHAR(50) NOT NULL,
    url VARCHAR(50),
    data_hora DATETIME,
    mes DATE,
    setmana DATE,
    numero INT(2),
    telefon VARCHAR(15),
    cerca VARCHAR(30),
    color VARCHAR(10)
)";

if (!mysqli_query($conn, $sql)) {
    echo "Error creating table: " . mysqli_error($conn);
}

else {
	mysqli_query($conn, $sql);
}

// Insert form data into table
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom"];
    $correu = $_POST["correu"];
    $url = $_POST["url"];
    $data_hora = $_POST["data_hora"];
    $mes = $_POST["mes"];
    $setmana = $_POST["setmana"];
    $numero = $_POST["numero"];
    $telefon = $_POST["telefon"];
    $cerca = $_POST["cerca"];
    $color = $_POST["color"];

    $sql = "INSERT INTO form_data (nom, correu, url, data_hora, mes, setmana, numero, telefon, cerca, color)
    VALUES ('$nom', '$correu', '$url', '$data_hora', '$mes', '$setmana', '$numero', '$telefon', '$cerca', '$color')";

    if (!mysqli_query($conn, $sql)) {
        echo "Error: " . mysqli_error($conn);
    } else {
	mysqli_query($conn, $sql);
        echo "Formulario de amigo enviado, recibira una respuesta oficial en un palazo de 5 dias laborables";
        header("Refresh: 5; url=login.html");
    }
}

mysqli_close($conn);

?>

