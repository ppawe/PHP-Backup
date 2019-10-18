<?php

$mysqlUserName      = "adminer";
$mysqlPassword      = "Test1234";
$mysqlHostName      = "localhost";
$DbName             = "kanboard";
$backup_name        = "test.sql";

echo "test";

backupDatabase($mysqlHostName,$mysqlUserName,$mysqlPassword,$DbName,$backup_name);

function backupDatabase($mysqlHostName,$mysqlUserName,$mysqlPassword,$mysqlDatabaseName,$mysqlExportPath) {

    $command='mysqldump --opt -h' .$mysqlHostName .' -u' .$mysqlUserName .' -p' .$mysqlPassword .' ' .$mysqlDatabaseName .' > ' .$mysqlExportPath;
    exec($command,$output=array(),$worked);

    echo "worked";

}