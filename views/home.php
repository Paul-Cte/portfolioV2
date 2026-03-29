<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Paul Comte - Portfolio Développeur Web</title>
    <meta name="description" content="Je m'appelle Paul Comte, je suis actuellement en BUT Informatique pour devenir un développeur web. Vous pourrez trouver ici le détail de mes projets personnels et professionnels, mon parcours et un formulaire de contact.">
    <link rel="stylesheet" href="public/style/style.css">
    <link rel="icon" type="image/x-icon" href="public/image/faviconpcsf.ico">
    <link rel="preconnect" href="https://cdn-uicons.flaticon.com">
    <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/3.0.0/uicons-brands/css/uicons-brands.css">
    <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/3.0.0/uicons-solid-rounded/css/uicons-solid-rounded.css">
    <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/3.0.0/uicons-solid-straight/css/uicons-solid-straight.css">
  </head>

  <body>
    <header>
      <div>
        <h3>Salut, moi c'est</h3>
        <h1>Paul Comte</h1>
        <h2>et je suis <span></span></h2>

        <button id="btn-decouvrir">Découvrir</button>
      </div>
    </header>

    <div class="modal modal1">
      <i class="fi fi-ss-circle-xmark"></i>
      <div>
        <div class="modal-header">
          <h1>Site Web pour les aidants</h1>
          <a href="https://aled.alwaysdata.net" target="_blank" rel="noopener noreferrer" class="btn-lien-projet">Visiter le site ALED</a>
          <a href="https://github.com/Paul-Cte/ALED" target="_blank" rel="noopener noreferrer" class="btn-lien-projet">Voir le code</a>
        </div>
        
        <div class="description">
          ALED est avant tout un projet universitaire réalisé dans le cadre du semestre 3 de notre BUT informatique : grâce à ce projet, nous avons obtenu le <span>prix du 3ème meilleur prototype</span>. C'est une application web destinée à simplifier la vie des aidants familiaux qui accompagnent une personne âgée en perte d'autonomie. ALED est la solution qui centralise tout ce dont ont besoin les aidants. C'est un outil unique, collaboratif, qui permet à la famille de gérer au même endroit les aspects médicaux, administratifs et la vie quotidienne (repas, tâches ménagères).
        </div>
        
        <div class="modal-details-grid">
          <div class="fonctionnalites">
            <h2>Fonctionnalités</h2>
            <ul>
              <li>Système de groupe famille : Invitation de membres avec lien et système de droit.</li>
              <li>Planning Collaboratif : Création de tâches et système d'assignation.</li>
              <li>Gestion Documentaire Sécurisée : Stockage crypté pour les fichiers "sensibles".</li>
              <li>Module Alimentaire & Courses : Catalogue de recettes et listes générées.</li>
              <li>Page dédiée au profil de l'aidée.</li>
              <li>Tableau de Bord (Widgets) : Regroupement des informations essentielles.</li>
              <li>Accessibilité inclusive : Mode sombre, daltonien et texte ajustable.</li>
            </ul> 
          </div>

          <div class="stack-technique">
            <h2>Stack technique</h2>
            <ul>
              <li>Frontend : HTML5, CSS3, JavaScript</li>
              <li>Backend : PHP 8.3</li>
              <li>Base de données : PostgreSQL</li>
              <li>Outils : Git, Google Keep, Notion, Laragon, VS Code</li>
              <li>Déploiement : Alwaysdata</li>
            </ul>
          </div>

          <div class="travail-indiv">
            <h2>Travail individuel</h2>
            <ul>
              <li>Chef de projet : Organisation, planning, répartition.</li>
              <li>Création de maquettes.</li>
              <li>Développement Web FullStack.</li>
            </ul>
          </div>
        </div>

        <img src="public/image/aled1.png" alt="Aperçu ALED 1" />
        <img src="public/image/aled2.png" alt="Aperçu ALED 2" />
        <img src="public/image/aled3.png" alt="Aperçu ALED 3" />
        <img src="public/image/aled4.png" alt="Aperçu ALED 4" />
        <img src="public/image/aled5.png" alt="Aperçu ALED 5" />
        <img src="public/image/aled6.png" alt="Aperçu ALED 6" />
      </div>
    </div>

        <div class="modal modal7">
      <i class="fi fi-ss-circle-xmark"></i>
            <div>
                <div class="modal-header">
                    <h1>Acromusic</h1>
                    <a href="https://acromusic.vercel.app/" target="_blank" rel="noopener noreferrer" class="btn-lien-projet">Visiter le site AcroMusic</a>
                    <a href="https://github.com/Paul-Cte/AcroMusic" target="_blank" rel="noopener noreferrer" class="btn-lien-projet">Voir le code</a>
                </div>
                
                <p class="description">
                    <span>PROJET EN COURS</span>.<br>
                    Développement d'un site internet pour l'artiste Acromusic. Le projet intègre une partie frontoffice, avec la présentation des albums et des singles de l'artiste. On peut également y consulter les prochaines sorties. Il y a également un Backoffice dédié à l'administration des contenus. Ces 2 parties sont reliées par une <span>API REST</span>
                    Ce pojet est réalisé dans le but de m'entrainer à la création d'une application web full-stack avec des outils modernes utilisés en entreprise (voir stack technique).
                </p>
        
                <div class="modal-details-grid">

                    <div class="stack-technique">
                        <h2>Stack technique</h2>
                        <ul>
                            <li>
                                <strong class="under-title">Frontend</strong>
                                <ul>
                                    <li>React (Généré avec Vite)</li>
                                    <li>React Query (useQuery / useMutation)</li>
                                    <li>Axios : pour communiquer avec l'API.</li>
                                    <li>Tailwind CSS</li>
                                </ul>
                            </li>
                            <li>
                                <strong class="under-title">Backend</strong>
                                <ul>
                                    <li>Symfony (PHP)</li>
                                    <li>API Platform : API REST.</li>
                                    <li>LexikJWTBundle : Sécurisation des routes d'administration par Token JWT.</li>
                                    <li>Doctrine ORM : Gestion des entités et requêtes en base de données.</li>
                                </ul>
                            </li>
                            <li>
                                <strong class="under-title">Base de données</strong>
                                <ul>
                                    <li>PostgreSQL</li>
                                </ul>
                            </li>
                            <li>
                                <strong class="under-title">Infrastructure & DevOps</strong>
                                <ul>
                                    <li>Docker & Docker Compose : Conteneurisation de l'environnement (Isolation de l'application web et de la base de données).</li>
                                    <li>WSL2 (Ubuntu) : Environnement de développement Linux sous Windows.</li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="fonctionnalites">
                        <h2>Fonctionnalités clés</h2>
                        <ul>
                            <li>Permettre l'ajout, la modification et la suppression de contenus (albums, single).</li>
                            <li>Gérer les compositeurs dans une tableau dédié afin d'attribuer des compositeurs à chaque album ou single facilement.</li>
                        </ul>
                    </div>
                </div>
                
                <!-- Image de présentation du projet -->
            <img src="public/image/acro1.png" alt="Aperçu Acromusic">
            <img src="public/image/acro2.png" alt="Aperçu Acromusic">
            <img src="public/image/acro3.png" alt="Aperçu Acromusic">
            <img src="public/image/acro4.png" alt="Aperçu Acromusic">
            <img src="public/image/acro5.png" alt="Aperçu Acromusic">
            <img src="public/image/acro6.png" alt="Aperçu Acromusic">
            <img src="public/image/acro7.png" alt="Aperçu Acromusic">
            <img src="public/image/acro8.png" alt="Aperçu Acromusic">
        </div>
    </div>
    
    

    <div class="modal modal3">
      <i class="fi fi-ss-circle-xmark"></i>
      <div>
        <div class="modal-header">
          <h1>Projet Site Web Atos</h1>
        </div>
        
        <div class="description">
          Je me suis amusé à imaginer un site web pour un restaurant japonais.
          C'est l'un de mes premiers projets personnels.
        </div>
        
        <div class="modal-details-grid">
        <div class="competences">
          <h2>Compétences acquises</h2>
          <ul>
            <li>Manipuler des effets simples en css</li>
            <li>
              Positionnement d'éléments (flexbox, gridpane, relative, absolute)
            </li>
          </ul>
        </div>
        <div class="objectifs">
          <h2>Objectifs</h2>
          <ul>
            <li>Faire une page sur l'histoire du restaurant</li>
            <li>Faire un beau menu de restaurant</li>
            <li>
              Apprendre à faire des tableaux pour les horaires du restaurant
            </li>
            <li>Intégrer google maps</li>
          </ul>
        </div>
        <div class="tech-sf-acquis">
          <h2>Technologies et savoir-faire acquis</h2>
          <div>
            <img src="public/image/html-5.png" alt="logo-html" /><img
              src="public/image/css-3.png"
              alt="logo-css"
            /><img src="public/image/script-java.png" alt="logo-js" />
          </div>
        </div>
        </div>
        
        <img src="public/image/resto_.png" alt="" />
        <img src="public/image/resto.png" alt="" />
        <img src="public/image/resto3.png" alt="" />
        <img src="public/image/resto4.png" alt="" />
        <img src="public/image/resto5.png" alt="" />
      </div>
    </div>

    <div class="modal modal4">
      <i class="fi fi-ss-circle-xmark"></i>
      <div>
        <div class="modal-header">
          <h1>Projet Fan-Page João Neves</h1>
        </div>
        
        <div class="description">
          Petit projet personnel réalisé pour m'entraîner à superposer du texte et des images, en m'inspirant d'une technique de design spécifique.
        </div>
        
        <div class="modal-details-grid">
        <div class="competences">
          <h2>Compétences acquises</h2>
          <ul>
            <li>Superposition avancée d'éléments (z-index, position absolute)</li>
            <li>Animations CSS (transform, @keyframes)</li>
            <li>JavaScript pour l'interactivité (IntersectionObserver, smooth scroll)</li>
            <li>Effets de design (backdrop-filter, drop-shadow, filtres)</li>
          </ul>
        </div>
        <div class="objectifs">
          <h2>Objectifs</h2>
          <ul>
            <li>Créer une page de type "one-page" avec navigation fluide.</li>
            <li>Implémenter un effet de superposition texte/image dynamique.</li>
            <li>Utiliser l'IntersectionObserver pour suivre la section visible.</li>
            <li>Ajouter un effet de suivi de curseur (mousemove).</li>
          </ul>
        </div>
        <div class="travail-indiv">
          <h2>Travail individuel</h2>
          <ul>
            <li>Intégration HTML/CSS de la maquette.</li>
            <li>Développement des scripts de navigation et d'animation (scroll, curseur).</li>
          </ul>
        </div>
        <div class="tech-sf-acquis">
          <h2>Technologies et savoir-faire acquis</h2>
          <div>
            <!-- ici pour mettre image technologies si y'en a -->
          </div>

          <ul>
            <li>Utilisation de l'IntersectionObserver API</li>
            <li>Animations et transitions CSS avancées</li>
            <li>Gestion des événements DOM (scroll, mousemove)</li>
          </ul>
        </div>
        </div>
        
        <!-- img projet  -->
         <img src="public/image/page1_joao.png" alt="">
      </div>
    </div>

    <div class="modal modal5">
      <i class="fi fi-ss-circle-xmark"></i>
      <div>
        <div class="modal-header">
          <h1>Site Vitrine Pokémon</h1>
        </div>
        
        <div class="description">
          Projet de création d'un site web vitrine pour présenter une (fausse) nouvelle collection de cartes Pokémon. L'accent est mis sur l'interactivité JavaScript, notamment la gestion d'onglets et d'une modale (overlay).
        </div>
        
        <div class="modal-details-grid">
        <div class="competences">
          <h2>Compétences acquises</h2>
          <ul>
            <li>Gestion des événements JavaScript (click)</li>
            <li>Manipulation du DOM (ajout/suppression de classes "active")</li>
            <li>Création et gestion d'une modale (overlay) pour zoomer</li>
            <li>Utilisation de `position: sticky` pour le menu</li>
            <li>Styling avec @font-face et animations CSS</li>
          </ul>
        </div>
        <div class="objectifs">
          <h2>Objectifs</h2>
          <ul>
            <li>Permettre à l'utilisateur de basculer entre deux onglets (Boosters / Cartes).</li>
            <li>Implémenter une modale (overlay) qui s'affiche au clic sur une carte.</li>
            <li>Fermer la modale au clic sur un bouton.</li>
            <li>Structurer une page de présentation de produit (concours, formulaire).</li>
          </ul>
        </div>
        <div class="travail-indiv">
          <h2>Travail individuel</h2>
          <ul>
            <li>Développement de la logique d'onglets en JavaScript.</li>
            <li>Création du système d'overlay (ouverture/fermeture).</li>
            <li>Intégration de la maquette et des animations CSS.</li>
          </ul>
        </div>
        <div class="tech-sf-acquis">
          <h2>Technologies et savoir-faire acquis</h2>
          <div>
                        <!-- ici pour mettre image technologies si y'en a -->
          </div>

          <ul>
            <li>Manipulation d'événements DOM</li>
            <li>Création de modales (overlay)</li>
            <li>Utilisation de polices personnalisées (@font-face)</li>
          </ul>
        </div>
        </div>
        
          <img src="public/image/page1_pokemon.png" alt="">
          <img src="public/image/page2_pokemon.png" alt="">
          <img src="public/image/page3_pokemon.png" alt="">
          <img src="public/image/page4_pokemon.png" alt="">
          <img src="public/image/page5_pokemon.png" alt="">
      </div>
    </div>

    <div class="modal modal6">
      <i class="fi fi-ss-circle-xmark"></i>
      <div>
        <div class="modal-header">
          <h1>Projet Générateur de Citations</h1>
        </div>
        
        <div class="description">
          Un générateur de citations aléatoires avec un espace administrateur. Le site utilise PHP pour se connecter à une base de données MySQL pour charger de nouvelles citations.
        </div>
        
        <div class="modal-details-grid">
        <div class="competences">
          <h2>Compétences acquises</h2>
          <ul>
            <li>Logique backend en PHP</li>
            <li>Connexion à une base de données MySQL (via WAMP)</li>
            <li>Système d'authentification simple (login/session PHP)</li>
            <li>Opérations CRUD (Create, Read, Delete) en PHP/SQL</li>
          </ul>
        </div>
        <div class="objectifs">
          <h2>Objectifs</h2>
          <ul>
            <li>Stocker et lire des citations depuis une base de données MySQL.</li>
            <li>Afficher une citation aléatoire au chargement.</li>
            <li>Créer un espace administrateur protégé par mot de passe.</li>
            <li>Permettre l'ajout et la suppression de citations via l'espace admin.</li>
          </ul>
        </div>
        <div class="travail-indiv">
          <h2>Travail individuel</h2>
          <ul>
            <li>Script PHP pour la connexion BDD (`connexionbdd.php`).</li>
            <li>Script PHP pour récupérer une citation aléatoire (`code.php`).</li>
            <li>Développement de l'espace admin (login, ajout, suppression).</li>
            <li>Création de la structure SQL.</li>
          </ul>
        </div>
        <div class="tech-sf-acquis">
          <h2>Technologies et savoir-faire acquis</h2>
          <div>
                        <!-- ici pour mettre image technologies si y'en a -->
          </div>

          <ul>
            <li>PHP</li>
            <li>MySQL (via WAMP)</li>
            <li>Gestion de sessions PHP</li>
          </ul>
        </div>
        </div>
        
          <img src="public/image/page1_citation.png" alt="">
          <img src="public/image/page2_citation.png" alt="">
          <img src="public/image/page3_citation.png" alt="">
        </div>
    </div>
    
    <div class="modal modal2">
      <i class="fi fi-ss-circle-xmark"></i>
      <div>
        <div class="modal-header">
          <h1>Projet Site Web Atos</h1>
        </div>
        
        <div class="description">
          Nous avons travaillé sur la vulgarisation du site web d'Atos pour le
          rendre plus accessible aux collégiens qui voudraient y faire leurs
          stages.
        </div>
        
        <div class="modal-details-grid">
        <div class="competences">
          <h2>Compétences acquises</h2>
          <ul>
            <li>Travail en équipe</li>
            <li>Utilisation d'outils collaboratifs</li>
            <li>Adaptation au public (vulgarisation)</li>
          </ul>
        </div>
        <div class="objectifs">
          <h2>Objectifs</h2>
          <ul>
            <li>Rendre le site plus accessible</li>
            <li>Améliorer l'ergonomie</li>
            <li>Faciliter la navigation</li>
            <li>Rendre le site plus attractif</li>
          </ul>
        </div>
        <div class="travail-indiv">
          <h2>Travail individuel</h2>
          <ul>
            <li>Création de wireframes</li>
            <li>Dévoloppement Web (css,html,js)</li>
          </ul>
        </div>
        <div class="tech-sf-acquis">
          <h2>Technologies et savoir-faire acquis</h2>
          <div>
            <img src="public/image/html-5.png" alt="logo-html" /><img
              src="public/image/css-3.png"
              alt="logo-css"
            /><img src="public/image/script-java.png" alt="logo-js" />
          </div>

          <ul>
            <li>Utilisation de github</li>
            <li>Utilisation de Whimsical</li>
          </ul>
        </div>
        </div>
        
        <img src="public/image/atos.png" alt="" />
        <img src="public/image/atos2.png" alt="" />
        <img src="public/image/atos3.png" alt="" />
      </div>
    </div>
        

    <main>
      <nav>
        <ul>
          <li title="Mes projets">
            <a href="#section-projets"
              ><img src="public/image/code.png" alt="Icone code"
            /></a>
          </li>
          <li title="Mon parcours">
            <a href="#section-parcours"
              ><img src="public/image/lobtention-du-diplome.png" alt="Icone diplôme"
            /></a>
          </li>
          <li title="Contactez-moi">
            <a href="#section-contact"
              ><img id="enveloppe" src="public/image/enveloppe.png" alt="Icone enveloppe"
            /></a>
          </li>
        </ul>
      </nav>
      <section id="section-projets">
        <div class="presentation-projets">
          <h1>Mes projets</h1>
          <p>
            J’ai acquis de nombreuses compétences au cours de mes projets,
            qu’ils soient personnels ou scolaires. Du côté des projets
            personnels, j’en ai réalisé beaucoup pour faire du développement web. Pour en savoir plus,
            rendez-vous dans le slider !
            <img src="public/image/soulignement.png" alt="Image soulignement" />
          </p>
        </div>

        <div class="wrapper">
          <div class="container">
            <div id="div1">
              <button class="button-esp">En savoir plus</button>
              <div>
                <h1>Site Web pour les aidants</h1>
                <p>
                  "Développement d'un site web pour les aidants des personnes agêes dépendantes."
                </p>
              </div>
            </div>
            <div id="div7">
              <button class="button-esp">En savoir plus</button>
              <div>
                <h1>Acromusic</h1>
                <p>Réalisation d'une application web full-stack conteneurisée dédiée à l'administration et la gestion d'un portfolio pour un musicien.</p>
              </div>
            </div>
            <div id="div3">
              <button class="button-esp">En savoir plus</button>
              <div>
                <h1>Site Web Restaurant</h1>
                <p>
                  "Création d'un démonstrateur de site web pour un restaurant
                  japonais"
                </p>
              </div>
            </div>
            <div id="div4">
              <button class="button-esp">En savoir plus</button>
              <div>
                <h1>Site Web Joao Neves</h1>
                <p>
                  "Développement d'un site web pour m'entraîner à utiliser des effets de superposition texte/image et d'effet au scroll."
                </p>
              </div>
            </div>
            <div id="div5">
              <button class="button-esp">En savoir plus</button>
              <div>
                <h1>Site Web Pokémon</h1>
                <p>
                  "Développement d'un site web pour présenter une nouvelle collection de cartes Pokémon, avec gestion d'onglets et modale en JavaScript."</p></div>
            </div>
            <div id="div6">
              <button class="button-esp">En savoir plus</button>
              <div>
                <h1>Site Web Génération citation</h1>
                <p>
                  "Développement d'un site web pour m'entraîner à la manipulation d'une base de données en php et sql"</p>
                </div>
              </div>

              <div id="div2">
                <button class="button-esp">En savoir plus</button>
                <div>
                  <h1>Site Web Atos</h1>
                  <p>
                    "imaginer une nouvelle version vulgarisée du site web d'Atos"
                  </p>
                </div>
              </div>
            </div>
            
            
          <div id="div-bspan">
            <button id="before">←</button>
            <button id="after">→</button>
          </div>
          <span> </span>
        </div>
      </section>

      <div class="parcours-scroll-container">
        <div class="parcours-sticky-wrapper">
          <section id="section-parcours" class="section-parcours">
            <h1>Mon parcours</h1>

            <div id="dot"></div>

            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="80%"
              height="300"
              viewBox="0 0 1200 200"
              preserveAspectRatio="none"
              id="parcours-svg"
            >
              <path
                id="parcours-path"
                d="M0,100
           C60,70 180,70 240,100
           C300,130 420,130 480,100
           C540,70 660,70 720,100
           C780,130 900,130 960,100
           C1020,70 1140,70 1200,100"
                fill="none"
                stroke-width="6"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
            </svg>

            <div class="div1 div-top">
              <h2>Lycée</h2>
              <h3>2021-2022</h3>
              <p>Seconde générale au lycée de Moirans</p>
            </div>
            <div class="div2 div-bottom">
              <h2>STI2D</h2>
              <h3>2022-2023</h3>
              <p>1ère année de STI2D au lycée Ferninand Buisson à Voiron</p>
            </div>
            <div class="div3 div-top">
              <h2>STI2D</h2>
              <h3>2023-2024</h3>
              <p>
                2ème année spécialité
                <abbr title="Système d'Information et Numérique">SIN</abbr>
              </p>
            </div>
            <div class="div4 div-bottom">
              <h2>BUT Informatique</h2>
              <h3>2024-2025</h3>
              <p>1ère année de BUT Informatique à l'IUT de Grenoble</p>
            </div>
            <div class="div5 div-top">
              <h2>BUT Informatique</h2>
              <h3>2025-2026</h3>
              <p>2ème année en parcours développement</p>
            </div>
          </section>
        </div>
      </div>

      <section id="section-contact">
        <div>
          <div><h1>Envie de travailler avec moi?</h1></div>
          <div class="div-ul-btn">
            <ul>
              <li>
                <a aria-label="Github" href="https://github.com/Paul-Cte" rel="noopener noreferrer" target="_blank"
                  ><i class="fi fi-brands-github"></i
                ></a>
              </li>
              <li>
                <a aria-label="Email" href="mailto:paul.comte3878@gmail.com" rel="noopener noreferrer" target="_blank"
                  ><i class="fi fi-sr-circle-envelope"></i
                ></a>
              </li>
              <li>
                <a aria-label="LinkedIn" href="https://www.linkedin.com/in/paul-comte-5794b1333/" rel="noopener noreferrer" target="_blank"
                  ><i class="fi fi-brands-linkedin"></i
                ></a>
              </li>
            </ul>

            <!-- <button class="btn-cv"></button> -->
            <a
              class="btn-cv"
              aria-label="Télécharger mon CV"
              href="https://drive.google.com/uc?export=download&id=19kKrF3vP9mOt9ZQsn5Bu_bzfUARE79pa"
              rel="noopener noreferrer"
              target="_blank"
            ></a>
          </div>
        </div>
        <div>
          <form action="index.php" method="post">
            <input type="hidden" name="action" value="send-mail">
            
            <?php if(isset($statusMessage)): ?>
              <div id="div-message" class="div-message">
                  <?php if($statusMessage['type'] === 'error'): ?>
                      <h1>Mince !</h1>
                      <p class="msg-erreur">Une erreur lors de l'envoi du message.</p>
                  <?php elseif($statusMessage['type'] === 'success'): ?>
                      <h1>Merci !</h1>
                      <p class="msg-reussite">Le message a été envoyé avec succès !</p>
                <?php endif; ?>
                  <button id="btn-fermer-msg">X</button>
              </div>
            <?php endif; ?>

            <h2>Contactez-moi ici:</h2>
            <label for="nom"
              >Nom
              <input
                id="nom"
                name="nom"
                type="text"
                placeholder="Votre nom"
                required
              />
            </label>
            <label for="email"
              >Email
              <input
                id="email"
                name="email"
                type="email"
                placeholder="Votre email"
                autocomplete="email"
                required
              />
            </label>
            <label for="message"
              >Message
              <textarea
                id="message"
                name="message"
                placeholder="Votre message"
                required
              ></textarea>
            </label>
            <button id="btn-envoyer" type="submit" aria-label="envoyer"></button>
          </form>
        </div>
      </section>
    </main>
    <footer>
      <section>
        <div class="footer-div-reseaux">
          <h3>Mes réseaux</h3>
          <ul>
            <li>
              <a aria-label="Github" href="https://github.com/Paul-Cte" target="_blank" rel="noopener noreferrer"
                ><i class="fi fi-brands-github"></i
              ></a>
            </li>
            <li>
              <a aria-label="Email" href="mailto:paul.comte3878@gmail.com" target="_blank" rel="noopener noreferrer"
                ><i class="fi fi-sr-circle-envelope"></i
              ></a>
            </li>
            <li>
              <a aria-label="LinkedIn" href="https://www.linkedin.com/in/paul-comte-5794b1333/" target="_blank" rel="noopener noreferrer"
                ><i class="fi fi-brands-linkedin"></i
              ></a>
            </li>
          </ul>
        </div>
        <div class="footer-div-link">
          <ul>
            <li><a aria-label="Mentions légales" href="views/mentions-legales.php">Mentions légales</a></li>
          </ul>
        </div>
      </section>
      <p>&copy; 2026 Paul Comte. Tous droits réservés.</p>
    </footer>
    <script src="public/script/script.js"></script>
  </body>
</html>
