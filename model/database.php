<?php
$dsn = 'mysql:host=qbhol6k6vexd5qjs.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;dbname=w037hv168sn3tjez';
    $username = 'u8lequiy705eacm8';
    $password = 'cu1c97oi6oa2bf0v';
//$username = 'root';

try {
  $db = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
  $error_message = $e->getMessage();
  include('database_error.php');
  exit();
}
?>
