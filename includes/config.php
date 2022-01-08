<?php 
// DB credentials.
define('DB_HOST','https://www.000webhost.com/members/website/apollodatabase/database');
define('DB_USER','id18243669_apollodb1');
define('DB_PASS','Apolloplus1@');
define('DB_NAME','id18243669_apollomain');
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
