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

 <div class="body">

<?php 
 if(array_key_exists('next', $_POST)){
     
     if(!empty($_POST['question']) && !empty($_POST['answer1']) && !empty($_POST['answer2']) && !empty($_POST['answer3']) && !empty($_POST['answer4'])){
         $query = "INSERT INTO matekfeladatok 
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
    
     <h1>Matek feladatok</h1>
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
</div>

