<?php
    require_once('lib/global.php');
    $t = $mysqli->query("SELECT * FROM Register WHERE email = '{$_GET['email']}' AND name = '{$_GET['name']}'");
    $t = $t->fetch_assoc();
?>
<form action="doreg.php?edit=1" method="post">
  Email ID: <input type="text" name="email" value="<?php echo $t['email']; ?>"><br>
  Name: <input type="text" name="name" value="<?php echo $t['name']; ?>"><br>
  Profession: <input type="radio" name="profession" value="Student" <?php if ($t['profession'] == 'Student') echo 'checked'; ?>><input type="radio" name="profession" value="Professional" <?php if ($t['profession'] == 'Professional') echo 'checked'; ?>>Professional<br>
  College/Organization: <input type="text" name="insti" value="<?php echo $t['insti']; ?>"><br>
  Phone: <input type="text" name="phone" value="<?php echo $t['phone']; ?>"><br>
  Roll No: <input type="text" name="rollno" value="<?php echo $t['rollno']; ?>"><br>
  Github: <input type="text" name="git" value="<?php echo $t['git']; ?>"><br>
  Twitter: <input type="text" name="twitter" value="<?php echo $t['twitter']; ?>"><br>
  Online Reg: <input type="checkbox" name="isonline" <?php if ($t['preference'] > 30) echo 'checked'; ?>><br>
  Kit: <input type="checkbox" name="kit" <?php if ($t['kit'] == 'on') echo 'checked'; ?>><br>
  <input type="submit" value="Submit">
</form>