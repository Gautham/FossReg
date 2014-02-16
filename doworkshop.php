<?php
require_once('lib/global.php');
    $t = $mysqli->query("SELECT W.`id`, W.`name`, W.`speaker` FROM `workshops` as W");
?>
    <form method='POST' action='submitreg.php'>
        <?php
            while ($s = $t->fetch_assoc()) {
                echo '<input type="checkbox" name="'.$s['id'].'" value="A">'.$s['name'].' by '.$s['speaker'].'<br>';
            }
        ?>
        <input type="submit" value="Submit">
    </form>
?>