<?php 
//Administrator Login connection
 $search= mysql_connect("localhost", "root", "")or die("Cannot connect to the Server");
mysql_select_db("admin", $search)or die("cannot connect to the Database");
?>