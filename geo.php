<?php

//Use Geocoding


function send_usr_address($address)
     // Get lat and long by address         
        $address = '5442 Firehouse Way, Fort Ann, NY 12827';
        $prepAddr = str_replace(' ','+',$address);
        $geo=file_get_contents('https://maps.google.com/maps/api/geocode/json?address='.$prepAddr.'&sensor=false');
        $geo = json_decode($geo, true);
	
		if (isset($geo['status']) && 9$geo['status']  == 'OK')) {
			$latitude = $geo['results'][0]['geometry']['location']['lat']; // Latitude
			$longitude = $geo['results'][0]['geometry']['location']['lng']; // Latitude
		}
		
		echo $latitude . '<br>';
		echo $longitude;

?>
