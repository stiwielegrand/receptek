<html>

<head>
  <title>Új recept</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/main.css" />
  <link rel="stylesheet" href="assets/css/menu.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="assets/js/list.js"></script>
</head>

<body>

  <?php
    include 'assets/menu.html' ;
    ?>

    <div id="wrapper" class="divided">
      <form method="POST" action="ujrecept.php">
        <section class="banner style1 orient-left content-align-left image-position-right fullscreen onload-image-fade-in onload-content-fade-right">
          <div class="content">
            <h1>Új recept</h1><br />
            <input type="text" name="ujreceptnev" value="" />
          </div>
          <div class="image">
            <img src="https://img.etsystatic.com/il/e614eb/720407533/il_fullxfull.720407533_cfek.jpg" alt="" />
          </div>
        </section>

        <section class="spotlight style1 orient-right content-align-left image-position-center onscroll-image-fade-in" id="first">

          <div class="content">
            <h2>Elkészítés</h2>
            <textarea name="ujreceptelkeszites" class="elkeszites"></textarea>
          </div>
          <div class="content">
            <h2>Alapanyagok</h2>
            
              <div class="input_fields_wrap">
                <button class="add_field_button">+</button>
                <div><label for="name">Hozzávaló:</label><input type="text" name="mytext[]"></div>
              </div>
          </div>



        </section>
          
      
        
        <section class="wrapper style1 align-center">
          
          <ul class="actions">
									<li><input type="submit" name="submitujrecept"  value="Receptkönyvbe" /></li>
								</ul>
        </section>
      </form>
        
        <?php
      
      // include 'assets/connect.php
      
      
      
      $alapanyag[]="";
      $id="";
      $receptnev ="";
      $recepttipus="";
      $foto ="";
      $leiras="";
      $elkeszites="";
      $comment="";
      
      
      
      ?>

        </div>
</body>

</html>