<?php


    $query = "SELECT * FROM matekfeladatok";
    $records = getList($query);
    
?>
<a href="http://localhost/base_project/admin/index.php">visszalépés</a>



<h1> Matek feladatok</h1>
<table  align="center" style="width:100%">
    <thead>
        <tr>
            <th>id</th>
            <th>kérdés</th>
            <th>válasz1</th>
            <th>válasz2</th>
            <th>válasz3</th>
            <th>válasz4</th>
            <th>jóválasz</th>
            
            
        </tr>
    </thead>
    <tbody align="center" style="width:100%">
        <?php foreach($records as $record): ?>
        <tr>
            <td><?=$record['id']?></td>
            <td><?=$record['question']?></td>
            <td><?=$record['answer1']?></td>
            <td><?=$record['answer2']?></td>
            <td><?=$record['answer3']?></td>
            <td><?=$record['answer4']?></td>
            <td><?=$record['goodanswer']?></td>
            <?php endforeach;?>
        </tr>
         </tbody>
         </table>

<?php
 

    $query = "SELECT * FROM angolfeladatok";
    $records = getList($query);
?>
<h1>Angol feladatok</h1>
<table  align="center" style="width:100%">
    <thead>
        <tr>
            <th>id</th>
            <th>kérdés</th>
            <th>válasz1</th>
            <th>válasz2</th>
            <th>válasz3</th>
            <th>válasz4</th>
            <th>jóválasz</th>
            
            
        </tr>
    </thead>
    <tbody align="center" style="width:100%">
        <?php foreach($records as $record): ?>
        <tr>
            <td><?=$record['id']?></td>
            <td><?=$record['question']?></td>
            <td><?=$record['answer1']?></td>
            <td><?=$record['answer2']?></td>
            <td><?=$record['answer3']?></td>
            <td><?=$record['answer4']?></td>
            <td><?=$record['goodanswer']?></td>
            <?php endforeach;?>
        </tr>
         </tbody>
         </table>
       

<?php


    $query = "SELECT * FROM alapprogramozasfeladatok";
    $records = getList($query);
?>
<h1>Alap programozási feladatok </h1>
<table  align="center" style="width:100%">
    <thead>
        <tr>
            <th>id</th>
            <th>kérdés</th>
            <th>válasz1</th>
            <th>válasz2</th>
            <th>válasz3</th>
            <th>válasz4</th>
            <th>jóválasz</th>
            
            
        </tr>
    </thead>
    <tbody align="center" style="width:100%">
        <?php foreach($records as $record): ?>
        <tr>
            <td><?=$record['id']?></td>
            <td><?=$record['question']?></td>
            <td><?=$record['answer1']?></td>
            <td><?=$record['answer2']?></td>
            <td><?=$record['answer3']?></td>
            <td><?=$record['answer4']?></td>
            <td><?=$record['goodanswer']?></td>
            <?php endforeach;?>
        </tr>
         </tbody>
         </table>
        





<?php


// a lekérdezések végrehajtásához szükséges függvények 
// cél: máshonnan átadva a lekérdezés szövegét + paramétereit 
//  megtörténjen a végrehajtás 

function getConnection(){
    $connection = new PDO('mysql:host=localhost;dbname=zh_project;','root','');
    //PDO('mysql:host=localhost;dbname=dw1_n_re1d25;','root','');
    // 2) inicializáljuk a kapcsolatot utf-8 kódolásra
    $connection->exec("SET NAMES 'utf8'");
    return $connection;
}
function getRecord($queryString, $queryParams = []){
    
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



   
    
    
    


