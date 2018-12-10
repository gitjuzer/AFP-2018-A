<?php


// a lekérdezések végrehajtásához szükséges függvények 
// cél: máshonnan átadva a lekérdezés szövegét + paramétereit 
//  megtörténjen a végrehajtás 

function getConnection(){
    $connection = new PDO(DB_TYPE.':host='.DB_HOST.';dbname='.DB_NAME.';',DB_USER, DB_PASS);
    //PDO('mysql:host=localhost;dbname=dw1_n_re1d25;','root','');
    // 2) inicializáljuk a kapcsolatot utf-8 kódolásra
    $connection->exec("SET NAMES '".DB_CHARSET."'");
    return $connection;
}
function getRecord($queryString, $queryParams = []){
    require_once '../protected/admin_config.php'; 
    $connection = getConnection();  
    // 3) segédváltozóba megfogalmazzuk a lekérdezést
    // ==>paraméterben kapom 
    // 4) a lekérdezésből utasítás készítünk 
    $statement = $connection->prepare($queryString);
    // 5) végreahjtjuk a lekérdezést
    // ==> az ehhez szükséges paramétereket paraméterben kapom
    $success = $statement->execute($queryParams);
    // 6) ha sikerült a végrehajtás visszaolvassuk a választ
    $result = [];
    if($success){
        $result = $statement->fetch();
    }
    // 7) lezárom az utasítást
    $statement->closeCursor();
    // 8) lezárom a kapcsolatot
    $connection = null;
    
    return $result;
}
function getList($queryString, $queryParams = []){
    $connection = getConnection();  
    // 3) segédváltozóba megfogalmazzuk a lekérdezést
    // ==>paraméterben kapom 
    // 4) a lekérdezésből utasítás készítünk 
    $statement = $connection->prepare($queryString);
    // 5) végreahjtjuk a lekérdezést
    // ==> az ehhez szükséges paramétereket paraméterben kapom
    $success = $statement->execute($queryParams);
    // 6) ha sikerült a végrehajtás visszaolvassuk a választ
    $result = [];
    if($success){
        $result = $statement->fetchAll();
    }
    // 7) lezárom az utasítást
    $statement->closeCursor();
    // 8) lezárom a kapcsolatot
    $connection = null;
    
    return $result;
}
function getField($queryString, $queryParams = []){
    $connection = getConnection();  
    // 3) segédváltozóba megfogalmazzuk a lekérdezést
    // ==>paraméterben kapom 
    // 4) a lekérdezésből utasítás készítünk 
    $statement = $connection->prepare($queryString);
    // 5) végreahjtjuk a lekérdezést
    // ==> az ehhez szükséges paramétereket paraméterben kapom
    $success = $statement->execute($queryParams);
    // 6) ha sikerült a végrehajtás visszaolvassuk a választ
    $result = [];
    if($success){
        $result = $statement->fetch()[0];
    }
    // 7) lezárom az utasítást
    $statement->closeCursor();
    // 8) lezárom a kapcsolatot
    $connection = null;
    
    return $result;
}
function executeDML($queryString, $queryParams = []){
    require_once '../../protected/admin_config.php';  
    $connection = getConnection();  
    // 3) segédváltozóba megfogalmazzuk a lekérdezést
    // ==>paraméterben kapom 
    // 4) a lekérdezésből utasítás készítünk 
    $statement = $connection->prepare($queryString);
    // 5) végreahjtjuk a lekérdezést
    // ==> az ehhez szükséges paramétereket paraméterben kapom
    $success = $statement->execute($queryParams);
    /*
    // 6) ha sikerült a végrehajtás visszaolvassuk a választ
    $result = [];
    if($success){
        $result = $statement->fetch()[0];
    }
     * */

    // 7) lezárom az utasítást
    $statement->closeCursor();
    // 8) lezárom a kapcsolatot
    $connection = null;
    
    return $success;
}

/*
 * HF: getList(), getField() kidolgozása
 * 
 */
