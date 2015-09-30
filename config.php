<?php
// Connection's Parameters

//$conx = mysql_connect("mysqlv110","evxdb","Evxdb123");
//mysql_select_db("evxdb", $conx);


$conx = mysql_connect("localhost","root","");
mysql_select_db("shuvgraydb", $conx);

/*$conx = mysql_connect("localhost","shuvgrwp_evxdb","q}(@@8m0NsI%") or die('Database not connected'.mysql_error());
	if (!$conx)

	  {

	  die('Could not connect: ' . mysql_error());

	  }*/

mysql_select_db("shuvgrwp_evxdb", $conx)or die('Database shuvgrawp_evxdb  not connected'.mysql_error());

?>