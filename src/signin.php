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
$sql = "CREATE TABLE IF NOT EXISTS login_data (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(30) NOT NULL,
    correu VARCHAR(50) NOT NULL,
    passwd VARCHAR(30) NOT NULL
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
    $passwd = $_POST["passwd"];

    $sql = "INSERT INTO login_data (nom, correu, passwd) VALUES ('$nom', '$correu', '$passwd')";

    if (!mysqli_query($conn, $sql)) {
        echo "Error: " . mysqli_error($conn);
    } else {
	mysqli_query($conn, $sql);
        echo "Cuenta creada correctamente!";
        header("Refresh: 2; url=index.html");
        exit();
    }
}

mysqli_close($conn);

?>