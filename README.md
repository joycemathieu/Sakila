# ECF-6 - SAKILA

## Table des matières
1. Specification technique
2. Difficultés
3. Installation


### Specification technique
***
J'ai choisis d'utiliser bootswatch qui est un site qui permet de récupérer des thèmes fait pour bootstrap afin d'accélérer le css.
Le thème utilisé est LUX via un CDN.

J'ai décidé de séparer les vues des models pour avoir des "managers" même si je pense que j'ai encore quelques difficultés avec cela.


### Difficultés
***
La base de donné est très longue en compréhension.
Je n'ai pas fait la partie création, modification, suppression car j'ai encore des difficultés avec les managers.


### Installation
***

*Etape 1 :Création de la BDD*

Aller dans le dossier sql-database pour récuperer les deux fichiers .sql et les 'jouer'.


*Etape 2 :Lancement du serveur local de PHP*

Aller sur votre terminal et taper php -S localhost:4000. 

Ouvrir votre navigateur et lancé le localhost:4000 si il y a une erreur vérifier que la connexion à la BDD correspond à la votre (dossier : helper/db.php).


