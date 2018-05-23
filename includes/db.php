<?php 
 
global $conn;
$conn = oci_pconnect('gc_dsa', 'gc_dsa', 'localhost/orcl');

if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}else{
	
}
?>