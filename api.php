<?php

function get($url) {
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    $saida = curl_exec($curl);
    curl_close($curl);

    return $saida;
}
  
header('Content-Type: application/json');

    $filtro0 = 'abv_gt=4';
    $filtro1 = 'abv_lt=4';

    $filtro2 = 'ibu_gt=40';
    $filtro3 = 'ibu_lt=35';

    $filtro4 = 'ebc_gt=8';
    $filtro5 = 'ebc_lt=8';
    
    $filtroName = 'beer_name=Buzz';

    switch ($_REQUEST['filtro']){
        case 0:
            echo get('https://api.punkapi.com/v2/beers?'.$filtro0);
        break;
        case 1:
            echo get('https://api.punkapi.com/v2/beers?'.$filtro1);
        break;
        case 2:
            echo get('https://api.punkapi.com/v2/beers?'.$filtro2);
        break;
        case 3:
            echo get('https://api.punkapi.com/v2/beers?'.$filtro3);
        break;
        case 4:
            echo get('https://api.punkapi.com/v2/beers?'.$filtro4);
        break;  
        case 5:
            echo get('https://api.punkapi.com/v2/beers?'.$filtro5);
        break;  
        case 6:
            echo get('https://api.punkapi.com/v2/beers?'.$filtroName);
        break;  
    }
