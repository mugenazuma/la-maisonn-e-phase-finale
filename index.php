<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Lien pour le CSS Boostrap 4.4.1 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Feulle de style global -->

    <!-- Feuille de style pour la page index.php -->
    <link rel="stylesheet" href="assets/css/index_style.css">
    <!-- Feulle de style container -->

    <!-- Feuille de style pour le container-1 -->
    <link rel="stylesheet" href="assets/css/container_css/container-1.css">
    <!-- Feuille de style pour le container-2 -->
    <link rel="stylesheet" href="assets/css/container_css/container-2.css">
    <!-- Feuille de style pour le container-3 -->
    <link rel="stylesheet" href="assets/css/container_css/container-3.css">
    <!-- Feuille de style pour le container-4 -->
    <link rel="stylesheet" href="assets/css/container_css/container-4.css">
    <!-- Feuille de style pour le container-5 -->
    <link rel="stylesheet" href="assets/css/container_css/container-5.css">

    <!-- Lien pour le FavIcon de la page Web -->
    <link rel="icon" type="image/ico" href="src/Icon_site/logo-maisonnee.ico">

    <title>La maisonnée Corbie</title>
    <?php
    // Inclusion de notre bibliothèque de fonctions
    require "connexion_BDD.php";
    // Appel de la fonction de connexion
    $db = connexionBase();
    // Création de la requete qui et liée à la table media et qui prend la colonne med_id par ordre décroisant 
    $requete = 'SELECT * FROM media ORDER BY med_id DESC ';
    // result pour stocker les resultat d'une requete select
    $result = $db->query($requete);
    ?>
</head>

