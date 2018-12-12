
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
#header {
    background-color: rgb(69, 134, 205);
    height: 20%;
    background-size: cover;
    border: 10px #3b464c;
}

#header p {
    font-size: 25pt;
    color: black;
    padding-top: 5px;
    margin: 0;
    font-weight: bold;
    text-align: center;
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



























    <div class="body">



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
             header('Location:'.ADMIN_BASE_URL);
             echo "Tanár hozzáadása sikeres";
         }
        else 
        {
             echo "Nincs siker! Lehet létezik már ilyen felhasznáónév!";
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
             echo "Nincs siker! Lehet létezik már ilyen felhasznáónév!";
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
    
    <div class="section">
    
    

</div>
    <table >
        <thead>
            <tr>
                <th colspan="2" ><h1>Regisztráció<h1></th>
               
            </tr>
        </thead>
        <tbody>
            <tr>
                
                <td ><h2><input type="radio" name="teacher"  value=1> Tanár  </h2> </td>
                <td ><h2><input type="radio" name="teacher" value=0  checked="">Diák</h2></td>
            </tr>
            
            
            <tr>
                <td><input placeholder="Felhasználónév" name="username"/></td>
                <td>    <input placeholder="Tanári azonosító" name="teacherid"/></td>
            </tr>
            <tr>
                <td><input placeholder="jelszó" name="password"/></td>
                <td><input placeholder="e-mail" name="email"/></td>
            </tr>
             <tr>
                <td><input placeholder="jelszó megerősitése" name="passwordagain"/></td>
                <td><input placeholder="e-mail megerősítése" name="emailagain"/></td>
            </tr>
            <tr >
                <td colspan="2"><label> Elfogadom, az</label>  
    <a href="http://localhost/base_project/public/adatvedelem.pdf"> adatvédelmi nyilatkozatot</a></td>
                
            </tr>
            <tr >
                <td colspan="2"><h3><button type="submit" name="register"><h3>Regisztráció<h3</button><br/></td>
                
            </tr>
        </tbody>
    </table>

   
    
   
    
   
</form>
        
        </div>