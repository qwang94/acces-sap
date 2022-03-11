# README

## Réponse aux questions :
1/ Pour créer l'application, il faut utiliser la commande suivante
```
symfony new Sap-test --version=5.4 --webapp
```
2/ Pour pointer l'url vers http://www.testrec01.local:5458

```
open ~/.symfony/proxy.json
Modifier le "tld": "wip" par "tld": "local:5458" puis enregistrer.

cd Sap-test/
symfony proxy:domain:attach www.testrec01
```

3/ Pour créer un module d'authentification, j'ai décidé d'utiliser le bundle Security de Symfony qui est très bien fait, et qui fournit toutes les fonctionnalité d'authentification et d'autorisation nécessaires pour sécuriser l'application. Donc pas besoin de se casser plus la tête.

4/ Utilisation de Boostrap pour le rendu

5/ Fixtures créés avec DataFixtures de orm-fixtures et à l'aide de Faker pour générer aléatoirement les informations.

6/ Utilisation de KnpPaginatorBundle car c'est un system déjà pré-fait. Le bundle propose également des templates boostrap de pagination, ce qui facilite énormément de tâches.
Nous pourrons l'utiliser pour faire de filtrage personnalisé, en fonction des paramètres demandés. le composant est basé sur les Events.
Pas besoin de réinventer la roue, on utilisera les roues créées par les prédécesseurs pour inventer les voitures ou des avions !


## Guide d'installation :

- Version de PHP requis : ``7.2.5``.
- [Installer composer](https://getcomposer.org/download/).
- Cloner le projet dans un dossier en local avec ```git clone url_du_projet```.
- Installer tous les packages composer avec la commande ```Composer install```.
- Pas besoin de paramétrer une propre base de donnée, car j'ai utilisé sqlite et créé un fichier ``Sap-test.db`` dans le dossier var, vous pourrez le remarquer/changer le nom dans le fichier .env.
- Créer la base de donnée ``php bin/console doctrine:database:create``. Normalement cette procédure va vous créer la base de donnée sous format fichier ```.db```.
- Mettre à jour la base de donnée ``php bin/console do:mi:mi``
- Ajouter les fixtures ```php bin/console doctrine:fixtures:load```
- Et voilà, votre projet est prêt et suffit de faire un petit ```symfony serve``` pour démarrer le serveur symfony.

## Lancement des tests :

Les test unitaires pour les entités User et Invoice (Facture) sont mis en places dans le projet.
Pour les lances, il suffit de faire la commande suivante ```php bin/phpunit --testdox```


