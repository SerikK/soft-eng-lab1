<?php
    session_start();
	require_once 'db_config.php';
	if (!isset($_SESSION['admin']) || !$_SESSION['admin']) {
	header("Location: ./index.html");
	}
	if (isset($_FILES['image']) && isset($_POST['name']) && isset($_POST['desc']) && isset($_POST['price']) && isset($_POST['type'])) {
		$img_name = $_FILES['image']['name'];
		if (file_exists("./images/" . $img_name)) {} 
		else {
		$dest = __DIR__ . DIRECTORY_SEPARATOR . "images" . DIRECTORY_SEPARATOR . $img_name;
		$res = move_uploaded_file($_FILES["image"]["tmp_name"], $dest);
	 	}
	$name = $_POST['name'];
	$img = 'images/'+""+$img_name;
	$description = $_POST['desc'];
	$price = $_POST['price'];
	$type = $_POST['type'];
	$query = "insert into dishes(name, urlphoto, description, price, type_id) values('$name','$img','$description',$price, '$type')";
	$result = mysql_query($query);
	if ($result == false) {
		$_SESSION['error'] = "Проверьте данные еще раз";
	} else {
		header("Location: ./change_menu.php");
	}
	
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
        <li><a href="change_menu.php">Изменить Меню</a></li>
        <li><a href="orders.php">Принять Заказы</a></li>
        <li><a href="add_news.php">Добавить Новости</a></li>
        </ul>
      </nav>
     </div>
  </div>
    <div  class="main">
      <div class="content">
      	      <div class="side">
		<form action="" method="post" enctype="multipart/form-data">
			
				<legend>
					Добавление продукта
				</legend>
				<div class="adding">
					<label>Название</label>
					<input name="name" type="text"/><br />
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
					<textarea name="desc" rows="5"></textarea><br />
					<label>Цена</label>
					<input name="price" type="number"><br />
					<label>Фото</label>
					<input type="file" name="image"><br />
					<input type="submit" value="Отправить" name="submit">
					<?php if (isset($_SESSION['error'])) {
					echo "<h2>" . $_SESSION['error'] . "
</h2>";
					unset($_SESSION['error']);
				}
				$try = 0;
				?>
				</div>
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
        <li><a href="change_menu.php">Изменить Меню</a></li>
        <li><a href="orders.php">Принять Заказы</a></li>
        <li><a href="add_news.php">Добавить Новости</a></li>
      </ul>
    </div>
    <p class="copy">© Copyright 2014
  </div>
</div>
</body>
</html>