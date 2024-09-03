<?php
$host = 'localhost'; 
$dbname = 'cadastroatletas';
$username = 'root';
$password = ''; 

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
} else {
    echo "Conexão bem-sucedida ao banco de dados!";
}
$conn->close();
?>