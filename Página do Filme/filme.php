<?php
    require_once "../conexao.php";
    $sqlSelectFilmes = "SELECT * FROM filme";
    $stmt = $conexao -> query($sqlSelectFilmes);
    $filmes = $stmt -> fetchAll(PDO::FETCH_OBJ);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Página do Filme/style.css">
    <title>Document</title>
</head>
<body>
    <main>
        <a href="../Seleção de filmes/index.php">
            <img id="seta" src="img/seta.png">
        </a>
        <span id="nome">Nome do Filme</span>
        <span>Genero do Filme</span>
        <button>ASSISTIR</button>
        <div id="addListas">
            <a href="#"> <img src="img/Coração.svg"> </a>
            <a href="#"> <img src="img/Mais.svg"> </a>
        </div>
        <div id="desc">
        <p>
            "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
            ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
            laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
            velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
            sunt in culpa qui officia deserunt mollit anim id est laborum."
        </p>
    </div>
    </main>

    <div id="splashart">
        <div></div>
        <img id="background" src="https://cdn.vox-cdn.com/uploads/chorus_image/image/69281705/shrek4_disneyscreencaps.com_675.0.jpg">
        <img id="classificacao" src="img/L.jpg">
    </div>
</body>
</html>