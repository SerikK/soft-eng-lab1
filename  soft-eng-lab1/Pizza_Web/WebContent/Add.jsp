<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<title>Insert title here</title>
</head>
<body>
<form action=""method="post">
<fieldset>
<legend>Добавление продукта</legend>
<div>
<label>Название</label><input name="name"type="text"/><br>
<label>Описание</label><textarea name="description" rows="5"></textarea><br>
<label>Цена</label><input name="price"type="text"><br>
<label>Фото</label><input type="file"name="photo">
<input type="submit"value="Отправить">
</div>
</fieldset>
</form>
</body>
</html>