<?php
     header("Access-Control-Allow-Origin: *");
     session_start();

     require_once 'db.php';
     header("Content-Type: application/json; charset=UTF-8");
     
	 //Fetches lists of polling_unit and passed to client to enable selection of any one of the polling_units available
	 $Result = $Connection->query("SELECT * FROM polling_unit");
	 $Data = array();
	 $FillIndex = 0;
	  
	for($Count = 0; $Count < $Result->num_rows ; ++$Count)
	{
		    $Row = $Result->fetch_array(MYSQLI_ASSOC);
				$Data[$FillIndex] = array('Name'=>$Row['polling_unit_name'] , 'UniqueID'=>$Row['uniqueid']);
            
		    $FillIndex++;
	}
	echo json_encode($Data);
?>