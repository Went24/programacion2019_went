var sitioweb = {
    titulo: "cinema",
    subtitle: "Diseno y desarrollo web",
    color: "azul",
    tienelogo: false,
    creador: "Wentchelle",
    ano: 2019,
    servidor: "Creation de sitio web"

}

document.title = sitioweb.titulo + "-" + sitioweb.subtitulo;

// Mostrar informacion del sito en la pagina
var h1 = document.querySelector("#info");

console.log(h1);
h1.innerHTML = "sitio web creado por " + sitioweb.creador + "el ano" + sitioweb.ano;
