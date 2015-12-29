<?php
include 'connect.php';
include 'core.php';

if(logged_in()){
	
	$session_user_id = $_SESSION['user_id'];
	$user_data = user_data($session_user_id, 'id','username','firstname','lastname','type');
	$instructor = $user_data['username'];
	



if(isset($_POST['addsubjectdata'])){
	$item = $_POST['item'];
	$instructor = $user_data['username'];		
	$subjectname = $_POST['subjectname'];
	$subjectcode = $_POST['subjectcode'];
	$classinst = $_POST['instructor'];
  $passmark = $_POST['passmark'];
	$timer = $_POST['quiztimer'];

  $subjectname = mysql_real_escape_string($subjectname);
  $subjectcode = mysql_real_escape_string($subjectcode);
  $passmark = mysql_real_escape_string($passmark);
  $timer = mysql_real_escape_string($timer);

			
		
				mysql_query("INSERT INTO `quiz` (`id`, `subjectname`, `subjectcode`, `instructor`, `passmark`, `timer`) VALUES
				('', '$subjectname', '$subjectcode', '$instructor', '$passmark', '$timer')")or die (mysql_error());
				header('Location:quizzes.php');
}
?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Quiz</title>
 
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

			echo '<form action="addQuiz.php" method="post">	
			      <table>
            <tr><td>Quiz Name</td><td><input type="text" class="form-control input-sm" name="subjectname" /></td></tr>
			      <tr><td>Quiz Code</td><td><input type="text" class="form-control input-sm" name="subjectcode" /></td></tr>
            <tr><td>Pass % </td><td><input type="text" class="form-control input-sm" name="passmark" /></td></tr>
			      <tr><td>Timer (Seconds) </td><td><input type="text" class="form-control input-sm" name="quiztimer" /></td></tr>
			      </table>

			      <div></div></br>

            <table>
            <tr><td colspan="2" style="text-align:right"><input type="submit" class="btn btn-lg btn-default" name="addsubjectdata"/></td></tr>
            </table>
			      <input type="hidden" name="item" value="">
			      </form>';	
?>




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