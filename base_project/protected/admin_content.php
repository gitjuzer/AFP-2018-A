<?php 
/* Kettéválasztom a dolgot: 
 *  - nem bej. user) csak bejelentkezni tud
 *  - bej. user) bejelentkezésen kívül mindent tud csinálni
 */

// Ell. hogy nincs-e bejelntkezve user
if(!IsUserLoggedIn()){
     require_once PROTECTED_DIR.'adminView/login.php';
}
else{
    if(array_key_exists('A', $_GET) && $_GET['A'] == 'logout'){
        UserLogout();
    }
    if(array_key_exists('M', $_GET) && $_GET['M'] == 'diak'){
        require PROTECTED_DIR.'adminView/diak.php';
    }
    if(array_key_exists('M', $_GET) && $_GET['M'] == 'tanar'){
        require PROTECTED_DIR.'adminView/tanar.php';
    }
}

