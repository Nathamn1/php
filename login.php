<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $_SESSION['nome'] = $nome;
    $_SESSION['email'] = $email;

    header('Location: produto.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="Pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Americanas - tudo, a toda hora, em qualquer lugar :)</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="ico/icone.ico" type="image/x-icon">
</head>
<body>
    <div class="logo">
        <div class="foto">
            <img src="logo.jpg">
        </div>
    </div>

    <header>
    <div id="login">

        <div class="caixa">

            <div class="texto">
                <img src="img/boneco_login.jpg" alt="" width="20">
                <h2>login do cliente</h2>
                <p>Veja seus pedidos de forma fácil, compre mais rápido <br> e tenha uma experiência pernosalizada :)</p>
            </div>

            <form method="POST">

                <div class="nome">
                    <p>Nome</p>
                    <input type="text" name="nome" placeholder="" required>
                </div>


                <div class="email">
                    <p>e-mail</p>
                    <input type="email"  name="email" placeholder="" required>
                </div>

                <div class="senha">
                    <p>senha<a href="redefinir.html">redefinir senha</a></p>
                    <input type="password" name="senha" placeholder="" require>
                </div>

                <div class="entrar">
                    <button>
                        <a href="" target="_blank">
                        <strong>continuar</strong>
                        </a>
                    </button>

                </div>
            </form>
            <div class="final">
                <p>Não tem cadastro <a href="cadastre-se.html">cadastre-se</a></p>

            </div>

            <div class="final2">
                <p>Ao continuar com o acesso, você concorda com a<br> nossa <a href="politica.html">
                    politica de privacidade
                </a></p>

            </div>
            
        
        </div>

    </div>
    </form>
    </header>
</body>
</html>