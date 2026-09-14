const id = new URLSearchParams(window.location.search).get('id');

async function heroico() {
    const resposta = await fetch(`https://akabab.github.io/superhero-api/api/id/${id}.json`);

    const heroi = await resposta.json();

    console.log(heroi);
}

heroico();