<?php
include("connect.php");
$query=mysql_query("SELECT * FROM jadwal");  
$row=mysql_fetch_row($query);