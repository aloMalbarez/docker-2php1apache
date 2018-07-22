<?php
echo "<pre>";
echo "V7 ".__DIR__.PHP_EOL;
$DB_HOST = "db";
$DB_NAME = getenv('MYSQL_DATABASE');
$DB_USER = getenv('MYSQL_USER');
$DB_PASS = getenv('MYSQL_PASSWORD');

// PDO
try {
  $conn = new PDO("mysql:host=$DB_HOST;dbname=$DB_NAME", $DB_USER, $DB_PASS);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "[PDO] DB successfully connected";
}
catch(PDOException $e) {
  echo "[PDO] DB connection failed: " . $e->getMessage();
}
echo "</pre>";
?><br/>
<img src="img/checkmark-2.png" />
<?php echo "Some info:".PHP_EOL; ?><br/>
<?php phpinfo(); ?>
