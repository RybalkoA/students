<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="../style1.css">
<title>Список студентов</title>
</head>

<body>
<h1>Удаление записей</h1>
<h2>Поиск по полям</h2>
<form method="GET" action="del.php" >
<label for="first_name">Имя:</label><p><input name="first_name" type="text"></p>
<label for="last_name">Фамилия:</label><p><input name="last_name" type="text"></p>
<label for="grupa">Группа:</label><p><input name="grupa" type="text"></p>
<label for="faculty">Факультет:</label><p><input name="faculty" type="text"></p>
<input type="submit" value="Найти">
</form>
<?php 
require 'connect.php';
$del = "delete from students where id='{$_GET["del"]}'";
mysql_query($del);
$query = "SELECT * from students WHERE last_name LIKE '%".$_GET['last_name']. "%' AND first_name LIKE '%".$_GET['first_name']. "%' AND grupa LIKE '%".$_GET['grupa']. "%' AND faculty LIKE '%".$_GET['faculty']. "%'";
$res = mysql_query($query);
$row = mysql_num_rows($res);
echo "<table><table>
	<tr>
		<th>Имя</th>
	    <th>Фамилия</th>
		<th>Пол</th>
		<th>Возраст</th>
		<th>Группа</th>
		<th>Факультет</th>
	</tr>\n";
while ($row = mysql_fetch_array($res)){
	echo "<tr\n>";
	echo "<td>".$row['first_name']."</td>\n";
    echo "<td>".$row['last_name']."</td>\n";
    echo "<td>".$row['sex']."</td>\n";
    echo "<td>".$row['age']."</td>\n";
    echo "<td>".$row['grupa']."</td>\n";
    echo "<td>".$row['faculty']."</td>\n";
    echo "<td><a name=\"del\" href=\"del.php?del=".$row["id"]."\">Удалить</a></td>\n";
    echo "</tr>\n";
	
}
echo "</table>\n";

mysql_close();
echo ("<div style=\"text-align: center; margin-top: 10px;\"><a href=\"../spisok.php\">Вернуться назад</a></div>");
?>
</body>
</html>