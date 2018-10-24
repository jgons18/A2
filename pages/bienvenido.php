<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Bienvenido</h1>
        <form action="<?= $_SERVER['PHP_SELF'];?>" method="POST">
        <?php
        echo '<br>';
        //$visita = "Última visita a las ".date("h:i:s") . " del ". date("d/m/Y");
        $visita = "Última visita a las ". $_COOKIE["lastvisit1"] . " del ". $_COOKIE["lastvisit2"];
        echo $visita;
        //echo $_COOKIE['lastvisit1'];
        /*$localtime = localtime(time(),true);
        print_r ($localtime);*/
        echo "<br><br>";
        $url = "../index.php";
        if($_POST['url']){
            $_POST['url']=$url;
        }
        
        ?>
        <label>Indicar la url</label><br>
        <input type="text" name="url"/><br>
        <iframe src=<?php echo $url;?>></iframe><br><br>
        <a href="logout.php">Log out</a>
        </form>
        
    </body>
</html>




