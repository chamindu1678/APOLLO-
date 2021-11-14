<?php 
// DB credentials.
define('DB_HOST','remotemysql.com');
define('DB_USER','BOcF0FA5TZ');
define('DB_PASS','Djq2Wl9j32');
define('DB_NAME','BOcF0FA5TZ');
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>
