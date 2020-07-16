<?php

function check_loggedin () {
	if (isset ($_SESSION['email']) ) {
		return true;
	}
	
	return false;
}

?>