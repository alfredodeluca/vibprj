<?php
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = 'Mysql00';
   $db     = 'vibrato';
   
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   
   $sql = 'SELECT id, fname, lname, location FROM employee';
   mysql_select_db($db);
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
      echo "EMP ID :{$row['id']}  <br> ".
         "EMP NAME : {$row['fname']} <br> ".
         "EMP NAME : {$row['lname']} <br> ".
         "EMP LOC  : {$row['location']} <br> ".
         "--------------------------------<br>";
   }
   echo "DB: $db\n";   
   echo "Fetched data successfully\n";
   
   mysql_close($conn);
?>
