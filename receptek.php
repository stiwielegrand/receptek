<?php

include 'assets/connect.php';

//connection
$db = "receptek";
$connecttodb = new mysqli ($servername, $username, $password, $db);
if(!$connecttodb) {die ("Csatlakozási Hiba!");}

$request = "SELECT id, receptnev, recepttipus, foto FROM recepttar";

$lekeres = mysqli_query($connecttodb, $request);
?>

<html>

<head>
  
  <title><?php  ?></title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/menu.css" />
  <link rel="stylesheet" href="assets/css/main.css" />

</head>

<body>

  <?php
    
    include 'assets/menu.html' ;
    
    ?>
    <div id="wrapper" class="divided">
        <section class="wrapper style1 align-center">
            <h1><br />Recepttár<br /><br /></h1>
        </section>

      

          <?php
          
            if (mysqli_num_rows($lekeres) > 0) 
            {
                $i =0;
                while ($tartalom = mysqli_fetch_assoc($lekeres)) 
                {
                    $id= $tartalom['id'];
                    $receptnev = $tartalom['receptnev'];
                    $recepttipus= $tartalom['recepttipus'];
                    $foto = $tartalom['foto'];
                    if($i%2 == 0)
                    {
                        echo "<section class='spotlight style1 orient-right content-align-left image-position-center onscroll-image-fade-in' id='first'>
                        <div class='content'>
                        <h2>".$receptnev."</h2>
                        <ul class='actions vertical'>
                        <li><a href='recept.php?id=".$id."' class='button'>Elkészítem</a></li>
                        </ul>
                        </div>
                        <div class='image'>
                        <img src='".$foto."' alt='' />
                        </div>
                        </section>";
                    }
                    else
                    {
                        echo "<section class='spotlight style1 orient-left content-align-left image-position-center onscroll-image-fade-in'>
                        <div class='content'>
                        <h2>".$receptnev."</h2>
                        <ul class='actions vertical'>
                        <li><a href='recept.php?id=".$id."' class='button'>Elkészítem</a></li>
                        </ul>
                        </div>
                        <div class='image'>
                        <img src='".$foto."' alt='' />
                        </div>
                        </section>";
                    }
                $i++;
                }
            }
            else
            {
                echo "Jelenleg nincs elérhtô recept. <a href='ujrecept.php'>Készíts egyet</a>";
            }

          ?>
    </div>
</body>

</html>