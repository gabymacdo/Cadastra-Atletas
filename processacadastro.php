<?php
include 'config.php';

// Receber dados do formulário
$nome = $_POST['nome'];
$instituicao = $_POST['instituicao'];
$rg = $_POST['rg'];
$matricula = $_POST['matricula'];
$sexo = $_POST['sexo'];
$modalidade = isset($_POST['modalidade']) ? implode(', ', $_POST['modalidade']) : '';
$foto = '';

// Processar o upload do arquivo de foto
if (isset($_FILES['foto']) && $_FILES['foto']['error'] == UPLOAD_ERR_OK) {
    $fileTmpPath = $_FILES['foto']['tmp_name'];
    $fileName = $_FILES['foto']['name'];
    $fileSize = $_FILES['foto']['size'];
    $fileType = $_FILES['foto']['type'];
    $fileNameCmps = explode('.', $fileName);
    $fileExtension = strtolower(end($fileNameCmps));
    
    // Defina o caminho para salvar a foto
    $uploadFileDir = './uploads/';
    $dest_path = $uploadFileDir . $fileName;
    
    if (move_uploaded_file($fileTmpPath, $dest_path)) {
        $foto = $fileName;
    } else {
        echo "Houve um erro ao fazer upload do arquivo. Por favor, tente novamente.";
        exit;
    }
}

// Inserir dados no banco
$sql = "INSERT INTO atletas (nome, instituicao, rg, matricula, sexo, modalidade, foto) 
        VALUES ('$nome', '$instituicao', '$rg', '$matricula', '$sexo', '$modalidade', '$foto')";

if ($conn->query($sql) === TRUE) {
    echo "Cadastro realizado com sucesso!";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>