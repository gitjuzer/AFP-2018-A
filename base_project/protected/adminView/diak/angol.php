
<?php
  
    $query = "SELECT count(*) as total from angolfeladatok;";
    $queryParams = [
        
    ];
    $userRecord = getRecord($query, $queryParams);
    $_SESSION['total'] = $userRecord['total'];
    
    $max = $_SESSION['total'];
    
   $random = rand(1, $max);
    
    $query = "select * from angolfeladatok
 where id = :id;";
    $queryParams = [
        ':id' => $random
    ];
    $userRecord = getRecord($query, $queryParams);
    $_SESSION['id'] = $userRecord['id'];
      $_SESSION['question'] = $userRecord['question'];
        $_SESSION['answer1'] = $userRecord['answer1'];
        $_SESSION['answer2'] = $userRecord['answer2'];
        $_SESSION['answer3'] = $userRecord['answer3'];
        $_SESSION['answer4'] = $userRecord['answer4'];
        $_SESSION['goodanswer'] = $userRecord['goodanswer']; //tárolja az adot feadat jó válaszának számát
        

    
   
?>









<style>
   
.body {
   
    font-size: 50pt;
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
h3{
    font-size: 12pt;
}

.quote {
    font-size: 12pt;
    text-align: right;
    margin-top: 10px;
}
table {
    width: 50%;
    font-size: 40pt;
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

 <div class="body">


<form method="POST">
    
    
    <table  align="center" style="width:100%">
  <tr>
    <th></th>
    <th  colspan="2"  ><?php echo $_SESSION['question']?></th> 
   
     <th><a href="http://localhost/base_project/admin/index.php"><h3>Angol kérdés sor befejezése</h3></a></th>
  </tr>
  <tr>
    <td></td>
    <td><input type="radio" name="answer" value=1 checked=""><?php echo $_SESSION['answer1']?></td>
    <td><input type="radio" name="answer" value=2><?php echo $_SESSION['answer2']?></td>
    <td></td>
  </tr>
  
  <tr>
    <td></td>
    
    <td><input type="radio" name="answer" value=3><?php echo $_SESSION['answer3']?></td>
    <td><input type="radio" name="answer" value=4><?php echo $_SESSION['answer4']?></td>
   
    <td><button type="submit" name="next">Következő</button></td>
    <td></td>
    
  </tr>
 
</table>
    
  

</body>
</html>
    
    
</form>


</div>













<?php 





 if(array_key_exists('next', $_POST)){
     
     $answer = $_POST['answer'];
     
     
     
     
     if(!empty($_POST['answer'])) {
         
         $query = "INSERT INTO angolteszt
                   (question,answer1,answer2,answer3,answer4,goodanswer,useranswer)
                   VALUES
                   (:question,:answer1,:answer2,:answer3,:answer4,:goodanswer,:useranswer)";
         $params = [
             
             
             ':question'            =>  $_SESSION['question'],
             ':answer1'    =>  $_SESSION['answer1'],
             ':answer2'      =>  $_SESSION['answer2'],
             ':answer3'      =>  $_SESSION['answer3'],
             ':answer4'      =>  $_SESSION['answer4'],
             ':goodanswer'   =>  $_SESSION['goodanswer'],
             ':useranswer'    =>  $_POST['answer']
             
                 
                 
              
      
         ];
        
          
         
         if(executeDML1($query, $params)){
             echo "Megoldás mentve!";
         }
        else 
        {
             echo "Hiba a kitöltésben!";
        } 
     }
 }
     
?>









<?php







function getConnection(){
    $connection = new PDO('mysql:host=localhost;dbname=zh_project;','root','');
    
    $connection->exec("SET NAMES 'utf8'");
    return $connection;
}
function getRecord($queryString, $queryParams = []){
    
    $connection = getConnection();  
   
    $statement = $connection->prepare($queryString);
    
    $success = $statement->execute($queryParams);
    
    $result = [];
    if($success){
        $result = $statement->fetch();
    }
   
    $statement->closeCursor();
    
    $connection = null;
    
    return $result;
}

function executeDML1($queryString, $queryParams = []){
     require_once '../../../protected/admin_config.php'; 
    
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