<?php
include 'connect.php';
include 'core.php';

if(logged_in()){
	$session_user_id = $_SESSION['user_id'];
  //User data for the session of logged in user
	$user_data = user_data($session_user_id, 'id','username','firstname','lastname','type');
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modules</title>
 
    <link href="css/min.css" rel="stylesheet">
  </head>
  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Quiz Master</a>
        </div>

        <div id="navbar" class="navbar-collapse collapse">

   <div>
    <div id="status">
          </form>
        </div>
      </div>
    </nav>
   </div>
    <div class="jumbotron">
      <div class="container">



</br>
</br>


<?php
//delete module
if(isset($_GET['del'])){
	$id = $_GET['del'];
			mysql_query("DELETE FROM `module` WHERE `id`=$id")or die (mysql_error());
			header('Location:module.php');
}

  $instructor = $user_data['username'];
  $query="SELECT * FROM `module` WHERE `instructor`= '$instructor'";
  $result = mysql_query($query);
  $numrows = mysql_num_rows($result);

?>

<form action="module.php" method="post" >
<div id="viewmodule">
<table class="table table-striped" WIDTH="600">
<tr>
	<th>Module Name</th>
	<th>Module Code</th>
	<th>Instructor</th>
	<th>Delete</th>
</tr>

<?php

$counter=0;
while ($counter < $numrows) {
//Loop through each module per row in the table
$id = mysql_result($result,$counter,"id");
$modulename = mysql_result($result,$counter,"modulename");
$modulecode = mysql_result($result,$counter,"modulecode");
$instructor = mysql_result($result,$counter,"instructor");


		echo '<tr>
		<td>'.$modulename.'</td>
		<td>'.$modulecode.'</td>
		<td>'.$instructor.'</td>
		<td><a onclick="return proceed()" href="module.php?del='.$id.'">delete</a></td></tr>';
		//Delete module according to its id

$counter++;	
}
?>
</table>
</div>
</div>
</form>
</div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>

<?php
}
else{
  //If not logged in return them to log in page
	header('location:../index.php');
}
?>