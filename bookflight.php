<?php

// retrieve the form data by using the element's name attributes value as key

	$from = $_POST['from'];
	$to = $_POST['to'];
	// display the results

		if($from == 'MDR' && $to =="DAB")
		{

			echo 'This is the aircraft: N201Px- . ICAO Address: a19715. Flight now = {https://www.geo-fs.com/geofs.php} ';
		}
		else
		{
			echo 'NO ACCESS';
		}

//}


?>
