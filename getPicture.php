<?php

function getPicture($main){

    switch($main){
            case 'Clouds':
                $img = "img/nuages.jpg";
                break;
            case 'Clear' :
                $img = "img/soleil.jpg";
                break;
            case 'Rain':
                $img = "img/pluie.jpg";
                break;
            case 'Haze':
                $img = "img/brume.jpg";
                break;
            case 'Thunderstorm':
                $img = "img/orage.jpg";
                break;
            case 'Drizzle':
                $img = "img/pluie.jpg";
                break;
            case 'Snow':
                $img = "img/neige.jpg";
                break;
            default:
                $img = "img/nuages.jpg";
    }

    return $img;
}