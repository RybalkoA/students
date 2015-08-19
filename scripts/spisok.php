<?php 

function spisok(){	
$query = "SELECT*FROM students";
$res = mysql_query($query);

$ret = array();
while (false !==$row = mysql_fetch_assoc($res)){
$ret[] = $row;
	}
return $ret;
}

?>
