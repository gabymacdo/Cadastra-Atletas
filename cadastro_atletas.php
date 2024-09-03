<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Atletas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Cadastro de Atletas</h1>
    </header>
    <div class="main-content">
        <div class="container">
            <form action="processacadastro.php" method="POST" enctype="multipart/form-data">
                <label for="id">ID:</label>
                <input type="text" id="id" name="id">

                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome">

                <label for="instituicao">Instituição:</label>
                <input type="text" id="instituicao" name="instituicao">

                <label for="rg">RG:</label>
                <input type="text" id="rg" name="rg">

                <label for="matricula">Matrícula:</label>
                <input type="text" id="matricula" name="matricula">

                <label for="sexo">Sexo:</label>
                <input type="radio" id="masculino" name="sexo" value="Masculino">
                <label for="masculino">Masculino</label>
                <input type="radio" id="feminino" name="sexo" value="Feminino">
                <label for="feminino">Feminino</label>

                <label>Modalidades coletivas:</label><br>
                <div class="checkbox-group">
                    <div class="checkbox-item">
                        <input type="checkbox" id="basquete" name="modalidades[]" value="Basquete">
                        <label for="basquete">Basquete</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" id="futebol" name="modalidades[]" value="Futebol de Campo">
                        <label for="futebol">Futebol de Campo</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" id="futsal" name="modalidades[]" value="Futsal">
                        <label for="futsal">Futsal</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" id="handebol" name="modalidades[]" value="Handebol">
                        <label for="handebol">Handebol</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" id="tenis_mesa" name="modalidades[]" value="Tênis de mesa">
                        <label for="tenis_mesa">Tênis de mesa</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" id="voleibol" name="modalidades[]" value="Voleibol">
                        <label for="voleibol">Voleibol</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" id="volei_praia" name="modalidades[]" value="Vôlei de praia">
                        <label for="volei_praia">Vôlei de praia</label>
                    </div>
                    <div class="checkbox-item">
                        <input type="checkbox" id="xadrez" name="modalidades[]" value="Xadrez">
                        <label for="xadrez">Xadrez</label>
                    </div>
                </div>

                <label for="foto">Foto:</label>
                <input type="file" id="foto" name="foto">

                <button type="submit">Gravar</button>
                <button type="button" onclick="window.location.href='index.php';">Sair</button>
            </form>
        </div>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>
