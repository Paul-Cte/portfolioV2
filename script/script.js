// animation de mots

let mots = ["developpeur", "sportif"];
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

//-----------------------------------------------------------------
//point frise chronologique fais à l'ia

// ça sert à attendre que le DOM soit chargé
document.addEventListener("DOMContentLoaded", function () {
  const path = document.getElementById("parcours-path");
  const dot = document.getElementById("dot");
  const section = document.querySelector(".section-parcours");
  const svg = document.getElementById("parcours-svg");

  const scrollContainer = document.querySelector(".parcours-scroll-container");

  // Si les éléments n'existent pas (ex: mobile),
  // on arrête le script pour cette fonctionnalité.
  if (!path || !dot || !section || !svg || !scrollContainer) {
    return;
  }

  const pathLength = path.getTotalLength();

  // Fail-safe si le SVG est caché (ex: display:none sur mobile)
  if (pathLength === 0) {
    return;
  }

  let dotHasBeenVisible = false;

  function isSectionFullyVisible(section) {
    const rect = section.getBoundingClientRect();
    const sectionHeight = rect.height;
    // éviter la division par zéro
    if (sectionHeight === 0) return false;
    const visibleHeight =
      Math.min(rect.bottom, window.innerHeight) - Math.max(rect.top, 0);
    return visibleHeight >= sectionHeight * 1;
  }

  function updateDotPosition() {
    // ne pas faire de calculs si l'animation n'est pas visible
    if (
      path.getTotalLength() === 0 ||
      scrollContainer.offsetHeight <= window.innerHeight
    ) {
      return;
    }

    // positionne le point au début du SVG
    if (!dotHasBeenVisible) {
      const point = path.getPointAtLength(0);
      const svgRect = svg.getBoundingClientRect();
      const sectionRect = section.getBoundingClientRect();

      if (svgRect.width === 0) return;

      const svgWidth = svgRect.width;
      const svgHeight = svgRect.height;
      const dotWidth = dot.offsetWidth;
      const dotHeight = dot.offsetHeight;
      const dotX =
        svgRect.left - sectionRect.left + (point.x / 1200) * svgWidth;
      const dotY = svgRect.top - sectionRect.top + (point.y / 200) * svgHeight;
      dot.style.left = `${dotX - dotWidth / 2}px`;
      dot.style.top = `${dotY - dotHeight / 2}px`;

      if (isSectionFullyVisible(section)) {
        dotHasBeenVisible = true;
      }
      return;
    }

    // Comportement normal après avoir été vu une fois
    if (!isSectionFullyVisible(section)) {
      return;
    }

    // Position du conteneur de scroll
    const containerRect = scrollContainer.getBoundingClientRect();
    const containerTop = containerRect.top;
    const containerHeight = scrollContainer.offsetHeight;

    // Calculer la progression (0 à 1) basée sur le scroll du conteneur
    let progress =
      Math.abs(containerTop) / (containerHeight - window.innerHeight);
    progress = Math.max(0, Math.min(1, progress));

    // Obtenir le point sur le path
    const distance = progress * pathLength;
    const point = path.getPointAtLength(distance);

    // Position du SVG par rapport à la section
    const svgRect = svg.getBoundingClientRect();
    const sectionRect = section.getBoundingClientRect();

    if (svgRect.width === 0) return;

    const svgWidth = svgRect.width;
    const svgHeight = svgRect.height;

    // Positionner le dot
    const dotX = svgRect.left - sectionRect.left + (point.x / 1200) * svgWidth;
    const dotY = svgRect.top - sectionRect.top + (point.y / 200) * svgHeight;

    const dotWidth = dot.offsetWidth;
    const dotHeight = dot.offsetHeight;
    dot.style.left = `${dotX - dotWidth / 2}px`;
    dot.style.top = `${dotY - dotHeight / 2}px`;
  }

  // Écouteurs d'événements
  window.addEventListener("scroll", updateDotPosition);
  window.addEventListener("resize", updateDotPosition);

  // Position initiale
  updateDotPosition();
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

// let nav = document.querySelector("nav");
let navA = document.querySelectorAll("nav li a");

navA.forEach((element) => {
  element.addEventListener("click", (e) => {
    e.preventDefault();
    let indice = Array.from(navA).indexOf(element);
    section[indice].scrollIntoView({ behavior: "instant" });
  });
});
