# Direct Medica - Test technique

## Installation

Apprés avoire dézipper le file TestDirectMedicat

```bash
$ composer install
```

[![Build Status](https://travis-ci.org/joemccann/dillinger.svg?branch=master)](https://travis-ci.org/joemccann/dillinger)

la base de donnes utiliser dans ce projet
  - Nom de la base : sf55
  - utilisateur: root
  - mot de passe: [vide]
  - ip server: 127.0.0.1:3306

# Base de données

  - creer une base de donner sf5 
  - Ou utilisé la cmd
  - Pour creer la base
```bash  
 $ php bin.console doctrine:database:create
 ```
 - ensuite pour creer les 2 table Contrat et affilie
 ```bash  
 $ php bin.console doctrine:migrations:migrate
 ```
 Page 1: un tableau des liste des contrats
 ![liste des contrats](page1.jpg)
 Page 2: creation contrat avec affiliées
 ![liste des contrats](page2-creation-contrat.jpg)
 ou editer un contrat
  ![liste des contrats](page2-creation-contrat.jpg)
 
 
 Demarrer un server local sous symfony
 ```sh
php -S 127.0.0.1:8000 -t public
```
 
