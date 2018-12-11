



<?php
require_once '../protected/database.php';  
    $query = "SELECT count(*) as total from matekfeladatok;";
    $queryParams = [
        
    ];
    $userRecord = getRecord($query, $queryParams);
    $_SESSION['total'] = $userRecord['total'];
    
    $max = $_SESSION['total'];
    
   $random = rand(1, $max);
    
    $query = "select * from matekfeladatok
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
        $_SESSION['goodanswer'] = $userRecord['goodanswer'];
         
    
    
    
    ?>

<h1> <?php echo $_SESSION['total']?> </h1> </b>
<h1> <?php echo $_SESSION['id']?> </h1> </b>
<h1> <?php echo $_SESSION['question']?> </h1> </b>
<h1> <?php echo $_SESSION['answer1']?> </h1> </b>
<h1> <?php echo $_SESSION['answer2']?> </h1> </b>
<h1> <?php echo $_SESSION['answer3']?> </h1> </b>
<h1> <?php echo $_SESSION['answer4']?> </h1> </b>
<h1> <?php echo $_SESSION['goodanswer']?> </h1> </b>
