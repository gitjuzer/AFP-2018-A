<?php 
 if(array_key_exists('next', $_POST)){
     
     if(!empty($_POST['question']) && !empty($_POST['answer1']) && !empty($_POST['answer2']) && !empty($_POST['answer3']) && !empty($_POST['answer4'])){
         $query = "INSERT INTO alapprogramozasfeladatok
                   (question,answer1,answer2,answer3,answer4,goodanswer)
                   VALUES
                   (:question,:answer1,:answer2,:answer3,:answer4,:goodanswer)";
         $params = [
             ':question'            =>  $_POST['question'],
             ':answer1'    =>  $_POST['answer1'],
             ':answer2'      =>  $_POST['answer2'],
             ':answer3'      =>  $_POST['answer3'],
             ':answer4'      =>  $_POST['answer4'],
             ':goodanswer'      =>  $_POST['goodanswer']
         ];
        
         require_once '../../../protected/database.php';  
         
         if(executeDML1($query, $params)){
             echo "Siker";
         }
        else 
        {
             echo "Nincs siker!";
        } 
     }
 }
     
?>


<form method="POST">
    
    <h1>Alap Programozási feladatok</h1>
    <table  align="center" style="width:100%">
  <tr>
    <th>Kérdés Megadása</th>
    <th  colspan="2"  ><input placeholder="Ide irja a kérdést" name="question" style="width:100%"/></th> 
   
     <th><a href="http://localhost/base_project/admin/index.php">Kérdés sor befejezése</a></th>
  </tr>
  <tr>
    <td></td>
    <td><input placeholder="válasz1" name="answer1" style="width:100%"/></td>
    <td><input placeholder="válasz2" name="answer2" style="width:100%"/></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td><input type="radio" name="goodanswer" checked="" value=1>Helyes válasz </td>
    <td><input type="radio" name="goodanswer" value=2>Helyes válasz </td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td><input placeholder="válasz3" name="answer3" style="width:100%"/></td>
    <td><input placeholder="válasz4" name="answer4" style="width:100%"/></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td><input type="radio" name="goodanswer" value=3>Helyes válasz </td>
    <td><input type="radio" name="goodanswer" value=4>Helyes válasz </td>
    <td><button type="submit" name="next">Következő</button></td>
  </tr>
</table>
    
  

</body>
</html>
    
    
</form>
