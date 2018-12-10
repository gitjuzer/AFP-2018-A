<?php

if(!array_key_exists('A', $_GET) || empty($_GET['A'])){
    $_GET['A'] = 'list';
}

switch($_GET['A']){
    case 'add': require_once __DIR__.'/autok/add.php';
        break;
    case 'list': require_once __DIR__.'/autok/list.php';
        break;
    case 'deletall': require_once __DIR__.'/autok/deletall.php';
        break;
    case 'delete':
        if(array_key_exists('ID', $_GET) && !empty($_GET['ID'])){
            $query = "DELETE FROM Autok WHERE id = :id";
            $params = [ ':id'   =>   $_GET['ID']];
            
            require_once '../protected/database.php';  
            executeDML($query, $params);
        }
        header('Location: '.ADMIN_BASE_URL.'?M='.$_GET['M']);
        break;
    default: echo 'Nincs ilyen művelet!';
        break;
}
