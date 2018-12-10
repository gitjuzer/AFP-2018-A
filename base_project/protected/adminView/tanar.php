<?php

if(!array_key_exists('A', $_GET) || empty($_GET['A'])){
    $_GET['A'] = 'list';
}

switch($_GET['A']){
    case 'matek': require_once __DIR__.'/tanar/matek.php';
        break;
    case 'angol': require_once __DIR__.'/tanar/angol.php';
        break;
    case 'alapprogramozas': require_once __DIR__.'/tanar/alapprogramozas.php';
        break;
    
    default: echo 'hiba!';
        break;
}