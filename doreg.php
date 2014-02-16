<?php
	require_once('lib/global.php');
    $p = 0;
    if ($_POST['isonline'] == 'on') {
        if ($_POST['profession'] == 'Professional') $p = 50;
        else $p = 40;
    } else {
        if ($_POST['profession'] == 'Professional') $p = 30;
        else {
            if ($_POST['insti'] != 'NITC') $p = 20;
            else $p = 10;
        }
    }
    if ($_POST['kit'] == 'on') $k = 1;
    else $k = 0;
    $t = $mysqli->query("INSERT INTO Register VALUES ('{$_POST['email']}', '{$_POST['name']}', '{$_POST['phone']}', '{$_POST['profession']}', '{$_POST['insti']}', '{$_POST['rollno']}', '{$_POST['git']}', '{$_POST['twitter']}', '{$p}', '{$k}') ON DUPLICATE KEY UPDATE email = '{$_POST['email']}', name = '{$_POST['name']}', phone = '{$_POST['phone']}', profession = '{$_POST['profession']}', insti = '{$_POST['insti']}', rollno = '{$_POST['rollno']}', git = '{$_POST['git']}', twitter = '{$_POST['twitter']}', preference = '{$p}', kit = '{$k}'");
    $t = $mysqli->query("SELECT W.`id`, W.`name`, W.`speaker` FROM `workshops` as W");
    if (isset($_GET['edit'])) {
        $f = $mysqli->query("SELECT id FROM entries WHERE email = '{$_POST['email']}' AND name = '{$_POST['name']}'");
        $m = array();
        while ($s = $f->fetch_assoc()) {
            $m[] = $s['id'];
        }
    }
?>
    <form method='POST' action='dowork.php?email=<?php echo $_POST['email']; ?>&name=<?php echo $_POST['name']; ?>'>
        <?php
            while ($s = $t->fetch_assoc()) {
                echo '<input type="checkbox" name="'.$s['id'].'" value="A"';
                if (isset($_GET['edit'])) if (in_array($s['id'], $m)) echo 'checked';
                echo ' >'.$s['name'].' by '.$s['speaker'].'<br>';
            }
        ?>
        <input type="submit" value="Submit">
    </form>