<?php
    session_start();
	
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<title>New Web Project</title>
	</head>
	<body>
		<form action=""method="post">
			<fieldset>
				<legend>
					Добавление продукта
				</legend>
				<div>
					<label>Название</label>
					<input name="name"type="text"/>
					<br>
					<label>Категория</label>
					<select>
						<?php
						$query = "select * from types;";
						$result = mysql_query($query);
						while ($row = mysql_fetch_array($result)) {
							echo "<option value='".$row['type_id']."'>".$row['type']."</option>";
						}
						?>
					</select>
					<label>Описание</label>					
					<textarea name="desc" rows="5">...</textarea><br>
					<label>Цена</label>
					<input name="price"type="text">
					<br>
					<label>Фото</label>
					<input type="file"name="photo">
					<input type="submit"value="Отправить">
				</div>
			</fieldset>
		</form>
	</body>
</html>

