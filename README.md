# codespacesite

color:
// pour le moment
White : #FFF;
Black: #000;
Blue : #0f1129;

font:
Ageo
AgeoB

index.php 
    -> Fichier de base, "template"
    -> .php include (comme home.php) / section
    -> libraries (Bootstrap, jQuery)
    -> SEO
    -> fichier css/js (dossier css/js)

Dossier & Fichier css
    -> un fichier par section, regroupement à la fin.
    -> faire attention au nommage. ex : nom_section-caracteristique
        -> home-img OK
        -> img-1 NOPE
    -> Utilisation des fonts au début de main.css ("Ageo" & "AgeoB")
    -> Ne modifier que les classes ou id
        -> .class {} OK
        -> #class {} OK
        -> h2, a, etc. pas utilisé OK mais test des autres sections
        -> h2, a, etc. déjà utilisé NOPE. Demande au binome pour modifier sinon conflits possibles (au debut)

img 
    -> Pas trop gros en poids sinon bug

Dossier includes
    -> Comprends les différentes sections qui seront inclues dans index.php
    -> home, service, portfolio, contact, etc.
    -> Les fichiers pas inclus (ex. contact-traitement.php) sont dans le dossier principal

other 
    -> ton ancien code

Git
    -> commit qui ont du sens ^^
        -> "Modification de la section "home" OK
        -> "Modification" OK si c'est des fichiers précis mais à éviter
        -> "G fé de l'info pour la bit lol" NOPE meme si ça me ferait rire
    -> push aussitot après un commit
    -> Si tu hésites, ne force pas le crash, dis moi tout
    -> pull à chaque fois que tu travailles

