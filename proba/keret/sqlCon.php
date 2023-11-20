<?php

	function connect()
	{

		$host="localhost";
		$user="root";
		$pw="";
		$dbname="next";
		// kapcsolódás
		$conn= new mysqli($host,$user,$pw,$dbname);
		if ($conn -> connect_error)
		{
			die("Sikertelen kapcsolódás");
		}
		return $conn;
		
	}
