page d'accueil affichant l'enssemble des produits créer
page de gestion disponible permettant l'edition, la suppression et la creation de produit

j'utilise egalement Slugify qui necessite donc d'effectuer la commande "composer require cocur/slugify"
utilisation de "faker" pour generer des fixture aleatoire "composer require fzaninotto/faker" 
j'ai trouvé beaucoup d'explication alors j'ai utilisé faker il est simple a marché directement

utilisation de knp_paginator pour la pagination "composer require knplabs/knp-paginator-bundle" apres quelque recherche
il revenait souvent je voulais un rendu propre il est facile d'utilisation et bien documenté.


La barre de recherche est fonctionnelle, le filtre de prix maximum aussi

le filtre sur la date et la marque lui ne fonctionne pas.


Nous pouvons visualiser la page d'un bien en cliquant sur son titre
pour modifier un bien cliquer sur le bouton "modifier les produits" sur la page d'accueil qui vous enverras 
sur la page qui a pour url "localhost/admin"
chercher le produit puis cliquer sur editer à côté vous avez également la possibilité de le supprimer
tous en bas de cette page après les différents produits vous avez la possibilité d'ajouter une nouvelle Marque ou Produit