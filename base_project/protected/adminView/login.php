<?php
      // a felhasználó rákattintott a Bejelentkezés gombra 
    if(array_key_exists('login', $_POST)){
        // beküldött adatok kiolvasása
        $username = $_POST['username'];
        $password = $_POST['password'];
        // beküldött adatok ellenőrzése (formai)
        if(empty($username) || empty($password)){
            echo "Hiányozó bejelentkezési adat(ok)!";
        }
        else{
            if(UserLogin($username, $password)){
                
            }
            else{
                 echo "Helytelen bejelentkezési adatok";
            }  
        }
    }
   

?>

<form method="POST">
    <label>Felhasználónév</label><br/>
    <input type="text" name="username"/><br/>
    <label>Jelszó</label><br/>
    <input type="password" name="password"/><br/>
    <button type="submit" name="login">Bejelentkezés</button><br/>
    <a href="http://localhost/base_project/protected/adminView/register.php">Amennyiben még nincs felhasználói fiókja kattintson ide!</a>
</form>