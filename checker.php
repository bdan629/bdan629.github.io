<?php
	function checkUDID($udid) 
	{
		$acceptedUDID = array('fbc41eeaf92c2c640f037d6aad2fa63aefdad6db');
		
		if (in_array($udid, $acceptedUDID))
			return 'YES';
		else
			return 'NO';	
	}
?>