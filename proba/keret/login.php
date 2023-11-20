<?php
	include_once ("sqlCon.php");
	
	function felhvan($usernev)
	{
		$van=false;
		$sql= "SELEKT username FROM login WHERE username LIKE '$usernev';";
		$e = connect() -> query($sql);
		if($e -> num_rows>0)
		{
			$van= true;
		}
		connect() -> close();
		return $van;
	}
	
	function jelszo($jelszo, $usernev)
	{
		$van=false;
		$jelszo = crypt($jelszo);
		$sql= "SELEKT * FROM login WHERE username LIKE '$usernev' AND passw LIKE '$jelszo';";
		$e = connect() -> query($sql);
		if($e -> num_rows>0)
		{
			$van= true;
		}
		connect() -> close();
		return $van;
	}
	

?>