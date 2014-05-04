<?php
require_once 'db_config.php';
session_start();
if (!isset($_SESSION['admin']) || !$_SESSION['admin']) {
	header("Location: ./index.php");
}
if (isset($_POST['edit'])){
	$_SESSION['update'] = 1;
	$_SESSION['id'] = $_POST['id'];
	header("Location: ./edit_news.php");
}
if (isset($_POST['remove'])){
	$id = $_POST['id'];
	mysql_query("delete from news where id='$id'");
}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Пиццерия "АСЖАН"</title>
		<meta charset="utf-8">
		<link rel="shortcut icon" type="image/x-icon" href="css/images/logo.png">
		<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="all">
		<link rel="stylesheet" href="css/styleadmin.css" type="text/css" media="all">
	</head>
	<body>

		<div id="wrapper">

			<div class="header">

				<div class="shell">
					<h1 id="logo"><a href="index.php"></a></h1>
					<div class="testimonials">

					</div>

					<div class="header-right">
				      	<?php 
				      	if (isset($_SESSION['admin']) && $_SESSION['admin']){
				      		echo "<div><h2>Добро пожаловать админ!!<a href='logout.php'></h2><h4>Выйти</a></h4></div>";
				      	}
				      	?>
						<div class="cl">
							&nbsp;
						</div>
					</div>
					<div class="cl">
						&nbsp;
					</div>

					<nav id="navigation">
						<ul>
							<li><a href="edit_menu.php">Изменить Меню</a></li>
        					<li><a href="orders.php">Принять Заказы</a></li>
        					<li><a href="edit_news.php">Добавить Новости</a></li>
						</ul>
					</nav>

				</div>

			</div>

			<div class="main">
				<div class="content">
					<ul class="border_list">
						<form method="post" action="">
						<?php
							$result = mysql_query("select * from news");
							while ($row = mysql_fetch_array($result)) {
								echo "<li>";
								echo "<input type='hidden' name='id' value='".$row['id']."'>";
								echo "<label style='font-weight: bold;'>".$row['title']."</label>";
								echo "<button name='edit' class='bn'>Исправить</button><br>";
								echo "<label>".$row['description']."</label>";
								echo "<button name='remove' class='bn'>Удалить</button>";
								echo "</li>";
							}
						?>
						</form>
					</ul>
				</div>
			</div>

		</div>
		<div id="footer">
			<div class="shell">
				<div class="footer-nav">
					<ul>
						<li><a href="edit_menu.php">Изменить Меню</a></li>
        				<li><a href="orders.php">Принять Заказы</a></li>
        				<li><a href="edit_news.php">Добавить Новости</a></li>
					</ul>
				</div>
				<p class="copy">
					© Copyright 2014
				</p>
			</div>
		</div>
	</body>
</html>