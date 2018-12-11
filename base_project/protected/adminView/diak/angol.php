
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











<form method="POST">
    
    
    <table  align="center" style="width:100%">
  <tr>
    <th></th>
    <th  colspan="2"  ><?php echo $_SESSION['question']?></th> 
   
     <th><a href="http://localhost/base_project/admin/index.php">Angol kérdés sor befejezése</a></th>
  </tr>
  <tr>
    <td></td>
    <td><input type="radio" name="answer" value=1><?php echo $_SESSION['answer1']?></td>
    <td><input type="radio" name="answer" value=2><?php echo $_SESSION['answer2']?></td>
    <td></td>
  </tr>
  
  <tr>
    <td></td>
    
    <td><input type="radio" name="answer" value=3><?php echo $_SESSION['answer3']?></td>
    <td><input type="radio" name="answer" value=4><?php echo $_SESSION['answer4']?></td>
   
    <td></td>
    <td></td>
    <td></td>
    <td><button type="submit" name="next">Következő</button></td>
    
  </tr>
 
</table>
    
  

</body>
</html>
    
    
</form>
















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