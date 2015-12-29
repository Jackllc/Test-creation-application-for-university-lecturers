<?php
require('connect.php');

$module = $_GET['module'];

?>
<td>Users</td><td>
	
	<select name="username" class="form-control">
	<?php
	echo '<option value="all_stud">All Students</option>';
	$query = "SELECT * FROM `users` WHERE `module`='$module' AND `type`='1'";
	$result = mysql_query($query);
	while($row= mysql_fetch_assoc($result)){
		$username = $row['username'];
		$firstname = $row['firstname'];
		$lastname = $row['lastname'];

	echo '<option value="'.$username.'">'.$firstname.'  '.$lastname.'</option>';
		}
	?>
	</select>
	
	<input type="hidden" name="module" value="<?php echo $module; ?>" />
</td>
	

