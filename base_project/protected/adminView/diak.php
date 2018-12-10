<?php

if(!array_key_exists('A', $_GET) || empty($_GET['A'])){
    $_GET['A'] = 'list';
}

switch($_GET['A']){
    case 'matek': require_once __DIR__.'/diak/matek.php';
        break;
    case 'angol': require_once __DIR__.'/diak/angol.php';
        break;
    case 'alapprogramozas': require_once __DIR__.'/diak/alapprogramozas.php';
        break;
    
    default: echo 'hiba!';
        break;
}
