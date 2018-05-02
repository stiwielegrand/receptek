<?php
//kulso doioksik behivasa
include 'assets/strip.php'; include 'assets/connect.php';
//alaphelyzetben minden 0
$nevhiba = $elkesziteshiba = $hozzavalohiba ="";
$receptnev = $elkeszites = $alapanyag = $foto ="";
    //Ha van POSTolva adat akkor:
    if ($_SERVER["REQUEST_METHOD"] == "POST" ) {
            //receptnev csekk
            if (empty($_POST['ujreceptnev']))
            {$nevhiba ="<div class='errorbox'>Nem adtad meg a recept elnevezését!</div>";}
            else 
            {$receptnev = strip10($_POST['ujreceptnev']);}
            //elkeszites csekk
            if (empty($_POST['ujreceptelkeszites']))
            {$elkesziteshiba ="<div class='errorbox'>Nincs megadva az elkészítés!</div>";}
            else
            {$elkeszites = strip10($_POST['ujreceptelkeszites']);}
            //hozzavlo csekk es array 15 elemrere kitoltese
            if (empty(array_filter($_POST['hozzavalo']))) 
            {$hozzavalohiba ="<div class='errorbox'>Nincsenek hozzávalók megadva!</div>";}
            else
            {
            //ezt még strippelni kell
            $alapanyag= $_POST['hozzavalo'];
            $anyag = array_pad($alapanyag, 15, "nincs");
            }
            //Fenykep url csekk
            if(!empty($_POST['link']))
            {$foto = $_POST['link'];}
            else {$foto="https://images.theconversation.com/files/166008/original/file-20170420-2392-im9b0r.png";}
            if ($receptnev !="" && $elkeszites !="") {
                $db = "receptek";
                $connecttodb = new mysqli($servername, $username, $password, $db);
                //utolag hozzadando informaciok
                $recepttipus="recept"; 
                $leiras="igy keszul";
                $comment="comment";
                $sql = "INSERT INTO recepttar (receptnev, recepttipus, leiras, foto, comment, elkeszites, alapanyag1, alapanyag2, alapanyag3, alapanyag4, alapanyag5, alapanyag6, alapanyag7, alapanyag8, alapanyag9, alapanyag10, alapanyag11, alapanyag12, alapanyag13, alapanyag14, alapanyag15) VALUES ('$receptnev', '$recepttipus', 'semmi', '$foto', 'semmi', '$elkeszites', '$anyag[0]', '$anyag[1]', '$anyag[2]', '$anyag[3]', '$anyag[4]', '$anyag[5]', '$anyag[6]', '$anyag[7]', '$anyag[8]', '$anyag[9]', '$anyag[10]', '$anyag[11]', '$anyag[12]', '$anyag[13]', '$anyag[14]' )";  
                if ($connecttodb->query($sql) === TRUE)
                {
                    echo "Hozzaadva!";
                }
                else
                {
                    echo "Hiba: ".$connect->error;
                }
            }
    }
?>

<!DOCTYPE html>
<html>

<head>
    <title>Új recept</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" href="assets/css/menu.css?v=1.3" />
    <link rel="stylesheet" href="assets/css/main.css" /> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="assets/js/list.js"></script>
    
</head>

<body>
            <?php   include 'assets/menu.html'; ?>

        <div id="wrapper" class="divided">
            <form method="POST" action="ujrecept.php">
                <section class="banner style1 orient-left content-align-left image-position-right fullscreen onload-image-fade-in onload-content-fade-right">
                    <div class="content">
                        <h1>Új recept</h1><br />
                        <?php echo $nevhiba; ?>
                        <input type="text" name="ujreceptnev" value="<?php echo $receptnev; ?>" />
                    </div>
                    <div class="image">
                        <img src="https://www.rachelrowley.me/wp-content/uploads/2017/08/nicolette-recipe-book-step-1.jpg" alt="" />
                    </div>
                </section>
                <section class="spotlight style1 orient-right content-align-left image-position-center onscroll-image-fade-in" id="first">
                    <div class="content">
                        <h2>Elkészítés</h2>
                        <?php echo $elkesziteshiba; ?>
                        <textarea name="ujreceptelkeszites" class="elkeszites"><?php echo $elkeszites; ?></textarea>
                        <br>
                        <h2>Illuisztráció</h2>
                        <input type="url" name="link" value="<?php echo $foto; ?>"/>
                    </div>
                    <div class="content">
                        <h2>Alapanyagok  <button class="add_field_button">+</button></h2>
                        <div class="input_fields_wrap">
                            <div class="hozzavalotarolo"><label for="name">Hozzávaló:</label><?php echo $hozzavalohiba; ?> <input type="text" name="hozzavalo[]" value="<?php if (isset($_POST['hozzavalo'])) { $hozzavalok = $_POST['hozzavalo']; $hozzavalo1 = $hozzavalok[0]; echo $hozzavalo1;}?>" ></div>
                        </div>
                        
                    </div>
                </section>
                <br>
                <section class="wrapper style1 align-center">
                    <ul class="actions">
                        <li><input type="submit" name="submitujrecept" value="Receptkönyvbe" /></li>
                    </ul>
                </section>
            </form>

            

        </div>
</body>

</html>