<body>

    <!-- Mise en place du header dans une autre pages et mis en lien avec un include PhP -->
    <?php include("header/header_index.php") ?>

    <!-- 1er container avec Nom de l'assoc, et la photo de leur locaux -->
    <section class="container-1" id="Acccueil">
        <div>
            <h2>La Maisonnée Corbie</h2>
        </div>
        <!-- Mise en responsive de l'image grace à la class img-fluid de boostrap et un text-center pour l'alignement-->
        <div class="text-center">
            <img class="img-head img-fluid" src="src/image/maisonnee-corbie.jpg" alt="La maisonnee" title="Maisonnée Corbie">
        </div>
    </section>

    <!-- 2éme container avec les différent texte -->
    <section class="container-2">
        <!-- 1er division en container boostrap pour mettre les text en grid, ensuite mise en place d'un row
        accompagner d'un col les rendre cote à cote et responsive l'un sur les autre-->
        <div class="container">
            <div class="row">
                <div class="col">
                    <!-- 1er texte mis en container avec un lien vers la page à propos pour avoir, les info sur l'assoc -->
                    <div class="container">
                        <div class="text-center titre-1">
                            <h2>Notre association</h2>
                        </div>
                        <div class="text-justify">
                            <p>
                                Notre association est engagée dans un combat contre l'exclusion sociale et culturelle
                                des personnes en difficultés qui résident à Corbie et dans ses environs.Elle porte un
                                chantier d'insertion spécialisé dans le second oeuvre du bâtiment,
                                ateliers d'insertion sociale :"bricolage et rénovation",cuisine et
                                restauration", " à la rencontre de l'espace numérique", " savoirs de base".
                            </p>
                            <!-- Button avec un onclick faisant officice de lien vers la page historique -->
                            <button class="btn btn-outline-primary my-2 my-sm-0" type="submit" onclick="window.location.href = 'historique.php'">A propos</button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <!-- 2éme texte mis en container avec un lien vers une page avec des photo de tout leur activité -->
                    <div class="container">
                        <div class="text-center titre-2">
                            <h2>Domaine d'activités </h2>
                        </div>
                        <div class="text-justify">
                            <p>
                                La Maisonnée exerce son activité depuis plus de 12 ans sur les territoires des
                                Communautés de Communes du Val de Somme.
                                Elle régit dans deux domaines :
                                <br>
                                - le second œuvre du bâtiment : la maçonnerie, le rejointoiement, les
                                travaux d’isolation, la pose de cloison, la réalisation de faux plafonds, la peinture,
                                etc.…,
                                <br>
                                - l'aménagement extérieur : la tonte des pelouses, taille de haies et
                                d’arbustes, entretien des massifs etc...
                            </p>
                            <!-- Button avec un onclick faisant officice de lien vers une page avec les activite de l'association -->
                            <button class="btn btn-outline-primary my-2 my-sm-0" type="submit" onclick="window.location.href ='activite.php'">Voir plus</button>                     
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3éme container avec les arcticle avec un container fluid pour inclure les images,
         et la mise en place de l'ID actualités pour les bouton de navigation du header -->
    <section class="container-3 container-fluid text-center" id="Actualités">
        <!-- Titre avec la class titre-1 pour la couleur et le positionnement -->
        <h2 class="titre-1">Nos Actualités</h2>
        <!-- Mise en place d'un container avec un row pour les différents carré -->
        <!-- Class item-1 pour le placement de la marge -->
        <div class="container item-1">
            <!-- 1er row avec deux col pour les carrée du haut -->
            <div class="row">
                <!-- 1er col avec la 1er image d'article  -->
                <div class="col">
                    <!-- Classe CSS pour le 1er article -->
                    <div class="card-1">
                        <!-- Mise en place de la classe carousel en boostrap -->
                        <div class="carousel-item active">
                            <!-- Mise en responsive avec la classe img-fluid de boostrap, et la class img pour redimensionner les photos des qu'il sont insérer dans la le dossier -->
                            <div class="img img-fluid">
                                <!-- Classe card du caroussel boostrap -->
                                <div class="card">
                                    <!-- Ouverture de la balise PHP avec une boucle while qui vient rechercher la balise result pour la variable row -->
                                    <?php
                                    while ($row = $result->fetch(PDO::FETCH_OBJ)) {
                                    ?>
                                        <!-- Envoie de l'image dans le dossier uploads et ensuite recherche en fonction de l'ID, et du numéro du fichier
                                        pour faire apparaitre l'image -->
                                        <img src="actualite/uploads/<?= $row->med_files; ?>" alt="<?= $row->med_id . "." . $row->med_files; ?>">
                                        <!-- Card body pour le placement du titre avec un appel de la variable row qui récuper le med titre -->
                                        <!-- Si l'appel et vide l'envoi sera stopper -->
                                        <div class="card-body">
                                            <h5 class="card-title"><?php
                                                                    echo "<br>";
                                                                    echo $row->med_titre;
                                                                    echo "<br>";
                                                                    if ($row != "") {
                                                                        break;
                                                                    }
                                                                }
                                                                    ?></h5>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 2er col avec la 2er image d'article -->
                <div class="col">
                    <!-- Classe CSS pour le 2er article -->
                    <div class="card-2">
                        <!-- Mise en place de la classe carousel en boostrap -->
                        <div class="carousel-item active">
                            <!-- Mise en responsive avec la classe img-fluid de boostrap, et la class img pour redimensionner les photos des qu'il sont insérer dans la le dossier -->
                            <div class="img img-fluid">
                                <!-- Classe card du caroussel boostrap -->
                                <div class="card">
                                    <!-- Ouverture de la balise PHP avec une boucle while qui vient rechercher la balise result pour la variable row -->
                                    <?php
                                    while ($row = $result->fetch(PDO::FETCH_OBJ)) {
                                    ?>
                                        <!-- Envoie de l'image dans le dossier uploads et ensuite recherche en fonction de l'ID, et du numéro du fichier
                                        pour faire apparaitre l'image -->
                                        <img src="actualite/uploads/<?= $row->med_files; ?>" alt="<?= $row->med_id . "." . $row->med_files; ?>">
                                        <!-- Card body pour le placement du titre avec un appel de la variable row qui récuper le med titre -->
                                        <!-- Si l'appel et vide l'envoi sera stopper -->
                                        <div class="card-body">
                                            <h5 class="card-title"><?php

                                                                    echo "<br>";
                                                                    echo "<th class='text-muted'>" . $row->med_titre . "</th>";
                                                                    echo "<br>";
                                                                    if ($row != "") {
                                                                        break;
                                                                    }
                                                                }
                                                                    ?></h5>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Dic avec class w-100 pour bien dimensionnez les colonnes entre les row -->
                <div class="w-100"></div>
                <!-- 3er col avec la 3er image d'article -->
                <div class="col">
                    <!-- Classe CSS pour le 3er article -->
                    <div class="card-3">
                        <!-- Mise en place de la classe carousel en boostrap -->
                        <div class="carousel-item active">
                            <!-- Mise en responsive avec la classe img-fluid de boostrap, et la class img pour redimensionner les photos des qu'il sont insérer dans la le dossier -->
                            <div class="img img-fluid">
                                <!-- Classe card du caroussel boostrap -->
                                <div class="card">
                                    <!-- Ouverture de la balise PHP avec une boucle while qui vient rechercher la balise result pour la variable row -->
                                    <?php
                                    while ($row = $result->fetch(PDO::FETCH_OBJ)) {
                                    ?>
                                        <!-- Envoie de l'image dans le dossier uploads et ensuite recherche en fonction de l'ID, et du numéro du fichier
                                        pour faire apparaitre l'image -->
                                        <img src="actualite/uploads/<?= $row->med_files; ?>" alt="<?= $row->med_id . "." . $row->med_files; ?>">

                                        <!-- Card body pour le placement du titre avec un appel de la variable row qui récuper le med titre -->
                                        <!-- Si l'appel et vide l'envoi sera stopper -->
                                        <div class="card-body">
                                            <h5 class="card-title"><?php
                                                                    echo "<br>";
                                                                    echo "<th class='text-muted'>" . $row->med_titre . "</th>";
                                                                    echo "<br>";
                                                                    if ($row != "") {
                                                                        break;
                                                                    }
                                                                }
                                                                    ?></h5>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 4er col avec la 4er image d'article -->
                <div class="col">
                    <!-- Classe CSS pour le 4er article -->
                    <div class="card-4">
                        <!-- Mise en place de la classe carousel en boostrap -->
                        <div class="carousel-item active">
                            <!-- Mise en responsive avec la classe img-fluid de boostrap, et la class img pour redimensionner les photos des qu'il sont insérer dans la le dossier -->
                            <div class="img img-fluid">
                                <!-- Classe card du caroussel boostrap -->
                                <div class="card">
                                    <!-- Ouverture de la balise PHP avec une boucle while qui vient rechercher la balise result pour la variable row -->
                                    <?php
                                    while ($row = $result->fetch(PDO::FETCH_OBJ)) {
                                    ?>
                                        <img src="actualite/uploads/<?= $row->med_files; ?>" alt="<?= $row->med_id . "." . $row->med_files; ?>">
                                        <!-- Card body pour le placement du titre avec un appel de la variable row qui récuper le med titre -->
                                        <!-- Si l'appel et vide l'envoi sera stopper -->
                                        <div class="card-body">
                                            <h5 class="card-title"><?php
                                                                    echo "<br>";
                                                                    echo "<th class='text-muted'>" . $row->med_titre . "</th>";
                                                                    echo "<br>";
                                                                    if ($row != "") {
                                                                        break;
                                                                    }
                                                                }
                                                                    ?></h5>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="btn-voir">
            <a href="actualite/ActualiteComplete.php" class="btn btn-primary">Voir</a>
        </div>
    </section>

    <!-- 4éme container pour la partie partenaires -->
    <section class="container-4">
        <!-- Mise en text center pour avoir les logo centré -->
        <div class="text-center">
            <!-- Titre + message de remerciement -->
            <h3>Nos partenaires institutionnels</h3>
            <p>Nous remercions nos partenaires pour leur soutien et leur confiance.</p>
            <!-- Div container fluid pour les image avec mise en place de la classe img-fluid pour la responsivité et la class logo pour le dimensionnement du logo -->
            <div class="container-fluid">
                <img src="src/image/credit-mutuelle.png" class="logo img-fluid" alt="Logo Partenaire" title="Logo Partenaire">
                <img src="src/image/credit-agricole.png" class="logo img-fluid" alt="Logo Partenaire" title="Logo Partenaire">
                <img src="src/image/caisse-epargne.png" class="logo img-fluid" alt="Logo Partenaire" title="Logo Partenaire">
                <img src="src/image/fond-vinci.png" class="logo img-fluid" alt="Logo Partenaire" title="Logo Partenaire">
            </div>
            <!-- Class button-3 pour le positionnement et les couleurs en boostrap -->
            <div class="button-3">
                <button class="btn btn-outline-success" type="submit" onclick="window.location.href = 'partenaire/partenaire.php'">Autres partenaires</button>
            </div>
        </div>
    </section>

    <!-- 5éme container pour la partie contact avec l'id contact pour que les lien améne à cette partie -->
    <section class="container-5" id="Contact">
        <!-- Class container boostrap -->
        <div class="container">
            <!-- Mise en place d'une ligne (row) boostrap -->
            <div class="row">
                <!-- 1er col avec le rectangle avec le titre contact mis en responsive avec les col sm qui prend 6 et md qui prend 4 col et avec le titre centré
                le md-4 permet d'avoir la meme taille de place que les autres div quand il au format plus de 768px et en format plus de 576 prend l'ensemble de la grid-->
                <div class="col-md-4 col-sm-6 text-center" id="contact">
                    <h3 class="contact">Contact</h3>
                </div>
                <!-- 2éme col Attribution de la class form_contact pour donner tout les couleurs, placements et meme fonctionnement pour la responsiviter que la partie contact -->
                <div class="col-md-4 col-sm-6 text-center form_contact">
                    <!-- Début du form en méthod post, et avec le script envoi_contact.php -->
                    <!-- Différent label et input pour avoir les info du formulaire -->
                    <FORM method="POST" action="envoi_contact.php">
                        <h3>Contactez-nous</h3>

                        <label for="fname">Nom </label>
                        <input type="text" id="fname" name="firstname" placeholder="Votre nom ">

                        <label for="lname">Prénom</label>
                        <input type="text" id="lname" name="lastname" placeholder="Votre prénom">

                        <label for="emailAddress">Email</label>
                        <input id="emailAddress" type="email" name="email" placeholder="Votre email">

                        <label for="message">Message</label>
                        <textarea id="message" name="message" placeholder="Votre message" style="height:200px"></textarea>
                        <!-- Input pour envoyer qui envoie au href mailto de l'assoc -->
                        <input type="submit" href="mailto:azuma_mugen@yahoo.com" value="Envoyer">
                        <input type="submit" VALUE="Annuler" onClick="history.back()">
                    </form>
                </div>
                <!-- 3éme col mis en responsive comme les autres partie -->
                <!-- 3éme partie du container composer du iframe et des horaires -->
                <div class="col-md-4 col-sm-6">
                    <!-- Mise en place de la classe responsive pour rendre la map responsive -->
                    <div class="map-responsive">
                        <!-- map de l'adresse de l'association, avec du style intégrer -->
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d348.32402873356597!2d2.4986121969889616!3d49.9089830926758!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e78c7f4110a57b%3A0x73be695cc14b8909!2sLa+Maisonn%C3%A9e!5e0!3m2!1sfr!2sfr!4v1528205570443" style="border:0" allowfullscreen="" width="400" height="300" frameborder="0"></iframe>
                    </div>
                    <!-- Div pour la partie horaires avec une class col-horaires qui donne le bacground -->
                    <!-- Class horaires qui donne l'espacement et le positionnement du texte -->
                    <div class="col-horaires ">
                        <h3>Horaires</h3>

                        <p class="horaires">
                            Lundi :
                            8h00 à 12h00 - 14h00 à 17h00
                        </p>
                        <p class="horaires">
                            Mardi : 8h00 à 12h00 - 14h00 à 17h00
                        </p>
                        <p class="horaires">
                            Mercredi : 8h00 à 12h00
                        </p>
                        <p class="horaires">
                            Jeudi : 8h00 à 12h00 - 14h00 à 17h00
                        </p>
                        <p class="horaires">
                            Vendredi : 8h00 à 12h00 - 14h00 à 17h00
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mise en place du footer dans une autres pages et mis en lien include PhP -->
    <?php include("footer/footer.php") ?>

    <!-- Script boostrap 4.4.1 -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>