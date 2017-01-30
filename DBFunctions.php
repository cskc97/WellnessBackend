<?php

require_once("Config.php");

class DatabaseFunctions
{

	private $databaseConnection;

	public function __construct()
	{


		$this->databaseConnection=new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
	}


	public function __destruct()
	{

	$this->databaseConnection->close();

	//echo "<br> DESTRUCTOR INVOKED <br>";


	}


	public function insertValues($username,$anger=0,$contempt=0,$disgust=0,$fear=0,$happy=0,$neutral=0,$sadness=0,
		$surprise=0,$scale=0)
	{

		$insertQuery = "INSERT INTO `patientdata` (`_id`, `username`, `anger`, `contempt`, `disgust`, `fear`, `happy`, `neutral`, `sadness`, `surprise`, `scale`) VALUES (NULL, '".$username."', '".$anger."', '".$contempt."', '".$disgust."', '".$fear."', '".$happy."', '".$neutral."', '".$sadness."', '".$surprise."', '".$scale."');";

		//echo $insertQuery;

		$this->databaseConnection->query($insertQuery);



	}


	public function getDetails()
	{
		$query = "SELECT * FROM patientdata;";
		
		$result=$this->databaseConnection->query($query);

		$arr = [];


		while($row=$result->fetch_array())
		{
			array_push($arr, $row);

		}

		$result->free_result();

		echo json_encode($arr);
		

		

		




		
		



	}





}


//$obj = new DatabaseFunctions();
//$obj->insertValues("santhosh");
//$obj->insertValues("lakshmi");
//$obj->getDetails();


?>