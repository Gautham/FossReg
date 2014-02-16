<?php
require_once('../lib/global.php');
if (!isset($_SESSION['admin'])) {
    header('Location: index.php');
    _die();
}
$t = $mysqli->query("SELECT W.`id`, W.`name`, W.`speaker`, W.`day`, W.`start`, W.`end`, W.`venue`, P.c FROM `workshops` as W, (SELECT id, COUNT(*) as c FROM `entries` GROUP BY `id`) as P WHERE P.`id` = W.`id`");
?>

<table border='1'>
<thead><tr>
<td>ID</td><td>Workshop Name</td><td>Speaker</td><td>Venue</td><td>Day</td><td>Start Time</td><td>End Time</td><td>Participant Count</td>
</tr></thead>
<?php
while ($s = $t->fetch_assoc()) {
    echo '<tr onclick="window.location=\'workshop.php?id='.$s['id'].'\'">';
    echo "<td>".$s['id']."</td><td>".$s['name']."</td><td>".$s['speaker']."</td><td>".$s['venue']."</td><td>".$s['day']."</td><td>".$s['start']."</td><td>".$s['end']."</td><td>".$s['c']."</td></tr>\n";
}
?>
</table>