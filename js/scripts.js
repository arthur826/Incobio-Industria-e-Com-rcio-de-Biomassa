const btnMenuMobile = document.getElementById("js-btnMobile");
const overlay = document.querySelector(".js-overlay");

function OpenMenuMobile() {
  document.documentElement.classList.add("menu-opened");
}

function CloseMenuMobile() {
  document.documentElement.classList.remove("menu-opened");
}

btnMenuMobile.addEventListener("click", OpenMenuMobile);
overlay.addEventListener("click", CloseMenuMobile);

/***Menu Scrolled****/

function ScrolledHeader() {
  if (window.scrollY > 0) {
    document.documentElement.classList.add("header-scrolled");
  } else {
    document.documentElement.classList.remove("header-scrolled");
  }
}

window.addEventListener("scroll", ScrolledHeader);

/****/

const btnCidades = document.querySelectorAll(".btn-cidades");

function clickBtn() {
  btnCidades.forEach((btn) => btn.classList.remove("active"));

  this.classList.add("active");
}

btnCidades.forEach((btn) => {
  btn.addEventListener("click", clickBtn);
});

/***Segmentos***/

document.addEventListener("DOMContentLoaded", function () {
  const seletorSegmentos = document.getElementById("js-seletorSegmentos");
  const seletorBtn = seletorSegmentos.querySelectorAll(".btn-segmentos");
  const infosUsoPellet = document.querySelectorAll(".uso-do-pellet");

  seletorBtn.forEach((btn, index) => {
    btn.addEventListener("click", function (event) {
      // Remove a classe active de todos os botões
      seletorBtn.forEach((btn) => btn.classList.remove("active"));
      // Adiciona a classe active ao botão clicado
      btn.classList.add("active");

      // Esconde todos os segmentos
      infosUsoPellet.forEach((segmento) => (segmento.style.display = "none"));
      // Mostra o segmento correspondente ao botão clicado
      infosUsoPellet[index].style.display = "block";
    });
  });
});

/**Unidades/Cidades**/

document.addEventListener("DOMContentLoaded", function () {
  const seletorCidades = document.getElementById("seletorCidades");
  const seletorItem = seletorCidades.querySelectorAll(".btn-cidades");
  const infosCidade = document.querySelectorAll(".bottom .infos-cidade");

  infosCidade.forEach(function (nameCidade) {
    const filialCidade = nameCidade.querySelector("h3").textContent;

    for (let i = 0; i < seletorItem.length; i++) {
      seletorItem[i].addEventListener("click", function () {
        const valor = seletorItem[i].textContent;
        if (valor === filialCidade) {
          nameCidade.style.display = "block";
        } else {
          nameCidade.style.display = "none";
        }
      });
    }
  });
});

/**Ficha Tecnica**/

document.addEventListener("DOMContentLoaded", function () {
  const buttonDetails = document.getElementById("js-btnDetails");
  const fichaTecnica = document.getElementById("js-fichaTecnica");
  const overlayFichaTecnica = document.getElementById("overlayFicha-js");

  function openFichaTecnica() {
    fichaTecnica.classList.add("opened-ficha");
    document.body.style.overflow = "hidden";
  }

  function closeFichaTecnica() {
    fichaTecnica.classList.remove("opened-ficha");
    document.body.style.overflow = "auto";
  }

  buttonDetails.addEventListener("click", openFichaTecnica);
  overlayFichaTecnica.addEventListener("click", closeFichaTecnica);
});

/**Segmentos**/
document
  .getElementById("mostrarDiv")
  .addEventListener("click", function (event) {
    event.preventDefault();
    document.getElementById("minhaDiv").style.display = "block";
  });
