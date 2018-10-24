<?php
    //borrar cookies del navegador
     setcookie('clogin',"",time() - 20);
     setcookie('cpass',"",time() - 20);
     //servidor
     unset($_COOKIE['clogin']);
     unset($_COOKIE['cpass']);
     session_destroy();
     
     header("Location: ..\index.php");
     
 ?>

