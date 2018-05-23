<?php 
 
global $conn;
$conn = oci_pconnect('', '', 'localhost/orcl');

if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}else{
	
}
?>
