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



<style>
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
</style>