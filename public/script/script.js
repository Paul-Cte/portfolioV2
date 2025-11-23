// animation de mots

let mots = ["développeur", "sportif", "étudiant"];
let index = 0;
let isDeleting = false;
let lettreIndex = 0;
const spanElement = document.querySelector("header h2 span");

function typeWriter() {
  let motCourant = mots[index];

  if (isDeleting) {
    spanElement.textContent = motCourant.substring(0, lettreIndex - 1);
    lettreIndex--;

    if (lettreIndex === 0) {
      isDeleting = false;
      index = (index + 1) % mots.length;
      setTimeout(typeWriter, 500);
      return;
    }
  } else {
    spanElement.textContent = motCourant.substring(0, lettreIndex + 1);
    lettreIndex++;

    if (lettreIndex === motCourant.length) {
      isDeleting = true;
      setTimeout(typeWriter, 2000);
      return;
    }
  }
  const vitesse = isDeleting ? 50 : 100;
  setTimeout(typeWriter, vitesse);
}

typeWriter();

//-------------------------slider------------------------

let divDuSlider = document.querySelectorAll(".container>div");
const sliderContainer = document.querySelector(".container"); // Ajout
let nbrDeDiv = divDuSlider.length;
let divCourante = 0;
let avancer = document.getElementById("after");
let reculer = document.getElementById("before");
const spanCounterSlide = document.querySelector(".wrapper span");

let touchStartX = 0;
let touchEndX = 0;

spanCounterSlide.textContent = divCourante + 1 + "/" + nbrDeDiv;
reculer.style.visibility = "hidden";

function slideSuivante() {
  if (divCourante < nbrDeDiv - 1) {
    divCourante++;
    reculer.style.visibility = "visible";
    if (divCourante === nbrDeDiv - 1) {
      avancer.style.visibility = "hidden";
    }
  }
  TranslateSlider();
}

// Logique pour reculer
function slidePrecedente() {
  if (divCourante > 0) {
    divCourante--;
    avancer.style.visibility = "visible";
    if (divCourante === 0) {
      reculer.style.visibility = "hidden";
    }
  }
  TranslateSlider();
}

function TranslateSlider() {
  spanCounterSlide.textContent = divCourante + 1 + "/" + nbrDeDiv;
  const pourcentageDecalage = -divCourante * 100;
  divDuSlider.forEach(
    (div) => (div.style.transform = `translateX(${pourcentageDecalage}%)`)
  );
}

avancer.addEventListener("click", slideSuivante);
reculer.addEventListener("click", slidePrecedente);

if (sliderContainer) {
  sliderContainer.addEventListener(
    "touchstart",
    (e) => {
      // Enregistre la position de départ
      touchStartX = e.changedTouches[0].screenX;
    },
    { passive: true }
  );

  sliderContainer.addEventListener("touchend", (e) => {
    // Enregistre la position de fin
    touchEndX = e.changedTouches[0].screenX;
    handleSwipe();
  });
}

function handleSwipe() {
  const swipeThreshold = 40; // Décalage minimum en pixels pour valider un swipe

  if (touchEndX < touchStartX - swipeThreshold) {
    slideSuivante();
  } else if (touchEndX > touchStartX + swipeThreshold) {
    slidePrecedente();
  }
}

//---------------------------------------point frise chronologique--------------------------------

