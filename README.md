# CNAM PHP Basic

## Install

Attention, les dépendances (le dossier `vendor`) ne sont pas enregistrées dans le repo.

Vous devez les installer par vous même après téléchargement du projet.

Rendez-vous dans le dossier dans lequel vous avez dézippé le fichier, puis tapez les commandes suivantes :

    cd cnam-php-basic-master
    composer install

## Contrôle continu janvier 2019

Cette application possède trois pages :

1. une page d'inscription
2. une page d'ajout d'un nouvel outil ou matériel dans la BDD
3. une page d'ajout d'une nouvelle sous-catégorie d'outil ou de matériel dans la BDD

### Contraintes techniques

La page d'inscription a été mise à jour et fonctionne avec le moteur de template Twig.

En vous inspirant de ce qui a été fait dans la page d'inscription (fichiers `public/inscription.php` et `templates/inscription.html.twig`), adaptez la page d'ajout d'outil / matériel et la page d'ajout de sous-catégorie pour qu'elles fonctionnent aussi avec Twig.

Le nom des fichiers dans le dossier `public` ne doit pas changer.

Le nom des fichiers dans le dossier `templates` ne change que d'extension.
Exemple : `templates/inscription.php` devient `templates/inscription.html.twig`.

### Analyse

Pour vous aider à mieux cerner le problème voici une analyse des données.

#### Analyse de la page `inscription`

| champ     | name      | type                | balise              | obligatoire |
|-----------|-----------|---------------------|---------------------|-------------|
| firstname | firstname | chaîne de caractère | input type text     | oui         |
| lastname  | lastname  | chaîne de caractère | input type text     | oui         |
| login     | login     | chaîne de caractère | input type text     | oui         |
| email     | email     | chaîne de caractère | input type email    | oui         |
| password  | password  | chaîne de caractère | input type password | oui         |

#### Analyse de la page `new-tool`

| champ     | name     | type                       | balise                | obligatoire |
| --------- | -------- | -------------------------- | --------------------- | ----------- |
| code      | code     | chaîne de caractère        | input type text       | oui         |
| nom       | name     | chaîne de caractère        | input type text       | oui         |
| prix      | price    | nombre à virgule flottante | input type text       | oui         |
| catégorie | category | nombre entier              | select à choix unique | oui         |
| photo     | photo    | fichier                    | input type file       | non         |

#### Analyse de la page `new-sub-category`

| champ       | name        | type                       | balise                | obligatoire |
| ----------- | ----------- | -------------------------- | --------------------- | ----------- |
| catégorie   | category    | nombre entier              | select à choix unique | oui         |
| nom         | name        | chaîne de caractère        | input type text       | oui         |
| description | description | chaîne de caractère        | textarea              | non         |

### Livraison

Ce travail est à livrer le vendredi 08/02/2018 à 24h00 au plus tard.
Pour les retardataires, un délai supplémentaire jusque dimanche 10/02/2019 à 24h00 sera toléré, mais je serai beaucoup plus exigeant sur la qualité du travail.
Autrement dit, si vous livrez en retard, le travail doit être impécable.

La livraison doit être faite sous la forme d'un fichier zip contenant tout le dossier du projet.

Vous devez déposer le fichier sur mon espace SFTP.
Si vous n'y parvenez pas, en dernier recours, envoyez-le moi par mail.

### Critères d'évaluation

- respect des consignes : structure du dossier projet, nom des pages, nom des champs, fonctionnalités
- code style : lisibilité, indentation, nommage des variables, lignes vides, espaces après ou avant mot-clés
- absence de bug (HTML, PHP et Twig)

