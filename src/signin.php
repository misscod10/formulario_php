<?php

// Connect to MySQL database
$servername = "db";
$username = "user1";
$password = "MaNF48Fc";
$dbname = "php";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create table if it doesn't exist
$sql = "CREATE TABLE IF NOT EXISTS login_data (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(30) NOT NULL,
    correu VARCHAR(50) NOT NULL,
    passwd VARCHAR(30) NOT NULL
)";

if (!mysqli_query($conn, $sql)) {
    echo "Error creating table: " . mysqli_error($conn);
} else {
	mysqli_query($conn, $sql);
}

// Insert form data into table if it doesn't already exist
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom"];
    $correu = $_POST["correu"];
    $passwd = $_POST["passwd"];

    $sql = "SELECT * FROM login_data WHERE nom='$nom' AND correu='$correu'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        header("Refresh: 3; url=login.html");
        echo "Cuenta ya creada, inicie sessión con su cuenta.";
        exit();
    } else {
        $sql = "INSERT INTO login_data (nom, correu, passwd) VALUES ('$nom', '$correu', '$passwd')";

        if (!mysqli_query($conn, $sql)) {
            echo "Error: " . mysqli_error($conn);
        } else {
            header("Refresh: 3; url=index.html");
            echo "Cuenta creada correctamente!";
            exit();
        }
    }
}

mysqli_close($conn);

?>
