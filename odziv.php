<?php

$servername = "****";
$username = "****";
$password = "****";
$dbname = "****";
$sqltable = "****";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	$gosti = $_REQUEST['gosti'];
	$odrasli = $_REQUEST['odrasli'];
	$otroci = $_REQUEST['otroci'];
	$opombe = $_REQUEST['opombe'];
	$cerkvena_pride = $_REQUEST['cerkvena_pride'];
	$navadna_pride = $_REQUEST['navadna_pride'];
	$id = $_REQUEST['id'];

	// Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) 
    {
        die("Connection failed: " . $conn->connect_error);
    }

    $conn->set_charset("utf8");

    $sqlquery = ('SELECT naziv FROM '.$sqltable.' WHERE webid = "'.$id.'";');
    $check = $conn->query($sqlquery);
    $row = $check->fetch_array();
    $povabljeni = $row[0];

    function sanitize($instr)
    {
        $instr = str_replace('=', '', $instr);
    	$instr = str_replace(';', '', $instr);
        $instr = str_replace('#', '', $instr);
        $instr = str_replace('?', '', $instr);
        $instr = str_replace('$', '', $instr);
        $instr = str_replace('*', '', $instr);
        $instr = str_replace('%', '', $instr);
        $instr = str_replace('!', '', $instr);
        $instr = str_replace('\\', '', $instr);
        $instr = str_replace('/', '', $instr);
        return $instr;
    }

    if (!empty($gosti))
    {
		$sqlquery = 'UPDATE '.$sqltable.' SET gosti = "'.sanitize($gosti).'" WHERE webid = "'.$id.'";';
		$check = $conn->query($sqlquery);
    }

    if (!empty($odrasli))
    {
		$sqlquery = 'UPDATE '.$sqltable.' SET odrasli = "'.$odrasli.'" WHERE webid = "'.$id.'";';
		$check = $conn->query($sqlquery);
    }

    if (!empty($otroci))
    {
		$sqlquery = 'UPDATE '.$sqltable.' SET otroci = "'.$otroci.'" WHERE webid = "'.$id.'";';
		$check = $conn->query($sqlquery);
    }

    if (!empty($opombe))
    {
		$sqlquery = 'UPDATE '.$sqltable.' SET opombe = "'.sanitize($opombe).'" WHERE webid = "'.$id.'";';
		$check = $conn->query($sqlquery);
    }

    if (!empty($navadna_pride))
    {
		$sqlquery = 'UPDATE '.$sqltable.' SET navadna_pride = '.$navadna_pride.' WHERE webid = "'.$id.'";';
		$check = $conn->query($sqlquery);
    }

    if (!empty($cerkvena_pride))
    {
		$sqlquery = 'UPDATE '.$sqltable.' SET cerkvena_pride = '.$cerkvena_pride.' WHERE webid = "'.$id.'";';
		$check = $conn->query($sqlquery);
    }

    $msg = "<strong>Povabljeni</strong>: ".$povabljeni."<br />&nbsp;<br /><strong>Vneseni podatki</strong>:<br />Imena gostov: ".$gosti."<br />Odrasli: ".$odrasli."<br />Otrok: ".$otroci."<br />Pride na cerkveno: ".$cerkvena_pride."<br />Pride na civilno in zabavo: ".$navadna_pride."<br />Opombe: ".$opombe."<br />";
	$headers[] = 'MIME-Version: 1.0';
	$headers[] = 'Content-type: text/html; charset=utf-8';
	$headers[] = 'From: info@klemenklara.eu';
    mail("info@klemenklara.eu", "Nov vnos za id ".$id, $msg, implode("\r\n", $headers));

	echo 'Hvala za vašo informacijo o udeležbi.';

	$conn->close();
}

?>