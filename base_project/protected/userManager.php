<?php
/* olyan függvények, amelyeket fel tudunk használni a SESSION 
 * tömb kezeléshez
 */
function IsUserLoggedIn(){
    return $_SESSION != null && 
            array_key_exists('uid', $_SESSION) &&
            is_numeric($_SESSION['uid']);
}

function UserLogout(){
    // a kijelentkezés előtti adminisztráció
    session_destroy();
    header('Location:'.ADMIN_BASE_URL);
}

function UserLogin($username, $password){
    require_once '../protected/database.php';  
    $query = "  SELECT *
                FROM users 
                WHERE username = :username AND password = :password AND active = 1 AND deleted_by IS NULL;";
    $queryParams = [
        ':username' => $username,
        ':password' => $password
    ];
    $userRecord = getRecord($query, $queryParams);
    $_SESSION['uid'] = $userRecord['id'];
    $_SESSION['username'] = $userRecord['username'];
    $_SESSION['teacher'] = $userRecord['teacher'];
    header('Location:'.ADMIN_BASE_URL);
}
