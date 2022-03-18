<?php
	require 'libs/db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Цветик</title>
	<meta charset="UTF-8">
  <link rel="stylesheet" href="style.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

  <script type="text/javascript">
	jQuery(document).ready(function($){  
$('#slow_nav  ul li').hover(
            function () {
                $('ul', this).stop().slideDown(400);
            }, 
            function () {
                $('ul', this).stop().slideUp(400);            
            }
        );
});
</script>

  </head>
<body>
	<header>

				<div class="textcontainer">
					<span class="particletext confetti"><b>Цветик</b></span>
					<script src='animation.js'></script>
				</div>

				<div>
	<nav id="slow_nav">
    		<ul>
		        <li>
		        <a href="index.php">Главная</a>
		            <ul>
		                <li><a href="Vxod.php">Вход</a></li>
		                <li><a href="Tovar.php">Регистрация</a></li>
		                <li><a href="map.php">Карта сайта</a></li>
		            </ul>
		        </li>
	        <li>
	        <a href="#">Виды цветов</a>
	            <ul>
	                <li><a href="Roses.php">Розы</a></li>
		                <li><a href="Gypsophiles.php">Гипсофилы</a></li>
		                <li><a href="Peonies.php">Пионы</a></li>
	            </ul>
	        </li>
	 
	    	</ul>
				</nav>
	</div>
					
					<form>
  						<input type="text"  value="<?php echo $_SESSION['user']->name ?>" placeholder="Искать здесь...">
  						
					</form>

	</header>
<content>

	<div>
		<nav id="map">
	<a href="map.php" id="map1"><b><u>КАРТА САЙТА</u></b></a><br>
	<a href="index.php">Главная</a><br>
	<a href="Vxod.php">Вход</a><br>
	<a href="Tovar.php">Регистрация</a><br>
	<a href="#">Виды цветов:</a><br>
	<ul>
		<li><a href="Roses.php">Розы</a></li>
		<li><a href="Peonies.php">Пионы</a></li>
		<li><a href="Gypsophiles.php">Гипсофилы</a></li>
	</ul>
</div>
</nav>
</content>
	<footer>
		<div class="wrapper">
			<div class="footer">
				<a style= "text decoration: none; color: #ffffff"; ><u>Мы в социальных сетях</u>
					
			</div>
			<div class="content1">

				<img class="content_img2" src="images/instagram.png">
				
				<img class="content_img3" src="images/Vkontakte.png">
				
				<img class="content_img4" src="images/facebook.png">
				
				<img class="content_img5" src="images/pinterest.png">
			
					
			</div>
		</div>
	</footer>
</body>
</html