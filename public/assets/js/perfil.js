function mostrarMais() {
    document.querySelectorAll("#grupo-corpo .corpo .det span:first-child").forEach(el => {
        el.onclick = (e) => {

            det = el.parentNode;
            detalhes = det.parentNode
            conteudo = detalhes.parentNode
            corpo = conteudo.parentNode

            corpo.classList.toggle("expandir")
            if (corpo.classList.contains("expandir")) {
                det.lastElementChild.style.display = "block"
                det.firstElementChild.style.display = "none"
                corpo.lastElementChild.style.display = "block";
                corpo.lastElementChild.style.opacity = 1;
                let mostrarMenos = det.lastElementChild;
                mostrarMenos.onclick = () => {
                    det.lastElementChild.style.display = "none"
                    det.firstElementChild.style.display = "block"
                    corpo.classList.toggle("expandir")
                    corpo.lastElementChild.style.opacity = 0;
                    corpo.lastElementChild.style.display = "none";
                }
            } else {
                det.lastElementChild.style.display = "none"
                det.firstElementChild.style.display = "block"
            }

        }
    });
}

mostrarMais()