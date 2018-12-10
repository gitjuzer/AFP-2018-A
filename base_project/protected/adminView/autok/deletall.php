<?php 

require_once '../protected/database.php';  

 
            $query = "DELETE FROM Autok ;";
            
            
            
            executeDML($query);
       
        header('Location: '.ADMIN_BASE_URL.'?M='.$_GET['M']);
        