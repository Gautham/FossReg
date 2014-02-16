<?php
    require_once('lib/global.php');
    $i = 1;
    $t = $mysqli->query("DELETE FROM entries WHERE email = '{$_GET['email']}' AND name = '{$_GET['name']}'");
    $t = $mysqli->query("SELECT COUNT(*) FROM workshops");
    $t = $t->fetch_array()[0];
    while ($i < $t) {
        if (isset($_POST[$i])) $mysqli->query("INSERT INTO entries (email, name, id) VALUES ( '{$_GET['email']}', '{$_GET['name']}', '{$i}' )");
        $i = $i + 1;
    }
    echo "DONE!";
?>
<a href="index.php">Back</a>