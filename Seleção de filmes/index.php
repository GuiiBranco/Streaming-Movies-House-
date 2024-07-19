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
    <link rel="stylesheet" href="../Seleção de filmes/style.css">
    <script src="script.js" defer></script>
    <title>Movies House🍿</title>
</head>
<body>
    <nav class="fechado">
        <img src="https://pm1.aminoapps.com/7663/f29cd68273958186353a1a8619a5c14b405ad78er1-554-554v2_00.jpg" id="perfil">
        <img id="fecharmenu" src="img/Menu lateral.svg">
        <div> <a class="pes" href="#">Pesquisar</a> <img class="pes2" src="img/seta.png"> </div>
        <div> <a class="cat" href="#">Categorias</a> <img class="cat2" src="img/seta.png"> </div>
        <div> <a class="fav" href="#">Favoritos</a> <img class="fav2" src="img/seta.png"> </div>
        <div> <a class="min" href="#">Minhas Listas</a> <img class="min2" src="img/seta.png"> </div>
        <div> <a class="sai" href="#">Sair</a> <img class="sai2" src="img/seta.png"> </div>
        <div id="sombra"></div>
    </nav>

    <a class="menu">
            <img src="img/Menu lateral.svg">
    </a>

    <section>
        <span class="titulo">Guia de Novidades</span>
        <div class="sessao">
            <div class="navfilmes">
                <?php
                    foreach( $filmes as $filme ) {
                ?>
                    <div class="filme">
                        <img class="capa" src=" <?= $filme->capa; ?> ">
                    </div>
                <?php
                    }
                ?>
            </div>
        </div>
    </section>
    
    <section>
        <span class="titulo">Favoritos</span>
        <div class="sessao">
            <div class="navfilmes">
                <div class="filme">
                    <img src="">
                </div>
                <div class="filme">
                    <img src="">
                </div>
                <div class="filme">
                    <img src="">
                </div>
                <div class="filme">
                    <img src="">
                </div>
                <div class="filme">
                    <img src="">
                </div>
                <div class="filme">
                    <img src="">
                </div>
                <div class="filme">
                    <img src="">
                </div>
                <div class="filme">
                    <img src="">
                </div>
                <div class="filme">
                    <img src="">
                </div>
                <div class="filme">
                    <img src="">
                </div>
                <div class="filme">
                    <img src="">
                </div>
            </div>
        </div>
    </section>
</body>
</html>