<?php
// -----------------------------------------------------------------------------
// This function is common to all the database operations.
// It makes a connection to the database given its name
// and returns a link to the database.
// -----------------------------------------------------------------------------

function db_connect()
{
   //provide your database credentials 
   $host_name = "localhost";
   $user_name = "root";
   $password = "";
   $db_name = "gdg2016";
   
   $db_link = mysql_connect($host_name, $user_name, $password)
      or die("Could not connect to $host_name");
   mysql_select_db($db_name)
      or die("Could not select database $db_name");
   return $db_link;
}
?>