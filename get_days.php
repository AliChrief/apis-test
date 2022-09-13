<?php
	//you shouldisnert date in definit format 
	// check if their is an insert date
	if(ISSET($_POST['get'])){
		$target=date('Y-12-25'); // days formated returns a string formatted according to the given format string
		$date= date('Y-m-d', strtotime($_GET['date']));
 
		if ($date > $target) {
			$target = date('Y-12-25', strtotime($target . ' +1 year'));//Parse English textual datetimes into Unix timestamps:
			$date1 = $target;
			$date2 = $date;
		} else {
			$date1 = $date;
			$date2 = $target;
		}
 
		$days=(int)(strtotime($target) - strtotime($date)) / 86400;// get the days left 
 
		echo $days .= "days left before christmas day";
	}

?>