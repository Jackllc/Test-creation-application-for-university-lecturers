<?php
include 'connect.php';
include 'core.php';

if(logged_in()){
	
	$session_user_id = $_SESSION['user_id'];
	$user_data = user_data($session_user_id, 'id','username','firstname','lastname','type');
	
							$instructor = $user_data['username'];
							$query="SELECT * FROM `score` WHERE `instructor`='$instructor' ORDER by `subjectcode` ASC";
							$result = mysql_query($query);
							$numrows = mysql_num_rows($result);
							
							}
	$userstatus = 'Instructor';
					
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Results</title>
 
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

<form action="result.php" method="post" >
<table class="table table-striped" WIDTH="600">
<tr>
	<th>Subject</th>
	<th>Username</th>
	<th>Name</th>
	<th>Module</th>
	<th>Correct Marks</th>
	<th>Total Marks</th>
	<th>Percentage</th>
	<th>Date Taken</th>
	<th>Graph</th>


<?php

$counter=0;
while ($counter < $numrows) {

$id = mysql_result($result,$counter,"id");
$subjectcode = mysql_result($result,$counter,"subjectcode");
$username = mysql_result($result,$counter,"username");
$fullname = mysql_result($result,$counter,"full_name");
$modulecode = mysql_result($result,$counter,"module");
$correct_answer = mysql_result($result,$counter,"correct_answer");
$total_items = mysql_result($result,$counter,"total_items");
$correct_percent = mysql_result($result,$counter,"correct_percent");
$date_taken = mysql_result($result,$counter,"date_taken");

		
		echo '<tr>
		<td>'.$subjectcode.'</td>
		<td>'.$username.'</td>
		<td>'.$fullname.'</td>
		<td>'.$modulecode.'</td>
		<td>'.$correct_answer.'</td>
		<td>'.$total_items.'</td>
		<td>'.$correct_percent.' %</td>
		<td>'.$date_taken.'</td>
		<td>'; 
		?>

      <form name = 'form5' method = 'post' action = 'test1.php'>
    <?php
    //Link to sort the order of the questions within the chosen quiz
    echo "</br><button name = 'button1' type = 'submit' class='btn btn-default' value = '$subjectcode' >Show</button>";
    ?>
    </form>
    <?php
    echo '</td>
	</tr>';
	
		?>
		
	
		<tr hidden><td>
		<input type="hidden" name="id<?php echo $counter; ?>" value="<?php echo $id; ?>" />
		<input type="hidden" name="user<?php echo $counter; ?>" value="<?php echo $username; ?>" />
		<input type="hidden" name="module<?php echo $counter; ?>" value="<?php echo $modulecode; ?>" />
		<input type="hidden" name="subject<?php echo $counter; ?>" value="<?php echo $subjectcode; ?>" />
		<input type="hidden" name="numrows" value="<?php echo $numrows; ?>" />
		</td></tr>
		<?php

$counter++;	
}









?>





</table>
</div>

</form>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>