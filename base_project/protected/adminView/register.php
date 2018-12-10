<?php 

  if(array_key_exists('register', $_POST)){
      
      
      if($_POST['password'] == $_POST['passwordagain'] && $_POST['email'] == $_POST['emailagain']){
          
          
          
     
 
     
     if(!empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['email'])&& !empty($_POST['passwordagain'])&& !empty($_POST['emailagain'])){
         
         if($_POST['teacher']== 1){
             
$query = "INSERT INTO users
                   (username,password,email,teacher,teacherid)
                   VALUES
                   (:username,:password,:email,:teacher,:teacherid)";
         $params = [
             ':username'            =>  $_POST['username'],
             ':password'    =>  $_POST['password'],
             ':email'      =>  $_POST['email'],
             ':teacher'      =>  $_POST['teacher'],
             ':teacherid'      =>  $_POST['teacherid']
             
         ];
        
          require_once '../../protected/database.php'; 
         
         if(executeDML($query, $params)){
             echo "Tanár hozzáadása sikeres";
         }
        else 
        {
             echo "Nincs siker!";
        } 
        
      }
      else
      {
          
       $query = "INSERT INTO users
                   (username,password,email,teacher,teacherid)
                   VALUES
                   (:username,:password,:email,:teacher,:teacherid)";
         $params = [
             ':username'            =>  $_POST['username'],
             ':password'    =>  $_POST['password'],
             ':email'      =>  $_POST['email'],
             ':teacher'      =>  $_POST['teacher'],
             ':teacherid'      =>  $_POST['teacherid']
             
         ];
        
          require_once '../../protected/database.php'; 
         
         if(executeDML($query, $params)){
             header('Location:'.ADMIN_BASE_URL);
             echo "Diák hozzáadása sikeres";
         }
        else 
        {
             echo "Nincs siker!";
        } 
  
          
      }
      
     }
     else{
         echo "hiányzó adatok!";
     }
     
      }
      else
      {
          echo "az email címek vagy a jelszavak között eltérés található!";
          
      }
  }
     
?>
<form method="POST">
    
    <input type="radio" name="teacher" value=1>Tanár       
    <input type="radio" name="teacher" value=0  checked="">            Diák<br>


    <input placeholder="Felhasználónév" name="username"/>
    <input placeholder="Tanári azonosító" name="teacherid"/><br/>
    <input placeholder="jelszó" name="password"/>
    <input placeholder="e-mail" name="email"/><br/>
    <input placeholder="jelszó megerősitése" name="passwordagain"/>
    <input placeholder="e-mail megerősítése" name="emailagain"/><br/>
    <button type="submit" name="register">Regisztráció</button><br/>
   <label> Elfogadom, az</label>  
    <a href="http://localhost/base_project/public/adatvedelem.pdf"> adatvédelmi nyilatkozatot</a>
</form>