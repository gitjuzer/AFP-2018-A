<?php

if(!array_key_exists('A', $_GET) || empty($_GET['A'])){
    $_GET['A'] = 'list';
}

switch($_GET['A']){
    case 'matek':  header('Location:'.'http://localhost/base_project/protected/adminView/tanar/matek.php/');
        break;
    case 'angol': header('Location:'.'http://localhost/base_project/protected/adminView/tanar/angol.php/');
        break;
    case 'alapprogramozas': header('Location:'.'http://localhost/base_project/protected/adminView/tanar/alapprogramozas.php/');
        break;
    case 'list': header('Location:'.'http://localhost/base_project/protected/adminView/tanar/list.php/');
        break;
    
    
   
    
    
    default: echo 'hiba!';
        break;
}