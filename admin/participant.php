<?php
require_once('../lib/global.php');
$t = $mysqli->query("SELECT * FROM workshops WHERE id IN (SELECT id FROM entries WHERE email = '".$_GET['id']."' AND name = '{$_GET['name']}')");

?>

<table border='1'>
<thead><tr>
<td>ID</td><td>Workshop Name</td><td>Speaker</td><td>Venue</td><td>Day</td><td>Start Time</td><td>End Time</td><td>No Show</td>
</tr></thead>

<?php
while ($s = $t->fetch_assoc()) {
    echo '<tr onclick="window.location=\'workshop.php?id='.$s['id'].'\'">';
    echo "<td>".$s['id']."</td><td>".$s['name']."</td><td>".$s['speaker']."</td><td>".$s['venue']."</td><td>".$s['day']."</td><td>".$s['start']."</td><td>".$s['end']."</td><td><a href='cancel.php?email={$_GET['id']}&name={$_GET['name']}&id={$s['id']}'>Cancel</a></td></tr>\n";
}
?>
</table>