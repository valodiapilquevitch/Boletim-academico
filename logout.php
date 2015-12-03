<?php
	session_start();

	session_unset();
	session_destroy();
	session_write_close(); 
    header("location: http://mba.butantan.gov.br/notas/login.php");


?>
