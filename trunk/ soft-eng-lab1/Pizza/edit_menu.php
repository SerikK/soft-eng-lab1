<?php
require_once 'db_config.php';
session_start();
$_SESSION['update'] = 0;
if (!isset($_SESSION['admin']) || !$_SESSION['admin']) {
	header("Location: ./index.php");
	}
if (isset($_GET['cat_id'])){
		$_SESSION['cat_id'] = $_GET['cat_id'];
	}
if (isset($_POST['remove'])) {
	$id = $_POST['id'];
	$query = "delete from dishes where id='$id'";
	$result = mysql_query($query);
}
else if (isset($_POST['edit'])) {
	$id = $_POST['id'];
	$query = "select * from dishes where id=$id;";
	$result = mysql_query($query);
	$row = mysql_fetch_array($result);
	$_SESSION['update'] = 1;
	$_SESSION['id'] = $id;
	$_SESSION['name'] = $row['name'];
	$_SESSION['img'] = $row['urlphoto'];
	$_SESSION['description'] = $row['description'];
	$_SESSION['price'] = $row['price'];
	$_SESSION['type'] = $row['type'];
	header("location: add_item.php");
}
else {
	unset($_SESSION['update']);
}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Пиццерия "АСЖАН"</title>
		<meta charset="utf-8">
		<link rel="shortcut icon" type="image/x-icon" href="css/images/logo.png">
		<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="all">
		<link rel="stylesheet" href="css/stylemenu.css" type="text/css" media="all">
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
        					<li><a href="add_news.php">Добавить Новости</a></li>
						</ul>
					</nav>

				</div>

			</div>

			<div class="main">
				<div class="content">
					<h3>
					<center>
						<span>Меню пиццерий Асжана!</span>
					</center></h3>
					<div class="menu-list" style="width: 100px;">
						<ul>
							<?php
							$result = mysql_query("select * from types");
							while ($row = mysql_fetch_array($result)) {
								echo "<li>";
								if ($row['type_id'] == $_SESSION['cat_id']) {
									echo "<p> " . $row['type'] . " </p>";
								} else {
									echo "<a href='./edit_menu.php?cat_id=" . $row['type_id'] . "'>" . $row['type'] . "</a>";
								}
								echo "</li>";
							}
							?>
						</ul>

					</div>
					<div class="all_content">
						<ul>
							<li><a href="add_item.php" style="font-size: 22px; font-family: Arial; color: orange; margin: 20px;">Добавить блюдо</a></li>
							<?php
							$result_dish = mysql_query("select * from dishes where type_id=" . $_SESSION['cat_id'] . "");
							while ($row = mysql_fetch_array($result_dish)) {
								echo "<form method='post' action=''>";
								echo "<li style='min-height: 150px; max-height: 200px;'>";
								echo "<p><img src='images/" . $row['urlphoto'] . "' style='width: 150px;height: 120px;'></p>";
								echo "<div class='description' style='min-height:150px;min-width: 150px;'>";
								echo "<h1>" . $row['name'] . "</h1>";
								echo "<div class='consist'><p> " . $row['description'] . "</div><br>";
								echo "<p>" . $row['price'] . "тг";
								echo "</div>";
								echo "<div class='order' style='min-height: 130px; min-width: 100px;'>";
								echo "<input name='id' type='hidden' value='" . $row['id'] . "'>";
								echo "<button name='edit'>Исправить</button>";
								echo "<button name='remove'>Удалить</button>";
								echo "</div>";
								echo "</li>";
								echo "</form>";
							}
							?>
						</ul>

					</div>
				</div>
			</div>

		</div>
		<div id="footer">
			<div class="shell">
				<div class="footer-nav">
					<ul>
						<li><a href="edit_menu.php">Изменить Меню</a></li>
        				<li><a href="orders.php">Принять Заказы</a></li>
        				<li><a href="add_news.php">Добавить Новости</a></li>
					</ul>
				</div>
				<p class="copy">
					© Copyright 2014
				</p>
			</div>
		</div>
	</body>
</html>