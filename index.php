<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>form</title>
</head>
<body>
    <img src="imagens/cloud1.png" alt="nuvem" class="nuvens" id="nuvem1">
    <img src="imagens/cloud1.png" alt="nuvem" class="nuvens" id="nuvem2">
    <img src="imagens/cloud1.png" alt="nuvem" class="nuvens" id="nuvem4">
    <img src="imagens/cloud1.png" alt="nuvem" class="nuvens" id="nuvem5">
    <div class="box">
        <div id="formtxt">
            login
        </div>
        <form action="formulario.php" method="POST">
            <div class="inputBox">
                <input type="text" name="nome" placeholder="Nome" class="inputtxt">
            </div>
            <div class="inputBox">
                <input type="email" name="email" placeholder="Email" class="inputtxt">
            </div>
            <div class="inputBox">
                <input type="password" name="password" placeholder="Senha" class="inputtxt">
            </div>
            <div class="inputBox">
                <input type="text" name="telefone" placeholder="Telefone" class="inputtxt">
            </div>
            <input type="submit" value="login" id="btn">
        </form>
    </div>
</body>
</html>