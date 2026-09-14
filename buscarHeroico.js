async function buscarHeroico() {
    const busca = document.getElementById("buscar_heroico").value.toLowerCase().trim();

    if(busca === "") {
        console.log("Escreva no campo de busca");
        return;
    }

    const resposta = await fetch("https://akabab.github.io/superhero-api/api/all.json");

    const herois = await resposta.json();

    const heroi = herois.find(heroi => heroi.name.toLowerCase() === busca);

    if(!heroi) {
        console.log("Informe um herói valido");
        return;
    }

    window.location.href = `heroico.php?id=${heroi.id}`;
}

const botaoBusca = document.getElementById("botaoBusca");

botaoBusca.addEventListener('click', buscarHeroico);