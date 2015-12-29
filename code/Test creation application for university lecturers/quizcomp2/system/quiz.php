<?php
include 'connect.php';
include 'core.php';
require'PHPMailer-master/PHPMailerAutoload.php';
require'PHPMailer-master/class.phpmailer.php';

if(logged_in()){
	
	$session_user_id = $_SESSION['user_id'];
	$user_data = user_data($session_user_id, 'id','username','firstname','lastname','type','email');

	$instructor = $user_data['username'];


if(isset($_POST['setquiz'])){
	$subjectcode = $_POST['subjectcode'];
	$modulecode = $_POST['modulecode'];
	$username = $_POST['username'];
	$module = $_POST['module'];
	$subjectcode = mysql_real_escape_string($subjectcode);
	$modulecode = mysql_real_escape_string($modulecode);
	$username = mysql_real_escape_string($username);
	$module = mysql_real_escape_string($module);
	

	if(empty($modulecode) || $modulecode == ""){
		header('Location:quiz.php');
		exit();
	}
	

	if($username != 'all_stud'){
			$instructor = $user_data['username'];

			mysql_query("INSERT INTO `quizset` (`id`, `subjectcode`, `username`, `modulecode`, `instructor`) VALUES
			('', '$subjectcode', '$username', '$modulecode', '$instructor')")or die (mysql_error());
			

			}
			
	else{
		
		$instructor = $user_data['username'];

		//query module
		$query = "SELECT * FROM `users` WHERE `module`='$module' AND `type`='1'";
		$result = mysql_query($query);
			while($row= mysql_fetch_assoc($result)){
			$username = $row['username'];

				
				//insert each username to set quiz
				mysql_query("INSERT INTO `quizset` (`id`, `subjectcode`, `username`, `modulecode`, `instructor`) VALUES
				('', '$subjectcode', '$username', '$modulecode', '$instructor')")or die (mysql_error());
				
					
			}
	
	}


$query9 = "SELECT email FROM `users` WHERE `module`='$module' AND `type`='1'";
$result9 = mysql_query($query9);
if($row1= mysql_fetch_assoc($result9)){

$email= $row1['email'];

}

//USE OF PHPMailer EXTERNAL LIBRARY
$mail = new PHPMailer;
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  					  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'quizmasternoreply@gmail.com';      // SMTP username
$mail->Password = 'Emailtest1';                       // SMTP password
$mail->SMTPSecure = 'ssl';                            
$mail->Port = 465;      

$mail->From = 'quizmasternoreply@gmail.com';
$mail->FromName = 'Mailer';
$mail->addAddress($email, 'Joe User');     // Add a recipient
$mail->isHTML(true);                       // Set email format to HTML

$mail->Subject = 'noreply: QuizMaster';
$mail->Body    = 'You have been set a new <b>QuizMaster</b> quiz to complete! ';
$mail->send();

	
}			
	$userstatus = 'Instructor';

	
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Set Quiz</title>
 
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

<?php
$query="SELECT * FROM `quizset`";
$result = mysql_query($query);
$numrows = mysql_num_rows($result);
?>

</div>

<script>
function showUser(str) {
  if (window.XMLHttpRequest) {
    xmlhttp=new XMLHttpRequest();
  } else {
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("Usersbox").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","getuser.php?module="+str,true);
  xmlhttp.send();
}
</script>

<form action="quiz.php" method="post" align="center">
	
	<table align="center">
	<tr><td>Subject Code </td><td>
	<select name="subjectcode" class="form-control">
	<option value="">Select Subject</option>
	<?php 
	
	$instructor = $user_data['username'];
	$query = "SELECT DISTINCT `subjectcode` FROM `quiz` WHERE `instructor`= '$instructor'";


	$result = mysql_query($query);
	while($row= mysql_fetch_assoc($result)){
		$subjectcode = $row['subjectcode'];
		echo '<option>'.$subjectcode.'</option>';
		}
	?>


	</select></td></tr>
	
	<tr><td>Module Code </td><td>
	<select name="modulecode" class="form-control" onchange="showUser(this.value)">
	<option value="">Select module</option>
	<?php

	$instructor = $user_data['username'];
	$query = "SELECT `id`,`modulecode` FROM `module` WHERE `instructor`= '$instructor'";

	$result = mysql_query($query);
	$numrows = mysql_num_rows($result);
	
	$counter=0;
	$numcount = ($counter + 1);
	while ($counter < $numrows) {
		
		$modulecode = mysql_result($result,$counter,"modulecode");	
		
		echo '<option value='.$modulecode.'>'.$modulecode.'</option>';
		
		$numcount++;
		$counter++;
		}
	}
	?>
	</select>
	</td>
	</tr>
	<tr id="Usersbox"></tr>
	
	</table>
</br>
</br>
	
	
<p><input type="submit" class="btn btn-lg btn-default" name="setquiz" value="Set Quiz"></p>
	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>