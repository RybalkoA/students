<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="../style1.css">
<title>Список студентов</title>
</head>

<body>
<form method="GET" action="edit.php">
Поиск: <br>
Имя:<input name="first_name" type="text"> Фамилия:<input name="last_name" type="text"> <input type="submit" value="Найти">
</form>
<?php 
require 'connect.php';

if ($_POST['submit_edit']){
	$query = "UPDATE students SET first_name='{$_POST['first_name_upd']}', last_name='{$_POST['last_name_upd']}', sex='{$_POST['sex_upd']}', age='{$_POST['age_upd']}', grupa='{$_POST['grupa_upd']}', faculty='{$_POST['faculty_upd']}' where  id='{$_POST['update']}'";
	}
mysql_query($query);
$query = "SELECT * from students WHERE last_name LIKE '%".$_GET['last_name']. "%' AND first_name LIKE '%".$_GET['first_name']. "%'";
$res = mysql_query($query);
$row = mysql_num_rows($res);


while ($row = mysql_fetch_array($res)){
	echo "<form action=\"edit.php\" method=\"post\" name=\"edit_form\">\n";
    echo "<input type=\"hidden\" name=\"update\" value=\"".$row["id"]."\" />\n";
    echo "<table border=\"1\" cellpadding=\"0\" cellspacing=\"0\">\n";
    echo "<tr>\n";
    echo "<td colspan=\"2\" style=\"border-bottom:solid 1px #CCCCCC;\"><b><i><div id=\"num\">#".$row["id"]."</div></b></i></td>\n";
    echo "</tr><tr>\n";
    echo "<td>Имя:</td><td><input type=\"text\" value=\"".$row['first_name']."\" name=\"first_name_upd\" /></td>\n";
    echo "</tr><tr>\n";
    echo "<td>Фамилия:</td><td><input type=\"text\" value=\"".$row['last_name']."\" name=\"last_name_upd\" /></td>\n";
    echo "</tr><tr>\n";
    echo "<td>Пол:</td><td><input type=\"text\" value=\"".$row['sex']."\" name=\"sex_upd\" /></td>\n";
    echo "</tr><tr>\n";
    echo "<td>Возраст:</td><td><input type=\"text\" value=\"".$row['age']."\" name=\"age_upd\" /></td>\n";
    echo "</tr><tr>\n";
    echo "<td>Группа:</td><td><input type=\"text\" value=\"".$row['grupa']."\" name=\"grupa_upd\" /></td>\n";
    echo "</tr><tr>\n";
    echo "<td>Факультет:</td><td><input type=\"text\" value=\"".$row['faculty']."\" name=\"faculty_upd\" /></td>\n";
    echo "</tr><tr>\n";    
    
    echo "<td colspan=\"2\" align=\"center\"><input type=\"submit\" name=\"submit_edit\" class=\"buttons\" value=\"Сохранить изменения\" /></td>\n";
    echo "</tr></table></form>\n\n";
}
echo "</table></div>\n";

mysql_close();
echo ("<div style=\"text-align: center; margin-top: 10px;\"><a href=\"../spisok.php\">Вернуться назад</a></div>");
?>
</body>
</html>