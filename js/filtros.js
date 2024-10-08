const boxVagas = document.querySelectorAll(".vaga");

boxVagas.forEach(function (boxVaga) {
  boxVaga.addEventListener("click", function () {
    boxVagas.forEach(function (otherBoxVaga) {
      otherBoxVaga.classList.remove("active-vaga");
    });

    // Adicionar a classe apenas à li clicada
    boxVaga.classList.add("active-vaga");
  });
});

/*FUNCAO DE CLICK NA CAIXA DE VAGAS*/

document.addEventListener("DOMContentLoaded", function () {
  const detalhesVaga = document.getElementById("js-detalhesVaga");
  const seletorBox = detalhesVaga.querySelectorAll(".vaga");
  const seletorVaga = detalhesVaga.querySelectorAll(".id-do-post-01");
  const infosVagas = document.querySelectorAll(".right .cover-content");
  const TextoDeSelecaoDeVaga = document.getElementById("TextoDeSelecaoDeVaga");

  infosVagas.forEach(function (nameVaga) {
    nameVaga.style.display = "none";
    const cargoDaVaga = nameVaga.querySelector("h5").textContent;

    for (let i = 0; i < seletorBox.length; i++) {
      seletorBox[i].addEventListener("click", function () {
        const valor = seletorVaga[i].textContent;
        if (valor === cargoDaVaga) {
          nameVaga.style.display = "block";
          TextoDeSelecaoDeVaga.style.display = "none";
        } else {
          nameVaga.style.display = "none";
        }
      });
    }
  });
});

const accordions = document.getElementsByClassName("contentBx");

for (let i = 0; i < accordions.length; i++) {
  accordions[i].addEventListener("click", function () {
    this.classList.toggle("active-accordeon");
    const arrowAccordion = this.querySelector(".arrowButton");
    if (arrowAccordion) {
      arrowAccordion.style.animation = this.classList.contains(
        "active-accordeon"
      )
        ? "rotateArrow 0.3s ease-in forwards"
        : "none";
    }
  });
}

const btnCandidatar = document.querySelectorAll(".btn-candidatar-se");

document.addEventListener("DOMContentLoaded", function () {
  const btnCloseModalVaga = document.getElementById("js-btnCloseModalVaga");
  const modalVaga = document.getElementById("js-modalVaga");

  if (btnCloseModalVaga) {
    btnCloseModalVaga.addEventListener("click", function () {
      modalVaga.style.display = "none";
    });
  }
});

const btnsCandidatar = document.querySelectorAll(".btn-candidatar-se");

// Adiciona um ouvinte de evento a cada botão
btnsCandidatar.forEach(function (btn) {
  btn.addEventListener("click", function () {
    // Encontra o elemento pai "li"
    const liElement = btn.closest(".cover-content");

    // Obtém o valor do elemento "h4" com a classe "title-nome-vaga" dentro do "li"
    const nomeVaga = liElement.querySelector(".title-nome-vaga").textContent;

    // Atualiza o valor no elemento "span-modal-vaga"
    document.querySelector(".span-modal-vaga").textContent = nomeVaga;

    // Exibe o modal
    modalVaga.style.display = "block";
  });
});

function scrollToDetalhes() {
  if (window.innerWidth <= 770) {
    $("html, body").animate(
      {
        scrollTop: $("#scroolToDivRight").offset().top,
      },
      1000
    );
  }
}
