# mmg


**SUJET A THEME : GENERATEUR DE**

**CALCUL MENTAL**

A la fin de l’année, il était prévu de faire un stage en

entreprise. Mais ma situation à la fin de l’année à fait

que je n’ai pas trouvé d’entreprise à temps, et ai été

suggéré alors de réaliser un projet à thème

préalablement validé (avec la possibilité de soumettre

un nouveau thème à valider), pour la soutenir à la fin

du mois d’Aout.

Choix du thème :

J’ai d’abord été intéressé par le thème de Générateur

de mèmes par Python, mais je n’avais pas encore de

connaissance dans ce langage. J’avais alors prévu

apprendre rapidement ce langage pour réaliser ce

projet, mais ma situation a fait que j’ai retracté à un

thème qui ne requérait pas de langage ou logiciel, un

thème que je pouvais réaliser avec mes compétences

actuelles : le Générateur de Calcul Mental.





Interprétation du thème :

Pour moi, un générateur donnait à son utilisateur, la

possibilité de demander ce qu’offre le générateur, à

travers un formulaire, où l’utilisateur indique ses

préférences, puis le générateur génère son offre en

respectant les choix de préférence de l’utilisateur. En

plus, l’idée de calcul mental me fait penser au pop

quizz avec des chiffres et des opérations (addition,

soustraction, …) où l’on doit trouver le résultat après

calcul. Ainsi, voici mon générateur de calcul mental :





**PRESENTATION**

Ce générateur de calcul mental se présente comme une

application web. Il possède 3 pages.

La première page présente 3 rubriques de choix pour

personnaliser ses maths :

\- le choix d’intervalle de nombres entre 0 et 100 :

\- le choix des opérateurs(addition, soustraction, multiplication)

:

\- le choix de nombre d’opérations de 1 et 10 :





La deuxième page est réservée à la mise en place de

l’exercice. C’est-à-dire que, une fois les paramètres de

la première page soumises, ils seront envoyés à la

seconde page qui elle génèrera les maths en arrière-

plan, puis enverra l’utilisateur, grâce à un lien, à la

troisième page, où il trouvera le calcul à faire.

(2eme page)

(3eme page)





Sur la troisième page, l’utilisateur retrouve le calcul

généré comme par paramétré.

Il pourra faire le calcule, puis soumettre sa reponse

grâce au champ de texte.

Une fois soumis, une ligne apparaitra rappelant sa

réponse soumise, accompagné de la réponse correcte

au calcul (à révéler en cliquant sur le texte).





Tout en bas, se trouve un bouton à cliquer pour

générer un nouvel exercice, avec les anciennes

préférences. Tout en haut, un lien pour retourner à la

page d’accueil où se trouve les paramètres.

(Retourner à l’accueil)

Pour générer





**DETAILS SUR LA REALISATION**

Ce projet a été réalisé sur PC.

Choix du logiciel :

J’ai codé avec Visual Studio Code, un éditeur de texte

de Microsoft, prévu pour la programmation. Ses

caractéristiques permettent un codage facile et

sophistiqué.

Langages de programmation utilisés  :

Les langages apprises le long de l’année étaient HTML

et CSS, php, et MySQL. En les prenant tous en compte,

le choix du type de fichier qui contiendra les codes de

l’application doit être de source PHP (fichier en .php

comme extension). Etant capable de prendre en charge

les codes du langage HTML(/CSS), ce fichier permettra

en plus, la compilation des codes du langage php, qui

lui aussi permet d’écrire du SQL(MySQL).





Mes projets (MSPR) précédents m’ont permis de

mettre en place un squelette pour les applications web.

Des fichiers qui contiennent des codes de bases qui

peuvent revenir dans tous les projets :

\- comme l’entête du html

\- la connexion à une base de données avec du php





Ma première construction fut le générateur de

calcul, avec du php. J’avais en tête la génération

aléatoire des chiffres, et des opérations. De ce fait,

j’ai utilisé la fonction ‘rand( 0 , 100 )’ pour générer

aléatoirement un chiffre entre 0 et 100, et

‘rand( 1 , 3 )’ dans des instructions ‘switch () {case}’

pour générer aléatoirement les opérateurs ; le tout

dans un ‘for () {}’ loop pour créer une ligne de

calcul dans la limite du nombre d’opérations

soumis.

Ce n’est que plus tard, afin de possible donner du

choix de préférence à l’utilisateur, que j’ai

