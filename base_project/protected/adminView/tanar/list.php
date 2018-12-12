
<style>
   
.body {
   
    font-size: 30pt;
    background-color: rgb(42, 85, 179);
    margin: 0;
    height: 100%;
    border: 10px #3b464c;
   
}
h1 {
    font-size: 60pt;
    color: black;
    text-align: center;
    padding: 18px 0 18px 0;
    margin: 0 0 10px 0;
}
h1 span {
    border: 4px dashed #20bcd5;
    padding: 10px;
}
p {
    padding: 0;
    margin: 0;
}
.img-circle {
    border: 3px solid white;
    border-radius: 50%;
}
.section {
    
    padding: 15px;
    margin-bottom: 10px;
    border-radius: 10px;
    border: 10px #3b464c;
}


.quote {
    font-size: 12pt;
    text-align: right;
    margin-top: 10px;
}
table {
    width: 100%;
    font-size: 11pt;
}
table, th, td {
    
    border-collapse: collapse;
    text-align: center;
    table-layout: fixed;
}
.selected {
    background-color: #f36f48;
    font-weight: bold;
    color: white;
}
li {
    margin-bottom: 15px;
    font-weight: bold;
}


hr {
    border: 0;
    height: 1px;
    background: #f36f48;
}
form {
    text-align: center;
    margin-top: 0;
}

h2{
    width: 20px;
    height: 30px;
   
           
    
}
.submit {
    background-color: #3fb6b2;
    padding: 12px 45px;
    border-radius: 5px;
    cursor: pointer;
    color: #ffffff;
    border: none;
    outline: none;
    margin: 0;
    font-weight: bold;
}
.submit:hover {
    background-color: #43a09d;
}
textarea {
    height: 100px;
}
input, textarea {
    margin-bottom: 10px;
    font-size: 11pt;
    padding: 15px 10px 10px;
    border: 1px solid #cecece;
    background-color: #efefef;
    color: #787575;
    border-radius: 5px;
    width: 70%;
    outline: none;
}
.face {
    transform: scale(0.4);
    margin: 0 auto;
    display: block;
    margin-top: -35px;
    margin-bottom: -25px;
}
#contacts img {
    height: 50px;
    width: 50px;
    margin-left: 7px;
    margin-right: 7px;
}


    </style>








<?php


    $query = "SELECT * FROM matekfeladatok";
    $records = getList($query);
    
?>
    <div class="body">
<a href="http://localhost/base_project/admin/index.php">visszalépés</a>



<h1> Matek feladatok</h1>
<table  align="center" style="width:100%  ">
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
        

</div>




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



   
    
    
    


