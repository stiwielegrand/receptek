<?php

include 'assets/connect.php';
$db ="receptek";
$connecttodb= new mysqli($servername, $username, $password, $db);
//get the ID

if (isset($_GET['id'])) {
  $id= $_GET['id'];
  //sql tartalomlekeres
  $request = "SELECT * FROM recepttar WHERE id='$id' ";
  $query = $connecttodb->query($request);
  
  if($query->num_rows > 0){
    
      $adat = mysqli_fetch_assoc($query);
      $receptnev = $adat['receptnev']; 
      $recepttipus = $adat['recepttipus']; 
      $leiras = $adat['leiras']; 
      $foto = $adat['foto']; 
      $comment = $adat['comment'];
      $elkeszites = $adat['elkeszites'];
      $alapanyag[0] = $adat['alapanyag1']; 
      $alapanyag[1] = $adat['alapanyag2']; 
      $alapanyag[2] = $adat['alapanyag3']; 
      $alapanyag[3] = $adat['alapanyag4']; 
      $alapanyag[4] = $adat['alapanyag5']; 
      $alapanyag[5] = $adat['alapanyag6']; 
      $alapanyag[6] = $adat['alapanyag7']; 
      $alapanyag[7] = $adat['alapanyag8']; 
      $alapanyag[8] = $adat['alapanyag9']; 
      $alapanyag[9] = $adat['alapanyag10']; 
      $alapanyag[10] = $adat['alapanyag11']; 
      $alapanyag[11] = $adat['alapanyag12']; 
      $alapanyag[12] = $adat['alapanyag13']; 
      $alapanyag[13] = $adat['alapanyag14']; 
      $alapanyag[14] = $adat['alapanyag15']; 
    }
    else
    {
      $redirectURL = "receptek.php";
      header("Location:".$redirectURL);
      exit();
    } 
  }
else
{
    $redirectURL = "receptek.php";
    header("Location:".$redirectURL);
    exit();
}

?>

<html>

<head>
  <title><?php echo $receptnev; ?></title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/main.css" />
  <link rel="stylesheet" href="assets/css/menu.css" />
</head>

<body>

  <?php
    
    include 'assets/menu.html' ;
    
    ?>
    <div id="wrapper" class="divided">
      <section class="banner style1 orient-left content-align-left image-position-right fullscreen onload-image-fade-in onload-content-fade-right">
        <div class="content">
          <h1><?php echo $receptnev; ?></h1>
        </div>
        <div class="image">
          <img src="<?php echo $foto; ?>" alt="" />
        </div>
      </section>

      <section class="spotlight style1 orient-right content-align-left image-position-center onscroll-image-fade-in" id="first">

        <div class="content">
          <h2>Elkészítés</h2>
          <p><?php echo $elkeszites; ?></p>
        </div>
        <div class="content">
            <ul style="alapanyagok">
          <?php 
            foreach ($alapanyag as $ertek) 
            {
                if($ertek != "nincs") {
                    echo "<li><p>".$ertek."</p></li>" ;
                }
            } 
            ?>
          </ul>
        </div>

      </section>
      



    </div>
</body>

</html>