<?php 
// DB credentials.
define('DB_HOST','sql6.freesqldatabase.com');
define('DB_USER','sql6463082');
define('DB_PASS','Gf7VfdtIJc');
define('DB_NAME','sql6463082');
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
