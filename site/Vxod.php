<?php
	require 'libs/db.php';
session_start();
	if(isset($_POST['vxod'])) {
		$login = R::findOne('users', 'login = ?', [$_POST['login']]);
		if($login) {
			if ($login->login == 'admin' && $login->pas == 1){
				  $_SESSION['admin'] = true;
				  header('Location: adminpanel.php');
				}
				elseif($login->pas == $_POST['psw']) {
				$_SESSION['user'] = $login;
				header('Location: index.php');
			}
		}
	}
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
	
	<form action="" method="post">
  <div class="container">
    <h1>Вход</h1>
    


    <label for="email"><b>Логин</b></label>
    <input type="text" placeholder="Введите логин" name="login" required>

    <label for="psw"><b>Пароль</b></label>
    <input type="password" placeholder="Введите пароль" name="psw" required>
    <hr>

    <p>Создавая учетную запись, вы соглашаетесь с нашими  <a href="#"></a>Условиями и политикой конфиденциальности.</p>
    <button type="submit" name="vxod" class="registerbtn">Войти</button>
  </div>

  <div class="container signin">
    <p>У вас нет учетной записи?<a href="Tovar.php">Регистрация</a>.</p>
  </div>
</form>
	
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