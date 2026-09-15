<?php

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Heroicos</title>

    <link rel="stylesheet" href="style.css">

    <script type="module" src="buscarHeroico.js" defer></script>

    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.min.css"
>
</head>

<body class="index-page">

    <main class="search-page">

        <div class="search-container">

            <h1>Heroicos</h1>

            <p>Pesquise por um herói ou vilão</p>

            <div class="search-box">

                <input
                    type="text"
                    name="buscar_heroico"
                    id="buscar_heroico"
                    placeholder="Digite o nome do personagem..."
                    autocomplete="off"
                >

                <button id="botaoBusca">
                    <i class="fa-solid fa-magnifying-glass"></i>
                    Buscar
                </button>

            </div>

        </div>

    </main>

</body>

</html>