document.addEventListener("DOMContentLoaded", function () {
  const path = document.getElementById("parcours-path");
  const dot = document.getElementById("dot");
  const section = document.querySelector(".section-parcours");
  const svg = document.getElementById("parcours-svg");
  const scrollContainer = document.querySelector(".parcours-scroll-container");

  // Vérification de base
  if (!path || !dot || !section || !svg || !scrollContainer) {
    return;
  }

  let dotHasBeenVisible = false;

  function isSectionVisibleEnough(section) {
    const rect = section.getBoundingClientRect();
    const sectionHeight = rect.height;
    if (sectionHeight === 0) return false;

    const visibleHeight =
      Math.min(rect.bottom, window.innerHeight) - Math.max(rect.top, 0);

    //On demande 90% de visibilité au cas où les scrollbars faussent le calcul
    return visibleHeight >= sectionHeight * 0.9;
  }

  function updateDotPosition() {
    // 1. On vérifie si le SVG est affiché
    const style = window.getComputedStyle(svg);
    if (style.display === "none") {
      return;
    }

    // 2. On récupère la longueur actuelle
    const currentPathLength = path.getTotalLength();
    if (currentPathLength === 0) return;

    // Si le conteneur n'est pas scrollable (ex: pas assez de hauteur), on arrête
    if (scrollContainer.offsetHeight <= window.innerHeight) {
      return;
    }

    // --- DIMENSIONS & POSITIONS  ---
    const sectionWidth = section.offsetWidth;
    const sectionHeight = section.offsetHeight;

    // Les constantes CSS (80% width, 300px height)
    const svgWidth = sectionWidth * 0.8;
    const svgHeight = 300;

    // Calcul des offsets pour centrer le point
    const svgLeft = (sectionWidth - svgWidth) / 2;
    // top: 55% avec translate -45%
    const svgTop = sectionHeight * 0.55 - svgHeight * 0.45;

    // --- ETAPE 1 : Initialisation ---
    if (!dotHasBeenVisible) {
      // On place le point au début (index 0)
      const point = path.getPointAtLength(0);
      const dotWidth = dot.offsetWidth;
      const dotHeight = dot.offsetHeight;

      const dotX = svgLeft + (point.x / 1200) * svgWidth;
      const dotY = svgTop + (point.y / 200) * svgHeight;

      dot.style.left = `${dotX - dotWidth / 2}px`;
      dot.style.top = `${dotY - dotHeight / 2}px`;

      // Si la section est visible (à 90%), on active l'animation pour la suite
      if (isSectionVisibleEnough(section)) {
        dotHasBeenVisible = true;
      }
      return;
    }

    // --- ETAPE 2 : Animation au scroll ---

    // Calcul de la progression basé sur le scroll container parent (300vh)
    const containerRect = scrollContainer.getBoundingClientRect();
    const containerHeight = scrollContainer.offsetHeight;

    // Si on est au-dessus du début, progression = 0
    let progress = 0;

    if (containerRect.top < 0) {
      progress =
        Math.abs(containerRect.top) / (containerHeight - window.innerHeight);
    }

    // On borne entre 0 et 1
    progress = Math.max(0, Math.min(1, progress));

    const distance = progress * currentPathLength;
    const point = path.getPointAtLength(distance);

    // Positionnement final
    const dotWidth = dot.offsetWidth;
    const dotHeight = dot.offsetHeight;

    const dotX = svgLeft + (point.x / 1200) * svgWidth;
    const dotY = svgTop + (point.y / 200) * svgHeight;

    dot.style.left = `${dotX - dotWidth / 2}px`;
    dot.style.top = `${dotY - dotHeight / 2}px`;
  }

  // Écouteurs d'événements
  window.addEventListener("scroll", updateDotPosition);
  window.addEventListener("resize", updateDotPosition);

  // Premier appel différé pour assurer que le CSS est appliqué
  setTimeout(updateDotPosition, 100);
});

//-------------------------Modal------------------------

let modals = document.querySelectorAll(".modal");
let btnEsp = document.querySelectorAll(".button-esp");
let btnClose = document.querySelectorAll(".modal i");

Array.from(btnEsp).forEach((element) => {
  element.addEventListener("click", () => {
    openOverlay(element);
  });
});

function openOverlay(element) {
  let indice = Array.from(btnEsp).indexOf(element);
  modals[indice].style.display = "block";
  modals[indice].style.top = window.scrollY + "px";
  document.body.style.overflow = "hidden";
}

function closeOverlay(element) {
  let indice = Array.from(btnClose).indexOf(element);
  modals[indice].style.display = "none";
  document.body.style.overflow = "auto";
}

Array.from(btnClose).forEach((element) => {
  element.addEventListener("click", () => {
    closeOverlay(element);
  });
});

// bouton decouvrir
document.getElementById("btn-decouvrir").addEventListener("click", () => {
  window.scrollTo({
    top: window.innerHeight + 60,
  });
});

/*--------------------------nav--------------------------*/

let projets = document.getElementById("section-projets");
let parcours = document.getElementById("section-parcours");
let contact = document.getElementById("section-contact");

let section = [projets, parcours, contact];

let nava = document.querySelectorAll("nav a");
// let nav = document.querySelector("nav");
let navA = document.querySelectorAll("nav li a");

navA.forEach((element) => {
  element.addEventListener("click", (e) => {
    e.preventDefault();
    let indice = Array.from(navA).indexOf(element);
    section[indice].scrollIntoView({ behavior: "instant" });
  });
});

function estIlVisible(element) {
  let rect = element.getBoundingClientRect();
  let hauteurFenetre =
    window.innerHeight || document.documentElement.clientHeight;

  let hautVisible = rect.top < 200 && rect.top < hauteurFenetre;
  let basVisible = rect.bottom < 200 && rect.bottom <= hauteurFenetre;

  if (hautVisible || basVisible) {
    nava.forEach((element) => {
      element.classList.remove("actif");
    });
    nava[section.indexOf(element)].classList.add("actif");
  }
}

window.addEventListener("scroll", () => {
  section.forEach((element) => {
    estIlVisible(element);
  });
});

//message de confirmation ou d'erreur formulaire contact
let divMsg = document.getElementById("div-message");
let btnFermerMesg = document.getElementById("btn-fermer-msg");

if (divMsg && btnFermerMesg) {
  btnFermerMesg.addEventListener("click", () => {
    divMsg.style.display = "none";
  });
}
