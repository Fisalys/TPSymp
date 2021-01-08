# TP Symfony
STILLATUS Julien

Tout d'abord avant de me lancer dans le projet, j'ai fait quelque recherche sur ce qu'il faut pour faire un blog au niveau des entités.
J'en ai 5: 
	-Articles
	-Commentaires
	-Users
	-Mot Clés
	-Categories

J'ai ajouté "mot clé" et "catégorie" même si j'était pas sur d'avoir le temps de faire les fonctionnalité qui vont avec. Mais au moins ils
sont dans le schéma de base de donnée.

J'ai configurer mon projet symfony en utilisant sa version 5. Cela implique que pour lancer le server j'utilise la commande symfony serve.
J'utilise aussi wamp pour la base de donnée MySQL.

## Création de la base de donnée 

Uitlisation de la commande php bin/console doctrine:database:create
Changement dans le .env du nom de la base et de url.

J'ai ensuite crée les entité avec la commande php bin/console make:entity.
J'ai d'abord commencé par l'entité users avec la commande php bin/console make:user. Ce qui me permetra de commencer l'interface pour la connexion.
J'ai finit la reste des entity et je les ai modifié pour ajouter les relations.

## Interface de connexion

Utilisation de la commande php bon/console make:auth pour la connexion et ensuite de php bon/console make:registration-form pour l'inscription.
Cela permet de se connecter sans trop de soucis.

Pour créer un article j'utile CKeditor pour l'editeur de texte et EasyAdmin dans sa version 2 pour avoir une interface assez propre car j'ai perdu un trop temps 
à comprendre comment j'allait faire les tp. Du coup l'interface de easyadmin est la page que l'on arrive quand on se connecte, ce qui permet alors de crée un article.

La page d'acceuil ne contient pas grand chose à part un bouton pour se connecter et un bouton qui permet de voir tous les articles qui ont était crées.

## Technologies utilisée
 
PHP Version 7.4.9
Easy Admin Version 2.
CKEditor
Symfony Version 5.2.1