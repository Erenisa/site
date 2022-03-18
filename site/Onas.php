<?php
	require 'libs/db.php';
?>
<html>
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
	
	<div class="content" >
		<a class="content_a" ><img class="content_Gypsophiles1" src="images/Пион1.jpg"><p align="center" class="content_text_flowers">Пионы <br>Цена: 10 000 ₽</p></a>

		<a  class="content_a"><img class="content_Gypsophiles1" src="images/Пион2.jpg"><p align="center" class="content_text_flowers">Пионы <br>Цена: 9 800 ₽</p></a>

		<a  class="content_a"h><img class="content_Gypsophiles1" src="images/Пион3.jpg"><p align="center" class="content_text_flowers">Пионы <br>Цена: 5 500 ₽</p></a>

		<a class="content_a" ><img class="content_Gypsophiles1" src="images/Пион4.jpg"><p align="center" class="content_text_flowers">Пионы и Розы <br>Цена: 6 000 ₽</p></a>

		<a class="content_a" ><img class="content_Gypsophiles1" src="images/Пион5.webp"><p align="center" class="content_text_flowers">Пионы<br>Цена: 5 300 ₽</p></a>

		<a class="content_a"><img class="content_Gypsophiles1" src="images/Пион6.webp"><p align="center" class="content_text_flowers">Пионы <br>Цена: 2 500 ₽</p></a>

		<a class="content_a" ><img class="content_Gypsophiles1" src="images/Гипсофилы и Пионы5.webp"><p align="center" class="content_text_flowers"> Пионы, Гортензии и Гипсофилы<br>Цена: 4 700 ₽</p></a>

		<a class="content_a" ><img class="content_Gypsophiles1" src="images/Розы и Пионы12.jpg"><p align="center" class="content_text_flowers">Пионы и Розы<br>Цена: 6 600 ₽</p></a>

		<a class="content_a" ><img class="content_Gypsophiles1" src="images/Пионы7.jpg"><p align="center" class="content_text_flowers">Пионы <br> 4 900 ₽</p></a>

		<a class="content_a" ><img class="content_Gypsophiles1" src="images/Пионы8.webp"><p align="center" class="content_text_flowers"> Пионы, Гортензии и Розы<br>Цена: 4 800 ₽</p></a>

		<a class="content_a" ><img class="content_Gypsophiles1" src="images/Пионы9.webp"><p align="center" class="content_text_flowers">Пионы, Гортензии и Розы<br>Цена: 6 300 ₽</p></a>

		<a class="content_a" ><img class="content_Gypsophiles1" src="images/пионы10.jpg"><p align="center" class="content_text_flowers"> Пионы и Розы<br>Цена 7 800 ₽</p></a>

	</div>
</content>
	<footer>
		<div class="wrapper">
			<div class="footer">
				<a style= "text decoration: none; color: #ffffff"; ><u>Мы в социальных сетях</u>

			</div>
			<div class="content">

				<img class="content_img2" src="images/instagram.png">
				<img class="content_img3" src="images/Vkontakte.png">
				<img class="content_img4" src="images/facebook.png">
				<img class="content_img5" src="images/pinterest.png">
					<a class="content_b" style= "text decoration: none; color: #ffffff"> <u>Магазин расположен по адресу:<br> г. Пенза, ул. Московская, 147</a>
					<a class="content_b" style= "text decoration: none; color: #ffffff"> <u>Сделать предворительбный <br>заказ по немеру:</u> +7 (937) 418 19 46</a>
			</div>
		</div>
	</footer>
</body>
</html>