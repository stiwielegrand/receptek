<!DOCTYPE html>
<html>
	<head>
		<title>Fôoldal</title>
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
    <section class="banner style1 orient-left content-align-left image-position-right fullscreen onload-image-fade-in onload-content-fade-right">
						<div class="content">
              <h1>A mi kis receptkönyvünk</h1>
							<p class="major">A kedvenc diétás recepteinkkel</p>
							<ul class="actions vertical">
								<li><a href="#first" class="button big wide smooth-scroll-middle">A receptekhez</a></li>
							</ul>
						</div>
						<div class="image">
							<img src="https://www.seriouseats.com/recipes/images/2015/08/20150823-grilled-chicken-cutlet-recipe-kenji-01-1500x1125.jpg" alt="" />
						</div>
					</section>

					<section class="spotlight style1 orient-right content-align-left image-position-center onscroll-image-fade-in" id="first">
						<div class="content">
							<h2>Magna etiam feugiat</h2>
              
              <div class="input_fields_wrap">
              
                <div class="field half first"><label for="name">Hozzávaló:</label></div><div class="field half"><input type="text" name="mytext[]"></div>
               <button class="add_field_button">Hozzáadás</button>
              </div>
              
					</section>
    
    </div> 
  </body>
</html>