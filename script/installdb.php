<?php
require '.\includes\db_login.php';
$sql = file_get_contents('installdb.sql');
pg_query($db, $sql);
?>