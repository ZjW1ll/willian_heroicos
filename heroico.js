const id = new URLSearchParams(window.location.search).get('id');

async function heroico() {
    const resposta = await fetch(`https://akabab.github.io/superhero-api/api/id/${id}.json`);

    const heroi = await resposta.json();

    console.log(heroi);

    const heroImg = document.getElementById('hero-img');
    heroImg.src = heroi.images.md;

    const name = document.getElementById('name');
    name.innerText = heroi.name;
    const fullname = document.getElementById('fullname');
    fullname.innerText = heroi.biography.fullName;

    const gender = document.getElementById('gender');
    gender.innerText = heroi.appearance.gender;
    const race = document.getElementById('race');
    race.innerText = heroi.appearance.race;

    const weight = document.getElementById('weight');
    weight.innerText = heroi.appearance.weight[1];
    const height = document.getElementById('height');
    height.innerText = heroi.appearance.height[1];

    const placeOfBirth = document.getElementById('place-of-birth');
    placeOfBirth.innerText = heroi.biography.placeOfBirth;
    const relatives = document.getElementById('relatives');
    relatives.innerText = heroi.connections.relatives;

    const powerstats = document.getElementById('stats-container');

    const icones = {
        intelligence: "fa-brain",
        strength: "fa-dumbbell",
        speed: "fa-person-running",
        durability: "fa-shield",
        power: "fa-bolt",
        combat: "fa-hand-fist"
    };

    Object.entries(heroi.powerstats).forEach(([status, valor]) => {

        const icone = icones[status];

        const stats = document.createElement("div");
        stats.classList.add("stats");

        const i = document.createElement("i");
        i.classList.add("fa-solid", icone);

        const progressBar = document.createElement("div");
        progressBar.classList.add("progress-bar");

        const nome = document.createElement("p");
        nome.textContent = status;

        const barra = document.createElement("progress");
        barra.value = valor;
        barra.max = 100;

        const valorStats = document.createElement("p");
        valorStats.textContent = valor;

        progressBar.appendChild(nome);
        progressBar.appendChild(barra);

        stats.appendChild(i);
        stats.appendChild(progressBar);
        stats.appendChild(valorStats);

        powerstats.appendChild(stats);
    });

    const firstAppearance = document.getElementById('first-appearance');
    firstAppearance.innerText = heroi.biography.firstAppearance;

    const aliases = document.getElementById('aliases');
    heroi.biography.aliases.forEach((alias) => {
        const p = document.createElement('p');
        p.classList.add('label');

        p.innerText = alias;

        aliases.appendChild(p);
    });
    
    //DC ou MARVEL para fundo e BOM ou MAL
    const publisher = heroi.biography.publisher;
    const alignment = heroi.biography.alignment;

    if (publisher === "Marvel Comics") {
    document.body.classList.add("marvel");
    }
    else if (publisher === "DC Comics") {
    document.body.classList.add("dc");
    }
    else {
    document.body.classList.add("other");
    }

    if (alignment === "good") {
    document.body.classList.add("hero");
    }
    else if (alignment === "bad") {
    document.body.classList.add("villain");
    }
    else {
    document.body.classList.add("hero");
    }

}

heroico();

