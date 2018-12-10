<?php

if(!array_key_exists('A', $_GET) || empty($_GET['A'])){
    $_GET['A'] = 'list';
}

switch($_GET['A']){
    case 'matek':  header('Location:'.'http://localhost/base_project/protected/adminView/tanar/matek.php/');
        break;
    case 'angol': require_once __DIR__.'/tanar/angol.php';
        break;
    case 'alapprogramozas': require_once __DIR__.'/tanar/alapprogramozas.php';
        break;
    
    default: echo 'hiba!';
        break;
}