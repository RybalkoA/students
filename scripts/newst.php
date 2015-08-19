<?php 
require 'connect.php';

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$sex = $_POST['sex'];
$age = $_POST['age'];
$grupa = $_POST['grupa'];
$faculty = $_POST['faculty'];
$insert_sql = "INSERT INTO students (first_name, last_name, sex, age, grupa, faculty)" .
"VALUES('{$first_name}', '{$last_name}', '{$sex}', '{$age}', '{$grupa}', '{$faculty}');";
mysql_query($insert_sql);
?>