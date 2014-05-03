<?php
    session_start();
	require_once 'db_config.php';
	if (!isset($_SESSION['admin']) || !$_SESSION['admin']) {
	header("Location: ./index.php");
	}
	if (!(isset($_SESSION['update'])) && isset($_FILES['image']) && isset($_POST['name']) && isset($_POST['description']) && isset($_POST['price']) && isset($_POST['type'])) {
		$img_name = $_FILES['image']['name'];
		if (file_exists("./images/" . $img_name)) {} 
		else {
		$dest = __DIR__ . DIRECTORY_SEPARATOR . "images" . DIRECTORY_SEPARATOR . $img_name;
		$res = move_uploaded_file($_FILES["image"]["tmp_name"], $dest);
	 	}
	$name = $_POST['name'];
	$img = $img_name;
	$description = $_POST['description'];
	$price = $_POST['price'];
	$type = $_POST['type'];
	$query = "insert into dishes(name, urlphoto, description, price, type_id) values('$name','$img','$description',$price, '$type')";
	$result = mysql_query($query);
	if ($result == false) {
		$_SESSION['error'] = "Проверьте данные еще раз";
	} else {
		header("Location: ./edit_menu.php");
	}
	
	}
	elseif (isset($_SESSION['update']) && isset($_SESSION['id']) && isset($_POST['submit'])) {
	$id = $_SESSION['id'];
	if (isset($_FILES['image']) && $_FILES['image']['name'] != "") {
		$img_name = $_FILES['image']['name'];
		if (file_exists("./images/" . $img_name)) {
		} else {
			$dest = __DIR__ . DIRECTORY_SEPARATOR . "images" . DIRECTORY_SEPARATOR . $img_name;
			$res = move_uploaded_file($_FILES["image"]["tmp_name"], $dest);
		}
		$query = "update dishes set img='$img_name' where id=$id";
		$result = mysql_query($query);
	}
	if (isset($_POST['name'])) {
		$name = $_POST['name'];
		$query = "update dishes set name='$name' where id=$id";
		$result = mysql_query($query);
	}
	if (isset($_POST['description'])) {
		$description = $_POST['description'];
		$query = "update dishes set description='$description' where id=$id";
		$result = mysql_query($query);
	}
	if (isset($_POST['price'])) {
		$price = $_POST['price'];
		$query = "update dishes set price=$price where id=$id";
		$result = mysql_query($query);
	}
	if (isset($_POST['type'])) {
		$type = $_POST['type'];
		$query = "update dishes set type=$type where id=$id";
		$result = mysql_query($query);
	}
	if (isset($_SESSION['id']))
		unset($_SESSION['id']);
	if (isset($_SESSION['name']))
		unset($_SESSION['name']);
	if (isset($_SESSION['description']))
		unset($_SESSION['description']);
	if (isset($_SESSION['price']))
		unset($_SESSION['price']);
	if (isset($_SESSION['type']))
		unset($_SESSION['type']);
	if (isset($_SESSION['update']))
		unset($_SESSION['update']);
	header("Location: ./edit_menu.php");
}
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Пиццерия "АСЖАН"</title>
<meta charset="utf-8">
<link rel="shortcut icon" type="image/x-icon" href="css/images/logo.png">
<link rel="stylesheet" href="css/styleadmin.css" type="text/css" media="all">
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="all">
</head>
<body>
<div id="wrapper">
  <div class="header">
    <div class="shell">
      <h1 id="logo"><a href="admin_aszhan.php"></a></h1>
      <div class="header-right">
      	<?php 
      	if (isset($_SESSION['admin']) && $_SESSION['admin']){
      		echo "<div><h2>Добро пожаловать админ!!<a href='logout.php'></h2><h4>Выйти</a></h4></div>";
      	}
      	?>
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
    <div  class="main">
      <div class="content">
      	<div class="adding">
		<form action="" method="post" enctype="multipart/form-data">
				
					<label>Название</label>
					<input name="name" type="text"/ value="<?php if (isset($_SESSION['name'])) {echo $_SESSION['name'];} ?>"><br />
					<label>Категория</label>
					<select name="type">
						<?php
						$query = "select * from types;";
						$result = mysql_query($query);
						while ($row = mysql_fetch_array($result)) {
							echo "<option value='".$row['type_id']."'>".$row['type']."</option>";
						}
						?>
					</select><br />
					<label>Описание</label>
					<textarea name="description" rows="5"><?php if (isset($_SESSION['description'])) {echo $_SESSION['description'];} ?>
					</textarea><br />
					<label>Цена</label>
					<input name="price" type="number" value="<?php if (isset($_SESSION['price'])) {echo $_SESSION['price'];} ?>"><br />
					<label>Фото</label>
					<input type="file" name="image" value="<?php if (isset($_SESSION['img'])) {echo $_SESSION['img'];} ?>"><br />
					<input type="submit" value="Отправить" name="submit">
					<?php if (isset($_SESSION['error'])) {
					echo "<h2>" . $_SESSION['error'] . "</h2>";
					unset($_SESSION['error']);
				}
				$try = 0;
				?>
				
		</form>
		</div>
		</div>
    </div>
     
    
    
  </div>
   <div id="footer-push">
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
    <p class="copy">© Copyright 2014
  </div>
</div>
</body>
</html>