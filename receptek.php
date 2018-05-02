<html>

<head>
  <title>Lecsós csirkemell Sziámi módra</title>
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
          <h1>Lecsós csirkemell Sziámi módra</h1>
        </div>
        <div class="image">
          <img src="http://www.nosalty.hu/files/imagecache/recept/recept_kepek/dsc_0291_recept.jpg" alt="" />
        </div>
      </section>

      <section class="spotlight style1 orient-right content-align-left image-position-center onscroll-image-fade-in" id="first">

        <div class="content">
          <h2>Elkészítés</h2>
          <p>A készítést megelőző napon, a megtisztított és felkockázott csirkemellet egy zárható edényben mustárral keverjük, majd felöntjük annyi tejjel, hogy az ellepje. A főzés napján a zöldségeket megmossuk, ha kell pucoljuk. A hagymát kockázzuk, a
            paprikát és a paradicsomot nagyobb darabokba vágjuk. A kolbászt felkarikázzuk. Egy nagy serpenyőben, akár wok is lehet, kókuszzsírt hevítünk, erre dobjuk a hagymát, a kolbászt és a paprikát. Igen, minden mehet egyszerre. Hagyjuk, hogy levet
            engedjen és kissé elfője azt, ekkor jöhet a paradicsom, majd miután az levet engedett, hozzáadjuk a csirkemellet. Addig főzzük, míg a hús kellően puha nem lesz. Zabkorpa lepénnyel tálaljuk, melynek receptjét megtaláljátok az oldalunkon.</p>
        </div>
        <div class="content">
          <ul style="alapanyagok">
            <li>
              <p>50 dkg csirkemell filé</p>
            </li>
            <li>
              <p>20 dkg gyulai kolbász (Kb. egy fél szál )</p>
            </li>
            <li>
              <p>70 dkg lecsópaprika</p>
            </li>
            <li>
              <p>3 közepes db vöröshagyma</p>
            </li>
            <li>
              <p>20 dkg paradicsom</p>
            </li>
            <li>
              <p>só ízlés szerint</p>
            </li>
            <li>
              <p>bors ízlés szerint</p>
            </li>
            <li>
              <p>2 ek mustár</p>
            </li>
            <li>
              <p>2 dl tej</p>
            </li>
          </ul>
        </div>

      </section>
      
      <?php
      
      
      
      $alapanyag[]="";
      $id="";
      $receptnev ="";
      $recepttipus="";
      $foto ="";
      $leiras="";
      $elkeszites="";
      $comment="";
      
      $sql = "SELECT id";
      
      
      ?>


    </div>
</body>

</html>