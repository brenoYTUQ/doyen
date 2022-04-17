<?php 
/* Insecure code: */
$query = $pdo->query("SELECT * FROM users WHERE username = '" . $_GET['username'] . "'");
 ?>