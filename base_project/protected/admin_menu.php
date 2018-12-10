<?php if(IsUserLoggedIn()):?>
<!-- bej. felhasználó számára elérhető menü -->
<ul>
    <li>
        <h1>Autók</h1>
        <ul>
            
            <li><a href="<?=ADMIN_BASE_URL?>/?M=autok&A=add">Hozzáadás</a></li>
             <li><a href="<?=ADMIN_BASE_URL?>/?M=autok&A=list">listázás</a></li>
               <li><a href="<?=ADMIN_BASE_URL?>/?M=autok&A=deletall">Összes törlése</a></li>
        </ul>
    </li>
</ul>
<?php endif; ?>
