




<h1>Tanuljunk Játékosan</h1>

    
    
    
    <?php if(IsUserLoggedIn()): ?>
        <a href="<?=ADMIN_BASE_URL?>?A=logout">
            Kijelentkezés, <?=$_SESSION['username']?>
        </a>
<?php endif; ?>
