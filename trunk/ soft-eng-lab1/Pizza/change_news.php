<?php 
session_start();
if (!isset($_SESSION['admin']) || !$_SESSION['admin']) {
	header("Location: ./index.html");
}
?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Пиццерия "АСЖАН"</title>
		<meta charset="utf-8">
		<link rel="shortcut icon" type="image/x-icon" href="css/images/logo.png">
		<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
		<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="all">
	</head>
	<body>
		<div id="wrapper">
			<div class="header">
				<div class="shell">
					<h1 id="logo"><a href="index.html"></a></h1>

					<div class="header-right">
						<div>
							<?php 
      	if (isset($_SESSION['admin']) && $_SESSION['admin']){
      		echo "<h2>Добро пожаловать админ</h2><a href='logout.php'>Выйти</a>";
      	}
      	?>
						</div>
						<div class="cl">
							&nbsp;
						</div>
					</div>
					<div class="cl">
						&nbsp;
					</div>
					<nav id="navigation">
						<ul>
							<li>
								<a href="change_menu.php">Меню</a>
							</li>
							<li>
								<a href="Orders.php">Заказы</a>
							</li>
							<li>
								<a href="change_news.php">Новости</a>
							</li>
						</ul>
					</nav>
					<div class="table-div">
					<ul>
						<ol><a href="addItem.php">Добавить новость</a></ol>
						<ol><a href="#">Изменить новость</a></ol>
					</ul>
				</div>
				</div>
			</div>

		</div>

		
		<div id="footer">
			<div class="shell">
				<div class="footer-nav">
					<ul>
						<li>
							<a href="#">Меню</a>
						</li>
						<li>
							<a href="#">Заказы</a>
						</li>
						<li>
							<a href="#">Новости</a>
						</li>
					</ul>
				</div>
				<p class="copy">
					© Copyright 2014
			</div>
		</div>
	</body>
</html>