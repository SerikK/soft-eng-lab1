<?php
    session_start();
	require_once 'db_config.php';
	if (!isset($_SESSION['admin']) || !$_SESSION['admin']) {
	header("Location: ./index.html");
	}
	if (isset($_FILES['image']) && isset($_POST['name']) && isset($_POST['desc']) && isset($_POST['price']) && isset($_POST['type'])) {
		$img_name = $_FILES['image']['name'];
		if (file_exists("./uploads/" . $img_name)) {} 
		else {
		$dest = __DIR__ . DIRECTORY_SEPARATOR . "uploads" . DIRECTORY_SEPARATOR . $img_name;
		$res = move_uploaded_file($_FILES["image"]["tmp_name"], $dest);
	 	}
	$name = $_POST['name'];
	$img = 'uploads/'+""+$img_name;
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
<!DOCTYPE HTML>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<title>Aszhan</title>
	</head>
	<body>
<div id="wrapper">
  <div class="header">
    <div class="shell">
      <h1 id="logo"><a href="index.html"></a></h1>
    	
      <div class="header-right">
      	<?php 
      	if (isset($_SESSION['admin']) && $_SESSION['admin']){
      		echo "<div><h2>Добро пожаловать админ</h2><a href='logout.php'>Выйти</a></div>";
      	}
      	?>
        <div class="cl">&nbsp;</div>
      </div>
      <div class="cl">&nbsp;</div>
      <nav id="navigation">
        <ul>
          <li><a href="change_menu.php">Меню</a></li>
          <li><a href="Orders.php">Заказы</a></li>
          <li><a href="change_news.php">Новости</a></li>
        </ul>
      </nav>
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
        <li><a href="#">Меню</a></li>
        <li><a href="#">Заказы</a></li>
        <li><a href="#">Новости</a></li>
      </ul>
    </div>
    <p class="copy">© Copyright 2014
  </div>
</div>
</body>
</html>

