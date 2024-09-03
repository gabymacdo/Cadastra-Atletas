<?php
// listar_atletas.php

// Conexão com o banco de dados
$host = 'localhost'; 
$dbname = 'cadastroatletas';
$username = 'root';
$password = ''; 

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Não foi possível conectar ao banco de dados: " . $e->getMessage());
}

// Consultar todos os atletas
$sql = 'SELECT * FROM atletas';
$statement = $pdo->prepare($sql);
$statement->execute();
$atletas = $statement->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Listar Atletas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Lista de Atletas</h1>
    </header>
    <div class="main-content">
        <div class="container">
            <a href="cadastro_atletas.php">Cadastrar Novo Atleta</a>
            <table border="1">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Instituição</th>
                        <th>RG</th>
                        <th>Matrícula</th>
                        <th>Sexo</th>
                        <th>Modalidades</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($atletas as $atleta): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($atleta['id']); ?></td>
                            <td><?php echo htmlspecialchars($atleta['nome']); ?></td>
                            <td><?php echo htmlspecialchars($atleta['instituicao']); ?></td>
                            <td><?php echo htmlspecialchars($atleta['rg']); ?></td>
                            <td><?php echo htmlspecialchars($atleta['matricula']); ?></td>
                            <td><?php echo htmlspecialchars($atleta['sexo']); ?></td>
                            <td><?php echo htmlspecialchars($atleta['modalidade']); ?></td>
                            <td>
                                <a href="editar_atleta.php?id=<?php echo urlencode($atleta['id']); ?>">Editar</a>
                                <a href="excluir_atleta.php?id=<?php echo urlencode($atleta['id']); ?>" onclick="return confirm('Tem certeza que deseja excluir?');">Excluir</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>