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
  						<input type="text" a href="exit.php" placeholder="Искать здесь...">


  						<a href="exit.php"><?php echo $_SESSION['user']->name; ?></a>
					</form>
					

	</header>
<content>
	<div class="content" >

		<?php 
		$db_host='localhost'; // ваш хост
		$db_name='product'; // ваша бд
		$db_user='root'; // пользователь бд
		$db_pass='root'; // пароль к бд
		mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);// включаем сообщения об ошибках
		$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name); // коннект с сервером бд
		$mysqli->set_charset("utf8mb4"); // задаем кодировку

		$result = $mysqli->query('SELECT * FROM `products`'); // запрос на выборку
		while($row = $result->fetch_assoc())// получаем все строки в цикле по одной
		{
			echo "<a class='content_a' ><img class='content_Gypsophiles1'src='" . $row['photo'] . "' alt='' />";
		    echo '<p align="center" class="content_text_flowers">' .$row['name']. '<br> Цена: ' .$row['price'].'</p></a>';// выводим данные

		}

 ?>

		

	</div>
</content>
	<footer>
		<div class="wrapper">
			<div class="footer">
				<a style= "text decoration: none; color: #ffffff"; ><u>Мы в социальных сетях</u>
					
			</div>
			<div class="content">

				<img class="content_img2" src="images/instagram.png">
				<script type="text/javascript">
					$('.content_img2').width(90).hover(function(){
						$(this).stop().animate({width: 150});
					},
					function(){
						$(this).stop().animate({width: 90});
					});

				</script>
				<img class="content_img3" src="images/Vkontakte.png">
				<script type="text/javascript">
					$('.content_img3').width(90).hover(function(){
						$(this).stop().animate({width: 150});
					},
					function(){
						$(this).stop().animate({width: 90});
					});

				</script>
				<img class="content_img4" src="images/facebook.png">
				<script type="text/javascript">
					$('.content_img4').width(90).hover(function(){
						$(this).stop().animate({width: 150});
					},
					function(){
						$(this).stop().animate({width: 90});
					});

				</script>
				<img class="content_img5" src="images/pinterest.png">
				<script type="text/javascript">
					$('.content_img5').width(90).hover(function(){
						$(this).stop().animate({width: 150});
					},
					function(){
						$(this).stop().animate({width: 90});
					});

				</script>
					<a class="content_b" style= "text decoration: none; color: #ffffff"> <u>Магазин расположен по адресу:<br> г. Пенза, ул. Московская, 147</a>
					<a class="content_b" style= "text decoration: none; color: #ffffff"> <u>Сделать предворительбный <br>заказ по немеру:</u> +7 (937) 418 19 46</a>
			</div>
		</div>
	</footer>
</body>
</html>