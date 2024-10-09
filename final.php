<?php
session_start();

if (!isset($_SESSION['nome'])) {
    header('Location: login.php');
    exit();
}

$nome = $_SESSION['nome'];
$total = 0;
$especificacoes = [];

foreach ($_POST as $categoria => $itens) {
    if (is_array($itens)) {
        foreach ($itens as $item) {
            list($nomeItem, $valorItem) = explode('|', $item);
            $total += $valorItem;
            $especificacoes[] = $nomeItem . " - R$ " . $valorItem;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Resultado da Montagem</title>
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
                <h1>Montagem Final</h1>
                <h3>Cliente:<h3> <h4><?php echo $nome; ?></h4>
                <h3>Produtos Selecionados:</h3>
                <ul>
                    <?php foreach ($especificacoes as $especificacao): ?>
                        <li><?php echo $especificacao; ?></li>
                    <?php endforeach; ?>
                </ul>
                <h3>Valor Total: R$ <?php echo number_format($total, 2, ',', '.'); ?></h3>
            </div>

            <div class="entrar">
                <button>
                <a href="" target="_blank">
                    <strong>Finalizar</strong>
                </a>
                </button>

            </div>
        </div>
    </div>
</body>
</html>
