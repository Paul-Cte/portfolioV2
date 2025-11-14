<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mentions Légales - Paul Comte</title>
    <meta name="description" content="Mentions légales du site portfolio de Paul Comte, incluant les informations d'éditeur, d'hébergeur et les crédits des ressources utilisées.">
    <link rel="stylesheet" href="public/style/style.css">
          <link rel="icon" type="image/x-icon" href="../public/image/faviconpcsf.ico">
     <style>
        body {
            background:linear-gradient(#061019, #233242);
            color: #fff; 
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; 
            line-height: 1.6;
            margin: 0;
            padding: 0 20px; 
            display: flex; 
            flex-direction: column;
            min-height: 100vh; 
        }
        .mentions-container {
            max-width: 900px;
            margin: 40px auto; 
            padding: 20px 0;
            flex-grow: 1; 
        }
        h1 {
            font-family: 'ICA', sans-serif; 
            font-size: 3.5rem; 
            text-align: center;
            margin-bottom: 60px;
            color: #ffa500;
        }
        h2 {
            font-family: 'ICA', sans-serif;
            font-size: 2rem;
            margin-top: 40px;
            margin-bottom: 15px;
            border-bottom: 2px solid #ffa500; 
            padding-bottom: 5px;
            color: #fff; 
        }
        a {
            color: #ffa500; 
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
        .back-to-portfolio {
            display: inline-block;
            margin-bottom: 20px;
            font-family: 'ICA', sans-serif;
            font-size: 1.2rem;
        }
        @media (max-width: 768px) {
            h1 {
                font-size: 2.5rem;
                margin-bottom: 40px;
            }
            h2 {
                font-size: 1.6rem;
            }
            .mentions-container {
                margin: 20px auto;
                padding: 10px 0;
            }
        }
    </style>
</head>
<body>

    <div class="mentions-container">
        <a href="../index.php" class="back-to-portfolio">← Retour au portfolio</a>

        <h1>Mentions Légales</h1>

        <h2>Éditeur du Site</h2>
        <p>
            Ce site est un portfolio personnel, édité par :<br>
            <strong>Paul Comte</strong><br>
            <strong>Contact :</strong> <a href="mailto:paul.comte3878@gmail.com">paul.comte3878@gmail.com</a>
        </p>
        <p>
            <strong>Directeur de la publication :</strong> Paul Comte
        </p>

        <h2>Hébergement</h2>
        <p>
            Ce site est hébergé par la société :<br>
            <strong>Alwaysdata</strong><br>
            91 rue du Faubourg Saint-Honoré<br>
            75008 Paris, France<br>
            <a href="https://www.alwaysdata.com" target="_blank">www.alwaysdata.com</a>
        </p>

        <h2>Propriété Intellectuelle</h2>
        <p>
            L'ensemble de ce site (code, design, textes, et images personnelles) constitue une œuvre protégée par la législation sur le droit d'auteur.
        </p>
        <p>
            <strong>Crédits des icônes :</strong><br>
            Certaines icônes utilisées sur ce site, notamment dans la navigation, proviennent de <a href="https://www.flaticon.com" target="_blank">Flaticon.com</a> et sont utilisées conformément à leurs conditions de licence. Les auteurs originaux sont crédités sur chaque icône si les conditions l'exigent, ou via la licence globale de Flaticon.
        </p>
        Uicons by <a href="https://www.flaticon.com/uicons">Flaticon</a><br>
        <a href="https://www.flaticon.com/free-icons/graduation-cap" title="graduation cap icons">Graduation cap icons created by Iconiyo - Flaticon</a><br>
        <a href="https://www.flaticon.com/free-icons/code" title="code icons">Code icons created by KP Arts - Flaticon</a>
        <a href="https://www.flaticon.com/free-icons/linkedin" title="linkedin icons">Linkedin icons created by riajulislam - Flaticon</a>
        
        <p>
            Toute reproduction ou représentation, en tout ou partie, à d'autres fins que l'usage privé, sur un quelconque support est interdite sans autorisation expresse et préalable de l'éditeur du site.
        </p>

        <h2>Données Personnelles</h2>
        <p>
            Les informations que vous fournissez via le formulaire de contact (nom, email, message) sont collectées uniquement dans le but de répondre à votre demande.
        </p>
        <p>
            Ces données ne sont pas conservées à des fins commerciales ni partagées avec des tiers. Conformément au Règlement Général sur la Protection des Données (RGPD), vous disposez d'un droit d'accès, de rectification et de suppression de vos données en me contactant à l'adresse email indiquée ci-dessus.
        </p>

        <p style="text-align: center; margin-top: 60px; font-size: 0.9rem; color: #aaa;">
            Dernière mise à jour : <?php echo date("d/m/Y"); ?>
        </p>

    </div>

    </body>
</html>
