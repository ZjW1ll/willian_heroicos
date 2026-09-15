<?php 



?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super heróicos</title>
    <link rel="stylesheet" href="style.css">
    <script type="module" src="buscarHeroico.js"></script>
    <script type="module" src="heroico.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.min.css" integrity="sha512-QeR2VH+lsBE5LSAe1Q5EnTBbe7XTBubt8dG93Y7gidSgdMCr8nVqKcfKAMyN96SV8KDbZVTDXChatu5G2KQGzg==" crossorigin="anonymous" referrerpolicy="no-referrer">
</head>
<body class="hero-page">
    <header>
        <nav>
            <input type="text" name="buscar_heroico" id="buscar_heroico">
            <button id="botaoBusca">Buscar</button>
        </nav>
    </header>

    <main>
        <section class="heroes">
            <div class="top">
                <img src="" alt="" class="hero-img" id="hero-img">
                <div class="infos">
                    <h1 class="name" id="name"></h1>
                    <h3 class="fullname" id="fullname"></h3>

                    <div class="classification">
                        <p class="label gender" id="gender"></p>
                        <p class="label race" id="race"></p>
                    </div>

                    <table class="measurements">
                        <thead>
                            <tr>
                                <th>Altura</th>
                                <th>Peso</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td id="height"></td>
                                <td id="weight"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="personal-info">
                    <p class="place-of-birth" id="place-of-birth"></p>
                    <p class="relatives" id="relatives"></p>
                </div>
            </div>

            <div class="middle">
                <div class="powerstats">
                    <h2>Status</h2>
                    <div class="stats-container" id="stats-container">

                    </div>
                </div>

                <div class="card">
                    <h2>Primeira aparição</h2>
                    <p id="first-appearance" class="first-appearance"></p>
                </div>

                <div class="card">
                    <h2>Pseudônimos</h2>
                    <div class="aliases" id="aliases">
                        
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>
</html>