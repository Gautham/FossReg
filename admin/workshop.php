<?php
require_once('../lib/global.php');
$t = $mysqli->query("SELECT * FROM Register, (SELECT email, name, time FROM entries WHERE id = '".$_GET['id']."') as A WHERE Register.email = A.email AND Register.name = A.name ORDER by preference DESC, time ASC");

?>

<table border='1'>
<thead><tr>
<td>Email ID</td><td>Name</td><td>Contact</td><td>College</td><td>Roll No</td><td>Profession</td><td>Company</td><td>Twitter</td><td>Github</td><td>No Show</td>
</tr></thead>

<?php
while ($s = $t->fetch_assoc()) {
    echo '<tr onclick="window.location=\'participant.php?id='.$s['email'].'&name='.$s['name'].'\'">';
    echo "<td>".$s['email']."</td><td>".$s['name']."</td><td>".$s['phone']."</td><td>".$s['college']."</td><td>{$s['rollno']}</td><td>".$s['profession']."</td><td>{$s['insti']}</td><td>{$s['twitter']}</td><td>{$s['git']}</td><td><a href='cancel.php?email={$s['email']}&name={$s['name']}&id={$_GET['id']}'>Cancel</a></td></tr>\n";
}
?>
</table>