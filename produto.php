<?php
session_start();

if (!isset($_SESSION['nome'])) {
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Selecione seu Produto</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="logo">
        <div class="foto">
            <img src="logo.jpg">
        </div>
    </div>

    <div id="login">
        
        <div class="caixa">
            <div class="email">

                <h2>Olá, <?php echo $_SESSION['nome']; ?> seja vem vindo(a) as americanas!</h2>
                <h3>O QUE VOCÊ DESEJA COMPRAR? CLIQUE NA FIGURA!</h5>
                <a href="montagem.php?tipo=notebook">
                    <img src="notebook.jpeg" alt="Notebook" style="width:200px;height:auto;">
                </a>
                <a href="montagem.php?tipo=desktop">
                    <img src="desktop.jpeg" alt="Desktop" style="width:200px;height:auto;">
                </a>
            </div>
        </div>
    </div>
</body>
</html>
