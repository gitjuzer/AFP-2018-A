<?php if(IsUserLoggedIn()):?>

<?php if($_SESSION['teacher'] == 1):?>
<ul>
    <li>
        <h1>Válassza ki melyik tanegységből szeretne kérdés sort létrehozni</h1>
        <ul>
            
            <li><a href="<?=ADMIN_BASE_URL?>/?M=tanar&A=matek">Matek</a></li>
             <li><a href="<?=ADMIN_BASE_URL?>/?M=tanar&A=angol">Angol</a></li>
               <li><a href="<?=ADMIN_BASE_URL?>/?M=tanar&A=alapprogramozas">Alap Programozás</a></li>
                <li><a href="<?=ADMIN_BASE_URL?>/?M=tanar&A=list">Feladatok listázása</a></li>
        </ul>
    </li>
</ul>



      <?php endif; ?>



<?php if($_SESSION['teacher'] == 0):?>
<ul>
    <li>
        <h1>Válassza ki melyik tanegységből szeretne feladatot megoldani</h1>
        <ul>
            
            <li><a href="<?=ADMIN_BASE_URL?>/?M=diak&A=matek">Matek</a></li>
             <li><a href="<?=ADMIN_BASE_URL?>/?M=diak&A=angol">Angol</a></li>
               <li><a href="<?=ADMIN_BASE_URL?>/?M=diak&A=alapprogramozas">Alap Programozás</a></li>
              
               
        </ul>
    </li>
</ul>




      <?php endif; ?>

<?php endif; ?>



