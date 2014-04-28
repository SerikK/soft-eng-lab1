<?php
session_start();
require_once 'db_config.php';
if (!isset($_SESSION['admin']) || (isset($_SESSION['admin']) && !$_SESSION['admin'])) {
	if (isset($_POST['password'])) {
		$table_name = "admin";
		$result = mysql_query("select * from $table_name;");
		$row = mysql_fetch_array($result);
		if (isset($row['password']) && $row['password'] == $_POST['password']) {
			$_SESSION['admin'] = TRUE;
		} else {
			$_SESSION['error'] = "Не правильный пароль";
		}
	}
}
$content = "";
if (isset($_SESSION['admin']) && $_SESSION['admin']) {} 
else {
	$error = "";
	if (isset($_SESSION['error']))
		$error = $_SESSION['error'];
	$content = "
				<h3>Введите пароль для авторизации</h3>
				<p class='red'>$error</p>
				<form method='post' action=''>
					<input class='input' type='password' name='password' size='50' />
					<br>
					<input class='btn'type='submit' name='submit' />
				</form>
				";
	if (isset($_SESSION['error']))
		unset($_SESSION['error']);
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
      <div class="content">
				<?php echo $content; ?>
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