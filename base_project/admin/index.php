<?php 
    session_start();
    require_once '../protected/admin_config.php'; 
    require_once '../protected/userManager.php';  
?>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <div id="header"><?php require_once  '../protected/admin_header.php';?></div>
        <div id="menu"><?php require_once '../protected/admin_menu.php';?></div>
        <div id="content"><?php require_once '../protected/admin_content.php';?></div>
        <div id="footer"><?php require_once '../protected/admin_footer.php';?></div>
    </body>
</html>