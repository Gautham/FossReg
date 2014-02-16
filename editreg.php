<?php
require_once('lib/global.php');

$t = $mysqli->query("SELECT * FROM Register");

?>


<table border='1'>
<thead><tr>
<td>Sl No</td><td>Email ID</td><td>Name</td><td>Contact No</td><td>Profession</td><td>College/Organization</td><td>Profession</td><td>Roll No</td><td>Twitter</td><td>Github</td><td>Kit</td><td>Edit</td>
</tr></thead>

<?php
$i = 1;
while ($s = $t->fetch_assoc()) {
    echo '<tr onclick="window.location=\'editp.php?email='.$s['email'].'&name='.$s['name'].'\'">';
    $i = $i + 1;
    echo "<td>{$i}</td><td>".$s['email']."</td><td>".$s['name']."</td><td>".$s['phone']."</td><td>".$s['profession']."</td><td>{$s['insti']}</td><td>".$s['rollno']."</td><td>{$s['git']}</td><td>{$s['kit']}</td><td>{$s['twitter']}</td><td>{$s['kit']}</td><td><a href='editp.php?email={$s['email']}&name={$s['name']}'>Edit</a></td></tr>\n";
}
?>