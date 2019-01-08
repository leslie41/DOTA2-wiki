<?php
function mysqlToRows($a,$b){
	$c = mysqli_query($a,$b);
	while ($d = mysqli_fetch_array($c)) {
    	$rows[] = $d;
	}
	return $rows;
}
?>