<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" href="style1.css">
<title>Список студентов</title>
</head>

<body>

<table>
	<tr>
		<th>Имя</th>
	    <th>Фамилия</th>
		<th>Пол</th>
		<th>Возраст</th>
		<th>Группа</th>
		<th>Факультет</th>
	</tr>
<?php foreach ($new_st as $new_s):?>
	<tr>
	<td><?php echo $new_s['first_name'];?></td>
    <td><?php echo $new_s['last_name'];?></td>
    <td><?php echo $new_s['sex'];?></td>
    <td><?php echo $new_s['age'];?></td>
    <td><?php echo $new_s['grupa'];?></td>
    <td><?php echo $new_s['faculty'];?></td>
    </tr>
	
<? endforeach;?>
</table>
</body>
</html>