<?php
$DB_host = "localhost";
$DB_user = "root";
$DB_pass = "sflogin@web";
$DB_name = "labyrinth11";

//$DB_host = "localhost:3306";
//$DB_name = "labyrinth";

try {
	$pdo = new PDO("mysql:host={$DB_host};dbname={$DB_name}", $DB_user, $DB_pass);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
	echo $e->getMessage();
}
?>

<?php
include 'user.php';
$user = new user($pdo);

?>
