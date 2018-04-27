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

      <section class="spotlight style1 orient-right content-align-left image-position-center onscroll-image-fade-in" id="first">
        <div class="content">
          <h2>Új hozzávaló</h2>
          <div class="field half first">
            <input type="text" name="name" id="name" value="" />
          </div>


          <section>
            <span class="icon style2 major fa-save"></span>
            <ul class="actions vertical">
              <li><a href="#" class="button">Hozzáadás</a></li>
            </ul>
          </section>
        </div>
        <div class="image">
          <img src="https://i.pinimg.com/originals/fa/1d/71/fa1d71857cdfaf54d1198a63fb01542c.jpg" alt="" />
        </div>
      </section>




      <?php
      $ujalapanyag[]="";
      ?>


    </div>
</body>

</html>