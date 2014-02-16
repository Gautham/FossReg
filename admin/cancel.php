<?php
require_once('../lib/global.php');

$t = $mysqli->query("DELETE FROM entries WHERE email = '{$_GET['r_id']}' AND name = '{$_GET['name']}' AND id = '{$_GET['id']}'");
?>


<?php
echo "DONE\n";
?>
<a href="index.php">Back</a>