<?php 

  function data_base_connect()
   {
     $dbh = new PDO("mysql:host=localhost;dbname=TDW;charset=utf8", "root", "");
     
     $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     
     return ($dbh);
   } 
	
?>
