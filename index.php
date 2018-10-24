<?php
//inici de sessió
session_start();

//creació de les cookies





$dades=(array) json_decode(file_get_contents('app/dades.json'));
//$dades['login'];
//print_r($dades);
//echo $dades['login'];
$login=$_POST['login'];
$pass=$_POST['pass'];

if(!empty($_POST['login']) && !empty($_POST['pass'])){
    if($login == $dades['login'] && $pass ==$dades['pass']){
        //echo 'Bienvenido';
        /*setcookie("Cookie name",$login);
        setcookie("Cookie pass",$pass);*/
        if($_POST['recordam'] == true){
            setcookie("clogin",$login);
            setcookie("cpass",$pass);
            
            $recordar1=$_COOKIE["clogin"];
            $recordar2=$_COOKIE["cpass"];
            
            //$lastvisit= "Última visita a las ". date("h:i:s") . " del ". date("d/m/Y");
            $hora = date("h:i:s");
            $dia = date("d/m/Y");
            
            
            
            setcookie("lastvisit1",$hora);
            setcookie("lastvisit2",$dia);
            
            $recordar3= $_COOKIE['lastvisit1'];
            $recordar4= $_COOKIE['lastvisit2'];

            if(!isset($_SESSION['count'])){
                $_SESSION['count']=1;
            }else{
                $_SESSION['count']++;
            }
            
            header("Location: /pages/bienvenido.php");
   
        }
        
        //if(isset($_COOKIE['clogin']))
        //print_r($cookie);
        
        
    }else{
        echo 'credenciales incorrectas';
    }
}


?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Incie sesión</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
            <!--<h1><?= $dades['login'] ?></h1>-->
            <label>Indica tú nombre de usuario</label><br>
            <input type="text" name="login"/><br><br>
            <label>Indica la contraseña</label><br>
            <input type="password" name="pass"/><br><br>
            <label>Recorda'm</label><br>
            <input type="checkbox" name="recordam"/><br><br>
            <input type="submit" name='enviar' value="Acceder"/>
        </form>
        
    </body>
</html>