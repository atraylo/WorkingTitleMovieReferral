<?php
//Populate these four variables
$SrvName = "csc490server.database.windows.net";//Domain name of database server
$DBName = "userinfo";//name of your database
$SQL_USER = "Sytivawheeler490";//SQL user
$SQL_PASS = "movieref3462!";//SQL password

try{
    $dbh = new PDO("sqlsrv:server = tcp:".$SrvName.",1433; Database = ".$DBName, $SQL_USER, $SQL_PASS);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    exit("DB Connection Failed: ".$e->getMessage());
}

?>