découvert ‘array\_rand()’ qui permet la génération

aléatoire des données d’un ‘array()’, et ai changé

les intervalles de chiffre par des variables qui

recueilleront les choix de l’utilisateur.

Pour créer l’array() précédemment mentionné, il

m’a fallu renommer les attribues ‘name=’ des





<input type=checkbox> en ajoutant des crochets.

Dans les données, leurs valeurs seront stockées

comme un array.

Grace à l’élément <form> du HTML, avec l’attribut

‘method=’, l’on est capable de recueillir des

données entrées par l’utilisateur. En plein codage,

j’utilise ‘method=GET’ qui affiche ces données dans

l’url, en finalisation je le change en

‘method=POST’, une version plus cachotière du

traitement des données.

Ce <form> de la page index.php, grâce à l’attribut

‘action=’ va envoyer les données à la page

moment.php, où se trouve les instructions qui

traiteront les données.

Arrivées à moment.php, ces données seront

récupérées dans des variables de SESSION,





(La SESSION est un moyen de stockage de données,

temporaire, qui se détruit automatiquement à la

fermeture du navigateur.)

En ce qui concernent le stockage de la ligne

générée, j'ai utilisé une base de données localhost.

L’insertion dans la base s’est faite avec du MySQL

dans le traitement comme instruit dans la page

moment.php :

Donc, à chaque insertion, le php récupère les

préférences des $\_SESSION[], pratique un wipe de

la table de la base de données concernée, puis

réalise le loop pour enfin insérer une nouvelle ligne

de calcul dans cette base.





La bd se présente alors comme suit :

Une table avec 3 colonnes dont,

\- ‘nombre’ INT qui stocke les chiffres

\- ‘operation’ VARCHAR qui stocke les signes

\- ‘id’ La clé primaire avec de l’AUTO\_INCREMENT qui

permet d’identifier les lignes de la table surtout et

de les manipuler facilement dans le phpMyAdmin.

C’est également avec du SQL en plus du ‘while () {}’

loop du php, que la troisième page affiche la ligne de

calcul.





Cette methode est repetée dans un <script> javascript

pour effectuer le calcul en arriere-plan afin de l’afficher

apres la reponse de l’utilisateur.





**MARKETING**

Vu que je n’ai realisé un reel stage, ce qui suit ne sera

que illustration de la strategie de marketing qui aurait

pu etre ; c’est-à-dire generer du traffic (se faire

connaitre, attirer du monde, faire perpetuer

l’application).

Jouer sur les mot clés :

Les mots clés sont le principal outil de commnication

dans le digital. Parce que, déjà ce sont des mots, ils se

trouveront dans les titres, les descriptions, les

messages, les resultats de recherches,… donc les

images, videos, applications,… auront besoin de mots

clés dans leur details, meta données, titre, descriptifs,…

pour les interpreter. Ils permettront l’emplacement de

ces creations dans la communication des internautes

(dans le digital(sur internet)).

De ce fait, une definition coherente de mots clés autour

du generateur de calcul mental s’impose.





La balise <titre> permet de definir un titre à une page

web. J’y mets le nom de l’application, precedé d’un

titre indicatif de chacune des pages en question :

Dans <meta name=keywords> je mettrai des mots clés

de courte à longue traine :

<meta name="keywords" content="<?php echo $metaKeywords ?> calcul mental,

calcul mental en ligne, generateur de calcul mental, generateur de calcul ment

al en ligne, mathematiques en ligne, exercice de maths en ligne">

Dans <meta name=description> on mettra une courte

description diversifiée en lexique des mathematiques :

<meta name="description" content="<?php echo $metaDescription ?>Un Generat

eur de calcul mental. Parametrez vos chiffres et vos signes d'operation, et la

ncez vous dans une boucle infinie d'exercices de mathematiques">





Se faire connaitre ne nécessite pas que

des mots clés. On peut retrouver des

leads, par d’autres moyens, comme les

liens qui dirigent vers le site.

Les liens de redirection :

Ici j’ai décidé d’illustrer une chaine

d’éducation sur Youtube, qui annonce

gratuitement Mental Maths Generator par

une brève présentation de ses

caractéristiques à une audience plutôt

importante.

Si j’avais réalisé ce travail pour une

entreprise où j’aurais fait le stage,





alors je devrais pouvoir rediriger

l’internaute par un lien, à cette

réalisation, dans un profil de

