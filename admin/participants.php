<?php
require_once('../lib/global.php');
if (!isset($_SESSION['admin'])) {
    header('Location: index.php');
    _die();
}
$t = $mysqli->query("SELECT R.`email`, R.`name`, R.`phone`, R.`profession`, R.`insti`, P.c FROM `Register` as R, (SELECT email, name, COUNT(*) as c FROM `entries` GROUP BY entries.`email`, entries.`name`) as P WHERE P.`email` = R.`email` AND P.`name` = R.`name`");
?>

<table border='1'>
<thead><tr>
<td>Email ID</td><td>Name</td><td>Contact</td><td>Profession</td><td>College/Organization</td><td>Workshop Count</td>
</tr></thead>
<?php
while ($s = $t->fetch_assoc()) {
    echo '<tr onclick="window.location=\'participant.php?email='.$s['email'].'&name='.$s['name'].'">';
    echo "<td>".$s['email']."</td><td>".$s['name']."</td><td>".$s['phone']."</td><td>".$s['college']."</td><td>".$s['venue']."</td><td>".$s['c']."</td></tr>\n";
}
?>
</table>