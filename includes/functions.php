<?php
function clean($var) {
	$var = trim($var);
	$var = strip_tags($var);
	$var = stripslashes($var);
	$var = htmlentities ($var, ENT_QUOTES);
	return $var;
}

function getClientIP() {

    if (isset($_SERVER)) {

        if (isset($_SERVER["HTTP_X_FORWARDED_FOR"]))
            return $_SERVER["HTTP_X_FORWARDED_FOR"];

        if (isset($_SERVER["HTTP_CLIENT_IP"]))
            return $_SERVER["HTTP_CLIENT_IP"];

        return $_SERVER["REMOTE_ADDR"];
    }

    if (getenv('HTTP_X_FORWARDED_FOR'))
        return getenv('HTTP_X_FORWARDED_FOR');

    if (getenv('HTTP_CLIENT_IP'))
        return getenv('HTTP_CLIENT_IP');

    return getenv('REMOTE_ADDR');
}

function getFaculty($FACULTY_ID) {
	$conn = $GLOBALS['conn'];
	$sql = "SELECT * FROM NET_DSA.FACULTY WHERE FACULTY_ID = $FACULTY_ID";
	$stid = oci_parse($conn, $sql);
	oci_execute($stid) or die('Cannot Execute Query');
	$obj = oci_fetch_object($stid, OCI_ASSOC+OCI_RETURN_NULLS);
	return $obj;
}

function getDepartment($DEPARTMENT_ID) {
	$conn = $GLOBALS['conn'];
	$sql = "SELECT * FROM NET_DSA.DEPARTMENT WHERE DEPARTMENT_ID = $DEPARTMENT_ID";
	$stid = oci_parse($conn, $sql);
	oci_execute($stid) or die('Cannot Execute Query');
	$obj = oci_fetch_object($stid, OCI_ASSOC+OCI_RETURN_NULLS);
	return $obj;
}

function getProgram($PROGRAM_ID) {
	$conn = $GLOBALS['conn'];
	$sql = "SELECT * FROM NET_DSA.PROGRAMS WHERE PROGRAM_ID = $PROGRAM_ID";
	$stid = oci_parse($conn, $sql);
	oci_execute($stid) or die('Cannot Execute Query');
	$obj = oci_fetch_object($stid, OCI_ASSOC+OCI_RETURN_NULLS);
	return $obj;
}

function getDesignation($DESIG_CODE) {
	$conn = $GLOBALS['conn'];
	$sql = "SELECT * FROM NET_DSA.DESIGNATION WHERE DESIG_CODE = '$DESIG_CODE'";
	$stid = oci_parse($conn, $sql);
	oci_execute($stid) or die('Cannot Execute Query');
	$obj = oci_fetch_object($stid, OCI_ASSOC+OCI_RETURN_NULLS);
	return $obj;
}

function getStudent($STD_CNIC) {
	$conn = $GLOBALS['conn'];
	$sql = "SELECT * FROM NET_DSA.STUDENT WHERE STD_CNIC = '$STD_CNIC'";
	$stid = oci_parse($conn, $sql);
	oci_execute($stid) or die('Cannot Execute Query');
	$obj = oci_fetch_object($stid, OCI_ASSOC+OCI_RETURN_NULLS);
	return $obj;
}

function getTeacher($EMP_CNIC) {
	$conn = $GLOBALS['conn'];
	$sql = "SELECT * FROM NET_DSA.TEACHER WHERE EMP_CNIC = '$EMP_CNIC'";
	$stid = oci_parse($conn, $sql);
	oci_execute($stid) or die('Cannot Execute Query');
	$obj = oci_fetch_object($stid, OCI_ASSOC+OCI_RETURN_NULLS);
	return $obj;
}

function getDistrict($DISTRICT_CODE) {
	$conn = $GLOBALS['conn'];
	$sql = "SELECT * FROM NET_DSA.DISTRICT_PROVINCE WHERE DISTRICT_CODE = '$DISTRICT_CODE'";
	$stid = oci_parse($conn, $sql);
	oci_execute($stid) or die('Cannot Execute Query');
	$obj = oci_fetch_object($stid, OCI_ASSOC+OCI_RETURN_NULLS);
	return $obj;
}

function getProvince($ID) {
	$conn = $GLOBALS['conn'];
	$sql = "SELECT * FROM NET_DSA.PROVINCE WHERE ID = '$ID'";
	$stid = oci_parse($conn, $sql);
	oci_execute($stid) or die('Cannot Execute Query');
	$obj = oci_fetch_object($stid, OCI_ASSOC+OCI_RETURN_NULLS);
	return $obj;
}


?>