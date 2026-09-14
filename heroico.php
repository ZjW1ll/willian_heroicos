<?php 



?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super heróicos</title>
</head>
<body>
    <header>
        <nav></nav>
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
                            <tr>Altura</tr>
                            <tr>Peso</tr>
                        </thead>
                        <tbody>
                            <td id="height"></td>
                            <td id="weight"></td>
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
                    <div class="stats">
                        ICON
                        <div class="progress-bar">
                            <p>Força</p>
                            <progress id="stats-bar" value="" max="100"></progress>
                        </div>
                        <p></p>
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