<?php 
 if(array_key_exists('login', $_POST)){
     
     if(!empty($_POST['rendszam']) && !empty($_POST['szin']) && !empty($_POST['tipus'])){
         $query = "INSERT INTO Autok 
                   (rendszam,szin,tipus)
                   VALUES
                   (:rendszam, :szin, :tipus)";
         $params = [
             ':rendszam'            =>  $_POST['rendszam'],
             ':szin'    =>  $_POST['szin'],
             ':tipus'      =>  $_POST['tipus']
         ];
        
         require_once '../protected/database.php';  
         
         if(executeDML($query, $params)){
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
    <input placeholder="rendszám" name="rendszam"/><br/>
    <input placeholder="szin" name="szin"/><br/>
    <input placeholder="tipus" name="tipus"/><br/>
    <button type="submit" name="login">hozzáad</button>
</form>