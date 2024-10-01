# portfolio-laravel

#Mon Portfolio

##Ce projet est un portfolio personnel créé avec Laravel, un framework PHP moderne. 
##Il présente mes compétences, mes projets, ainsi que mon parcours professionnel, avec une interface fluide et responsive.
Table des matières :
    Aperçu du projet
    Technologies utilisées
    Installation et configuration
    Fonctionnalités principales
    Utilisation
    Contribution
    Licence


##Aperçu du projet

##Ce portfolio a été conçu pour montrer mes compétences en tant que développeur Full-Stack. Il inclut les sections suivantes :
    Page d'accueil avec une introduction sur moi.
    Une galerie de mes réalisations.
    Une section contact avec un formulaire permettant de me joindre directement.


##L'objectif est de fournir un site interactif et facile à naviguer, qui soit également responsive pour une expérience mobile fluide.
###Technologies utilisées :
    PHP (Laravel 11) : Pour la gestion du backend et la logique métier.
    WAMP : Utilisé pour émuler l'environnement de développement local (Windows, Apache, MySQL, PHP).
    HTML5, CSS3, JavaScript : Pour la structure, le style et l'interactivité de l'interface utilisateur.
    MySQL : Base de données utilisée pour stocker les informations des réalisations et des contacts.
    Git : Utilisé pour la gestion du contrôle de version.


##Installation et configuration
###Prérequis
    WAMP installé sur votre machine (Windows).
    PHP 8.x ou supérieur.
    Composer : Un gestionnaire de dépendances PHP.
    Git : Si vous souhaitez cloner le projet depuis un dépôt Git.

##Étapes d'installation:

Clonez le projet:
```
git clone https://github.com/votre-utilisateur/portfolio.git
```

Accéder au répertoire du projet :
```
cd portfolio
```

Installer les dépendances du projet avec Composer :
```
composer install
```

Copier le fichier .env.example en .env et configurer vos paramètres d'environnement (base de données, hôte, etc.) :
```
cp .env.example .env
```

Générer la clé d'application Laravel :
```
php artisan key:generate
```

Configurer la base de données : Assurez-vous que MySQL est correctement configuré sous WAMP. 
Mettez à jour les variables d'environnement dans le fichier .env :
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=portfolio
DB_USERNAME=root
DB_PASSWORD=
```

Exécuter les migrations pour créer les tables dans la base de données :
```
php artisan migrate
```

Lancer l'application en local :
```
php artisan serve
```

Vous pourrez ensuite accéder à l'application à l'adresse suivante : 
```
http://localhost:8000.
```

##Fonctionnalités principales
    Responsive Design : Le site est entièrement optimisé pour être consulté aussi bien sur desktop que sur mobile.
    Galerie de projets : Une section dédiée à mes réalisations avec des images et des descriptions.
    Formulaire de contact : Un formulaire permettant aux utilisateurs de m'envoyer des messages directement depuis le site.


##Utilisation

Une fois l'installation terminée, vous pouvez personnaliser le contenu du portfolio en ajoutant vos propres réalisations. Pour cela, modifiez les fichiers dans le répertoire resources/views pour ajuster le texte, les images, et les informations selon vos besoins.
Contribution

Les contributions à ce projet sont les bienvenues. Si vous souhaitez proposer des améliorations, merci de soumettre une pull request ou d'ouvrir une issue dans le dépôt Git.
