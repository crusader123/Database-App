<?php
session_start();
$con = 0;
function check_login(){					
	if(!isset($_SESSION['user'])){
		header('Location:kapilindex.php');
		die();
	}

}
function dbconnect($user,$password){
	GLOBAL $con;
	$con = mysql_connect('localhost',$user,$password);
	if(!$con){
		die("no connection");
	}
	else {
		$rv=mysql_select_db('Assignment',$con) or die( "Unable to select database");

		if(!$rv){
			die("klno database!");
		}

	}
}
function execute($q){
	GLOBAL $con;

	if($con == 0 ){
		dbconnect();
	}
	$r = mysql_query($q,$con);
	if(!$r){
		
		die("Cannot execute the query".$q);
	}
	else{
		return $r;
	}
}
function paginate($file,$myquery,$start,$lim)
{
	$query1 = $myquery.";";
	$result=execute($myquery);
	$num = mysql_num_rows($result);
	if($num == 0)
	{
		return $result;
	}
	$back = $start - $lim;
	$next = $start + $lim;
	$query2= $myquery." limit ".$start.",".$lim.";";
	$result2=execute($query2);
	echo mysql_error();
	$index = 1;
	if($num > $lim){		// display links only if records are enuf.
		if($back >=0){
			echo"<a href='".$file."?st=".$back."'>PREV</a>";
		}

		for($i=0;$i<$num;$i=$i+$lim){
			if($i != $start){

			echo" <a href='".$file."?st=".$i."'>";
			echo ' '.$index;
			echo "</a>";
			}
			else{
				echo ' ';
				echo $index;
			}
			$index = $index + 1;
		}
		if($next < $num){
			echo" <a href='".$file."?st=".$next."'> NEXT</a>";
		}
	}
	return $result2;
}
?>
