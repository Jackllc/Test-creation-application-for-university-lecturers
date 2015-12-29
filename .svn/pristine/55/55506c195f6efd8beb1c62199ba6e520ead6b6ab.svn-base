<?php
include 'connect.php';
include 'core.php';

if(logged_in()){
	
	$session_user_id = $_SESSION['user_id'];
	$user_data = user_data($session_user_id, 'id','username','firstname','lastname','type');


	
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Quizzes</title>
 
  <link href="css/min.css" rel="stylesheet">
  </head>
  <body>
  </br>
  </br>

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

$instructor = $user_data['username'];
$query="SELECT * FROM `quiz` WHERE `instructor`= '$instructor'";
$result = mysql_query($query);
$numrows = mysql_num_rows($result);

//Delete the given quiz by its id
if(isset($_GET['del'])){
	$id = $_GET['del'];

			mysql_query("DELETE FROM `quiz` WHERE `id`=$id")or die (mysql_error());
			header('Location:quizzes.php');
}



$instructor = $user_data['username'];
$query="SELECT * FROM `quiz` WHERE `instructor`= '$instructor'";
$result = mysql_query($query);
$numrows = mysql_num_rows($result);


?>

<form action="quizzes.php" method="post" >
<div id="viewsubject">

<table WIDTH="500" class="table table-striped">
<tr><th>Quiz Name</th>
	<th>Quiz Code</th>
	<th>Instructor</th>
  <th>Pass %</th>
	<th>Delete</th>
</tr>

<?php

$count=0;
while ($count < $numrows) {

$id = mysql_result($result,$count,"id");
$subjectname = mysql_result($result,$count,"subjectname");
$subjectcode = mysql_result($result,$count,"subjectcode");
$instructor = mysql_result($result,$count,"instructor");
$passmark = mysql_result($result,$count,"passmark");

		echo '<tr>
    <td>'.$subjectname.'</td>
		<td>'.$subjectcode.'</td>
    <td>'.$instructor.'</td>
    <td>'.$passmark.'</td>
    <td><a onclick="return proceed()" href="quizzes.php?del='.$id.'" class="linkdel">delete</a></td>
    </tr>';
    //Delete the given quiz by its id
    
$count++;	
}

?>
</table>
</form>
</br>
<?php

$query1="SELECT * FROM `quiz` WHERE `instructor`= '$instructor'";
$result1 = mysql_query($query1);
  while($row = mysql_fetch_array($result1)){
  
    $subname = $row['subjectname'];
    $subcode = $row['subjectcode'];
?>

      <form name = 'form4' method = 'post' action = 'sortquiz.php'>
    <?php
    //Link to sort the order of the questions within the chosen quiz
    echo "</br><button name = 'button' type = 'submit' class='btn btn-default' value = '$subcode' >Order</button>"."<span><b>$subname</b></span></br>";
    ?>
    </form>
    <?php
} 
?>

</div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>


<?php
}
else{
	header('location:../index.php');
}
?>