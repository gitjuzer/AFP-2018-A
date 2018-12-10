<?php
require_once '../protected/database.php'; 

    $query = "SELECT * FROM Autok";
    $records = getList($query);
?>
<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Rendszám</th>
            <th>Szín</th>
            <th>Típus</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($records as $record): ?>
        <tr>
            <td><?=$record['id']?></td>
            <td><?=$record['rendszam']?></td>
            <td><?=$record['szin']?></td>
            <td><?=$record['tipus']?></td>
            <td> 
                
                <a href="<?=ADMIN_BASE_URL?>?M=<?=$_GET['M']?>&A=delete&ID=<?=$record['id']?>">
                    Töröl
                </a>
            </td>
        </tr>
        <?php endforeach;?>
    </tbody>
    
    
    
</table>