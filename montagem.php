<?php
session_start();

if (!isset($_SESSION['email'])) {
    header('Location: login.php');
    exit();
}

$tipo = $_GET['tipo'];
$opcoes = [
    'notebook' => [
        'CPU' => [ ['Intel i5', 1600], ['Intel i7', 1800], ['AMD Ryzen 7', 1300], ['AMD Ryzen 5', 3000] ],
        'MEMÓRIA' => [ ['8GB', 500], ['16GB', 780], ['32GB', 1100], ['64GB', 1400] ],
        'ARMAZENAMENTO' => [ ['256GB SSD', 500], ['512GB SSD', 800], ['1TB HD', 400], ['2TB SSD', 1150] ],
        'SISTEMA' => [ ['Windows 10', 600], ['Linux', 30] ]
    ],
    'desktop' => [
        'CPU' => [ ['Intel i5', 1600], ['Intel i7', 1800], ['AMD Ryzen 7', 1300], ['AMD Ryzen 5', 3000] ],
        'MEMÓRIA' => [ ['8GB', 500], ['16GB', 780], ['32GB', 1100], ['64GB', 1400] ],
        'ARMAZENAMENTO' => [ ['256GB SSD', 500], ['512GB SSD', 800], ['1TB HD', 400], ['2TB SSD', 1150] ],
        'MONITOR' => [ ['Full HD', 750], ['4K', 2400], ['Curvo', 1600], ['UltraWide', 1900] ],
        'SISTEMA' => [ ['Windows 10', 600], ['Linux', 30] ]
    ]
];
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Montagem de Equipamento</title>
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

            <div class="montagem">

                <h2>Montagem de <?php echo ucfirst($tipo); ?></h2>
                <form method="POST" action="final.php">
                    <?php foreach ($opcoes[$tipo] as $categoria => $itens): ?>
                        <h3><?php echo $categoria; ?></h3>
                        <?php foreach ($itens as $item): ?>
                            <label>
                                <input type="checkbox" name="<?php echo $categoria; ?>[]" 
                                    value="<?php echo $item[0] . '|' . $item[1]; ?>">
                                <?php echo $item[0] . " - R$ " . $item[1]; ?>
                            </label><br>
                        <?php endforeach; ?>
                    <?php endforeach; ?>
            </div>

            <div class="entrar">
                <button type="submit"><strong>Finalizar Compra</strong></button>
            </div>

                </form>
        </div>
        
    </div>  
</body>
</html>
