<?php
class Connection
{
	public function get_connection()
	{
		 $host = "localhost";
		 $database = "pi2_rental";
		 $username = "root";
		 $password = "";
		 $connect = new mysqli($host, $username, $password, $database);
		 return $connect;
	}
}