fonctionnaire. D’où mon profil LinkedIn

qui recenserait mes travaux.





**A SAVOIR**

Pour acceder au site, l’examinateur aura besoin d’un

logiciel comme [xampp](https://www.apachefriends.org/fr/index.html)[,](https://www.apachefriends.org/fr/index.html)[ ](https://www.apachefriends.org/fr/index.html)et devra etablir une connexion

au localhost en activant Apache :

Obtenir xxamp





Executer xampp (en tant qu’administrateur)





Deplacer le dossier du site dans htdocs

Activer Apache





Puis retrouver le site à partir de

[http://localhost/\[dossier](http://localhost/%5bdossier%20du%20site%5d)[ ](http://localhost/%5bdossier%20du%20site%5d)[du](http://localhost/%5bdossier%20du%20site%5d)[ ](http://localhost/%5bdossier%20du%20site%5d)[site\]](http://localhost/%5bdossier%20du%20site%5d)

Si Apache ne demarre pas, consulter son nom de port

et retrouver quel autre application utilise ce port.

Vous pourrez desinstaller cette app si vous ne l’utilisiez

pas. Ou simplement suivez des tutos pour changer le

port de l’Apache :

[https://www.google.com/search?q=changer+port+apa](https://www.google.com/search?q=changer+port+apache+xampp&rlz=1C1CHBF_frFR860FR861&oq=changer+port+apache+&aqs=chrome.2.69i57j0i512l2j0i22i30l7.8233j0j4&sourceid=chrome&ie=UTF-8)

[che+xampp&rlz=1C1CHBF_frFR860FR861&oq=changer](https://www.google.com/search?q=changer+port+apache+xampp&rlz=1C1CHBF_frFR860FR861&oq=changer+port+apache+&aqs=chrome.2.69i57j0i512l2j0i22i30l7.8233j0j4&sourceid=chrome&ie=UTF-8)

[+port+apache+&aqs=chrome.2.69i57j0i512l2j0i22i30l7.](https://www.google.com/search?q=changer+port+apache+xampp&rlz=1C1CHBF_frFR860FR861&oq=changer+port+apache+&aqs=chrome.2.69i57j0i512l2j0i22i30l7.8233j0j4&sourceid=chrome&ie=UTF-8)

[8233j0j4&sourceid=chrome&ie=UTF-8](https://www.google.com/search?q=changer+port+apache+xampp&rlz=1C1CHBF_frFR860FR861&oq=changer+port+apache+&aqs=chrome.2.69i57j0i512l2j0i22i30l7.8233j0j4&sourceid=chrome&ie=UTF-8)

Une fois arrivé sur le site, vous retrouverez dans le coin

haut gauche, un moyen de créer la bd et la table

necessaires au bon fonctionnement du generateur.

include("config/config.inc.php");

try {

$bdd = new PDO($url, $login, $password);

} catch (Exception $e) {

$url = "mysql:host=localhost";

try {

$bdd = new PDO($url, $login, $password);

} catch (Exception $e) {

die('Erreur : ' . $e->getMessage());

}





$ici = "<form action='index.php' method='POST' id='ici' style='margin-

top:25px'>Cliquez ici pour créer la base de donnée 'calcul' <input type='submi

t' value='CREER' name='creer'/></form>";

echo $ici;

}

?>

<?php

$erreur = "";

if (isset($\_POST["creer"])) {

if (empty($erreur)) {

$creer = "CREATE DATABASE IF NOT EXISTS `calcul` **DEFAULT** CHARACTER SET

utf8mb4 **COLLATE** utf8mb4\_general\_ci;

USE `calcul`;

CREATE TABLE `pages` (

`id` int(11) NOT NULL,

`nombre` int(11) NOT NULL,

`operation` varchar(500) NOT NULL

) ENGINE=InnoDB **DEFAULT** CHARSET=utf8mb4;

ALTER TABLE `pages`

ADD PRIMARY KEY (`id`);

ALTER TABLE `pages`

MODIFY `id` int(11) NOT NULL AUTO\_INCREMENT;

COMMIT;";

$bdd->exec($creer);

echo "<style>#ici{display:none;}</style>";

}

}





**REMERCIEMENTS**

\- Je vous remercie pour l’attention portée à mon

travail

\- Je remercie aussi le directeur de l’ecole de m’avoir

permis cette alternative, à la place du stage de fin

d’année. Je me debrouillerai pour faire mieux la

prochaine fois.

