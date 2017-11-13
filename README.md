### Hackaton 1 Wild Code School ###
Equipe composée de Cécile et Guillaume

# HACKATHON !!
## Bordeaux, promo septembre 2017

Enfin un peu de piment ! Du code non stop pendant 24 heures, mais uniquement si vous y prenez du plaisir !  

Aucune obligation en effet de passer une nuit blanche: être à fond sur un seul sujet en équipe restreinte suffira sûrement à atteindre le but que vous vous fixerez...

Un seul impératif cependant, vous chalenger pour produire la meilleure application sur le thème demandé et dans le temps imparti !

- libre choix des équipes, mais respecter:
  - 5 équipes de 3 et une équipe de 4
  - une équipe / une techno (que du PHP ou que du JS)
- libre choix de l'interface utilisateur

## Le sujet

Développer une application permettant d'afficher les webcams et la météo de la ville de son choix.

## Les critères

- quelque chose de fonctionnel !
- l'originalité du design ou de l'interprétation du sujet
- l'ergonomie de l'interface utilisateur
- la qualité du design

et bien sûr... une présentation qui déchire !

## Les prix !

- **Premier Prix** pour l'équipe qui produit une application de qualité respectant tous les critères mentionnés plus haut
- **Coup de Coeur** pour l'équipe qui saura émouvoir le jury, même si de petites imperfections ne lui permettent pas d'atteindre la plus haute marche du podium

## Ressources

Vous devrez utiliser les deux API suivantes:

- l'API de **webcams.travel** pour tout ce qui concerne la vidéo:  
  [https://market.mashape.com/webcams-travel/webcams-travel](https://market.mashape.com/webcams-travel/webcams-travel)

- l'API d'**OpenWeatherMap** pour les données météo:  
  [https://openweathermap.org/current](https://openweathermap.org/current)

Pour les utiliser, il vous faudra ouvrir un compte utilisateur par équipe et par API.

**ATTENTION, ASTUCE !!**  
l'API de **webcams.travel** ne décrit que les fonctions permettant de recevoir des listes de webcams. Pour demander la vidéo d'une webcam, il faut, insérer un lien de ce type dans un coin de votre page HTML:
``` html
  <a name="lkr-timelapse-player"
    data-id="1178148742"
    data-play="day"
    href="https://lookr.com/1178148742"
    target="_blank">
    Nom de la ville
  </a>
```
Remarquez que ce qui est référencé par data-id se retrouve aussi sur l'url de lookr qui fournit la vidéo: c'est l'id de la webcam que vous trouverez dans toutes les réponses envoyées par l'API **GET webcams.travel**.

Il faudra aussi inclure le script suivant dans votre page:
```
<script async type="text/javascript" src="https://api.lookr.com/embed/script/player.js"></script> 
```
Les exemples d'accès à cet API sont donnés dans plusieurs environnements, notemment sous PHP et Node.js:

- **PHP**: inclure le module **Unirest** avec composer,
- **Node**: installer le module **unirest** par npm.

Regardez bien sur le site de l'API webcams.travel (Mashape) la façon d'appeler leur serveur avec chacune de ces technos...




