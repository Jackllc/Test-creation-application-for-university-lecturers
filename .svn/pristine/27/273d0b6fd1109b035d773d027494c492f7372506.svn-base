<?php
include 'system/connect.php';
include 'system/core.php';

if(logged_in()){	
	$session_user_id = $_SESSION['user_id'];
	 //User data for the session of logged in user
	$user_data = user_data($session_user_id, 'id','username','firstname','lastname','type', 'module', 'instructor');

?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Pratt - Free Bootstrap 3 Theme">
    <meta name="author" content="Alvarez.is - BlackTie.co">
    <link rel="shortcut icon" href="assets/ico/favicon.png">

    <title>QuizMaster</title>

    <!-- Bootstrap core CSS -->
    <link href="system/assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/main.css" rel="stylesheet">
    
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>
    
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/smoothscroll.js"></script>
    

  </head>

  <body data-spy="scroll" data-offset="0" data-target="#navigation">

    <!-- Fixed navbar -->
      <div id="navigation" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <?php
            $firstname = $user_data['firstname'];
$lastname = $user_data['lastname'];

	//Displaying logged in user data
	echo '<b>Hello </b>'.$firstname.' '.$lastname.'<br />';
	echo '<b>Module: </b>'.$user_data['module'].'<br />';
	
	if(isset($_POST['startquiz'])){
		$subjectcode = $_POST['subjectcode'];
		echo '<b>Subject: </b>'.$subjectcode;
	}
	?>

	<?php
			if(isset($_POST['startquiz'])){
			?>
		</br>
          <a class="navbar-brand">Time Remaining<div id="timer"></div></a> 
                    	<?php
			}
			?>
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>


  <section id="home" name="home"></section>
  <div id="headerwrap">
      <div class="container">
        <div class="row centered">
          <div class="col-lg-12">
          	
        </div>

        <div id="navbar" class="navbar-collapse collapse">
   <div>
    <div id="status">
          </form>
        </div>
      </div>
    </nav>

        </div>

<div style="text-align:right;">
<span style=" text-align:center; margin:5px;">


<?php

?>
</div>
</span>

<?php
//Start the timer once the quiz has been started
if(isset($_POST['startquiz'])){
?>

</br>
</br>
<?php
}






//isset start quiz hide
if(!isset($_POST['startquiz'])){
$usernamesub = $user_data['username'];
?>

<a title="Logout" href="system/logout.php"> Logout </a></div>
<?php
	$username = $user_data['username'];
	$module = $user_data['module'];
	


	$query = "SELECT * FROM `score` WHERE `username` = '$username' AND `module` = '$module'";
	$result = mysql_query($query);
	$numrows = mysql_num_rows($result);
	
	if($numrows != 0){

	echo '</br></br><form align="center" title="Quiz Results" action="quiz.php" method="post"><input type="submit" class="btn btn-lg btn-default" name="results" value="Quiz Results"/></form></br>';
	
	}
?>
	




<?php
}






//Hide is start quiz not set
if(!isset($_POST['startquiz'])){

if(!isset($_POST['submitquiz']) && !isset($_POST['submittime'])&& !isset($_POST['results']) && !isset($_GET['showmore'])){
$module= $user_data['module'];
$username = $user_data['username'];

$query="SELECT * FROM `quizset` WHERE `modulecode`='$module' AND `username`='$username'";
$result = mysql_query($query);
$numrows = mysql_num_rows($result);
if($numrows >= 1){

?>
<h2 align="center">You have been set the following to complete...</h2>
<form action="quiz.php" method="post" align="center">
<table align="center">
<tr><td>&nbsp;</td></tr>  
<tr><td>
<select name="subjectcode" class="form-control" style="width:auto;">
<?php
	$username = $user_data['username'];

	$query="SELECT `subjectcode` FROM `quizset` WHERE `modulecode`='$module' AND `username`='$username'";
	$result = mysql_query($query);
	while($row = mysql_fetch_assoc($result)){
		$subjectcode = $row['subjectcode'];
		//List the quizzes the student has been set and is yet to complete
		echo '<option value="'.$subjectcode.'">'.$subjectcode.'</option>';
	}
?>
</select>
</td></tr>
<tr><td>&nbsp;</td></tr>  
<tr><td><input type="Submit" name="startquiz" class="btn btn-lg btn-default" value="Start Quiz"/></td></tr>
</table>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>

</form>



<?php
}
else{
	echo '<h2><center>You have no outstanding quiz to complete!</h2></center></br></br></br></br></br></br></br></br></br></br></br></br>';
}

}
}


//If quiz has been started
if(isset($_POST['startquiz'])){

//Get timer for the quiz
	$query11 = "SELECT * FROM `quiz` WHERE `subjectcode` = '$subjectcode'";
	$result11 = mysql_query($query11);
	$row11 = mysql_fetch_assoc($result11);
	$timestore = $row11['timer'];

	$lastname = $user_data['lastname'];
	$queryextra = "SELECT * FROM `users` WHERE `lastname` = '$lastname'";
	$resultextra = mysql_query($queryextra);
	$rowextra = mysql_fetch_assoc($resultextra);
	$extratime = $rowextra['extratime'];
	
	//Extra time for eligible students
	if ($extratime != ""){
	$timestore += ($timestore/10)* 2;
	}


if($timestore > 0){
?>
<script>
var count = <?php echo $timestore; ?>;
var counter = setInterval(timer, 1000); 

function timer() {

    count = count - 1;
    if (count == -1) {
        clearInterval(counter);
		document.getElementById("submittime").click();
        return;

    }
	
	var secondcount = count;
    var seconds = count % 60;
    var minutes = Math.floor(count / 60);
    minutes %= 60;

    document.getElementById("timer").innerHTML = minutes + ":" + seconds; 

	}
	
</script>
<?php } 




	echo '<form align="center" action="quiz.php" method="post">';
	
	$subjectcode = $_POST['subjectcode'];
	$instructor = $user_data['instructor'];
	
	//Gather question data
	$query_q = "SELECT * FROM `question` WHERE `subjectcode` = '$subjectcode' AND `instructor`='$instructor' ORDER BY item_order";
	$result_q = mysql_query($query_q);
	$numrows_q = mysql_num_rows($result_q);
	
	$counter_q = 0;
	$numcount = ($counter_q + 1);
	while ($counter_q < $numrows_q) {

	$questionid = mysql_result($result_q,$counter_q,"questionid");
	$questions = mysql_result($result_q,$counter_q,"question");
	$questiontype = mysql_result($result_q,$counter_q,"type");
	$questionweight = mysql_result($result_q,$counter_q,"weight");
	

			
			echo '<input type="hidden" name="question'.$counter_q.'" value="'.$questionid.'" />';
			echo '<p style="text-align:center">'.$numcount.'.  &nbsp;'.$questions.'  (Marks: '.$questionweight.')</p>';
			
					//Gather answer data
					$query_a = "SELECT * FROM `answer` WHERE `questionid` = '$questionid' ORDER BY rand()";
					$result_a = mysql_query($query_a);
					$numrows_a = mysql_num_rows($result_a);
					
					$counter_a=0;
					while ($counter_a < $numrows_a) {

						$answers = mysql_result($result_a,$counter_a,"answer");
						
						if($questiontype != '3'){
						//If multiple choice or true false then radio buttons are used for answer input
						echo '<p style="text-align:center">&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="iscorrect'.$questionid.'" value="'.$answers.'"> &nbsp;'.$answers.'</p>';
						}
						//If Blank answer, text field for answer input
						else if($questiontype == '3'){
						echo '<p style="text-align:center">&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" autocomplete="off" name="iscorrect'.$questionid.'" /></p>';
						}
						
					$counter_a++;
					
					}
			echo '<p>&nbsp;</p>';
			
	$numcount++;
	$counter_q++;
	}


  echo '
		<input type="hidden" name="subjectcode" value="'.$subjectcode.'" />
		<input type="hidden" name="item" value="'.$numrows_q.'" />
		<input type="submit" name="submitquiz" value="Submit" class="btn btn-lg btn-default" id="submitquiz" />
		<input type="submit" name="submittime" value="Submit" id="submittime" hidden />
		</div>
		</div>
		</form>
		</br></br>';


}







//SUBMIT QUIZ OR THE QUIZ TIMER HAS GONE DOWN TO 0
if(isset($_POST['submitquiz'])| isset($_POST['submittime'])){

	$subjectcode = $_POST['subjectcode'];
	$username = $user_data['username'];
	$instructor = $user_data['instructor'];
	
	$query_quiz = "SELECT * FROM `question` WHERE `subjectcode` = '$subjectcode'";
	$result_quiz = mysql_query($query_quiz);
	$num = mysql_num_rows($result_quiz);
	
	$i=0;
	while ($i < $num) {

  	$questionid = mysql_result($result_quiz,$i,"questionid");
	$question = mysql_result($result_quiz,$i,"question");
	$questionweight = mysql_result($result_quiz,$i,"weight");
	
	$count_item = $i + 1;
	
		$query_answer = "SELECT * FROM `answer` WHERE questionid = '$questionid'";
		$result_answer = mysql_query($query_answer);
		$number = mysql_num_rows($result_answer);
	
		$j=0;
		while ($j < $number) {
		
		$question_answer_id =  mysql_result($result_answer,$j,"questionid");
		$answer =  mysql_result($result_answer,$j,"answer");
		$correct = mysql_result($result_answer,$j,"correct");
		$answer = strtolower($answer);
		
		$round = $j + 1;
		
		
		$post_answer = $_POST['iscorrect'.$question_answer_id .''];
		$post_answer = mysql_real_escape_string($post_answer);
		$post_answer = strtolower($post_answer);
		
		if(($post_answer == $answer)&&($correct == '1')){
			//If answered correctly insert into the correct column the weight value for that question $questionweight
				
				mysql_query("INSERT INTO `result` (`username`, `subjectcode`, `questionid`, `correctanswer`, `correct`, `useranswer`) 
				VALUES('$username','$subjectcode','$question_answer_id','$answer','$questionweight','$post_answer')")
				or die (mysql_error());
	}
		
		if(($post_answer != $answer)&&($correct == '1')){
			$incorrect_answer = 0;
			//If answered incorrectly insert into the correct column 0 as the user will receive no marks for their answer
			
				mysql_query("INSERT INTO `result` (`username`, `subjectcode`, `questionid`, `correctanswer`, `correct`, `useranswer`) 
				VALUES('$username','$subjectcode','$question_answer_id','$answer','$incorrect_answer','$post_answer')")
				or die (mysql_error());		
				}
			$j++;
		}

	$i++;

	}







	
	//SHOW QUIZ RESULTS ONCE THE QUIZ HAS BEEN SUBMITTED
	$subject = $subjectcode;
	$module = $user_data['module'];

	$query = "SELECT * FROM `quizset` WHERE `modulecode` ='$module'";
	$result = mysql_query($query);
	while($row = mysql_fetch_assoc($result)) {

	$subjectcode = $row['subjectcode'];

	if($subject == $subjectcode){

		echo '<div style="position:relative; bottom:80px;">';
		echo '<h1>Results</h1>';
		
			echo '<h3>Subject Code: &nbsp; '.$subject.'</h3>';
			echo '<h3>Score : &nbsp; <span style="font-size:24px; ">';
			
			$insructor = $user_data['instructor'];

			//Collect number of marks avaliable in the quiz
			$query="SELECT * FROM `question` WHERE `subjectcode` = '$subjectcode'";
			$result = mysql_query($query);
			$total_items = 0;
			while( $row = mysql_fetch_assoc($result)){
			$total_items += $row['weight'];
			}
			

			//Collect number of correct answers given
			$username =  $user_data['username'];
			$query="SELECT * FROM `result` WHERE `username` = '$username' AND `subjectcode` = '$subjectcode' AND `correct` != '0'";
			$result = mysql_query($query);
			$sum = 0;
			while( $row = mysql_fetch_assoc($result)){
			$sum += $row['correct'];
			}
			
			//Marks acheived over the number of marks avaliable for that quiz
			echo $sum." / ".$total_items;
			echo '</span></h3>';
			
			if($sum <=0 ){
				$percentage = 0;
			
			}

			else if ($sum > 0 ){
				$percentage = ($sum / $total_items) * 100;
				$percentage = round($percentage);
			}
			
			$today = date("Y-m-d");

		}

			$query1 = "SELECT * FROM `quiz` WHERE `subjectcode` = '$subjectcode'";
				$result1 = mysql_query($query1);
				while($row = mysql_fetch_array($result1)) {
				$passmark = $row['passmark'];

				//Passmark set by the quiz creator for that quiz
				echo '<h2>Passmark: '.$passmark.' %</h2>';
				//Percentage mark acheived
				echo '<h1>'.$percentage.' %</h1>';		
			
			if($percentage >= $passmark){
			echo '<p style="color:green; font-size:16px;">Pass</p>';
			}

			else if($percentage < $passmark){
			echo '<p style="color:red; font-size:20px;">Fail</p>';	
			}
			
			$full_name = $user_data['firstname'] .' '.$user_data['lastname'];
			
			mysql_query("INSERT INTO `score` (`subjectcode`,`username`,`full_name`, `module`, `instructor` ,`correct_answer`, `total_items`, `correct_percent`, `date_taken`) 
			VALUES('$subjectcode','$username','$full_name','$module','$instructor','$sum','$total_items','$percentage','$today')" )or die (mysql_error());

			//Unset the quiz for that student once successfully completed
			mysql_query("DELETE FROM `quizset` WHERE `username`='$username' AND `subjectcode`='$subjectcode' AND `modulecode`='$module'")or die (mysql_error());
		
					}
			
			echo '</div>';
			echo'<a title="Logout" href="system/logout.php"> Logout </a>';
		}
	}
?>





    </div><!-- /container -->
  </div> 
  <?php 
  //VIEW RESULT
if(isset($_POST['results'])){
	

	echo '<table class="table table-striped" WIDTH="600">
	<tr>
	<th>Subject Code</th>
	<th>Correct Marks</th>
	<th>Marks Avaliable</th>
	<th>Percentage</th>
	<th>Status</th>
	<th>Date Taken</th>
	<th>Results</th>
	</tr>';

	$username = $user_data['username'];
	$module = $user_data['module'];
	
	//Retreiving score data
	$query = "SELECT * FROM `score` WHERE `username` = '$username' AND `module` = '$module'";
	$result = mysql_query($query);
	$numrow = mysql_num_rows($result);
	while($row = mysql_fetch_assoc($result)){
	
		$subjectcode = $row['subjectcode'];
		$correct_answer = $row['correct_answer'];
		$total_items = $row['total_items'];
		$correct_percent = $row['correct_percent'];
		$date_taken = $row['date_taken'];

				$query1 = "SELECT * FROM `quiz` WHERE `subjectcode` = '$subjectcode'";
				$result1 = mysql_query($query1);
				while($row = mysql_fetch_array($result1)) {
				$passmark = $row['passmark'];
			
		
		echo '<tr>
			  <td>'.$subjectcode.'</td>
			  <td>'.$correct_answer.'</td>
			  <td>'.$total_items.'</td>
			  <td>'.$correct_percent.'</td>';
		

			if($correct_percent >= $passmark){
			echo '<td style="color:green;">Pass</td>';
	
			}
			else if($correct_percent < $passmark){
			echo '<td style="color:red; ">Fail</td>';	
			}
		
		echo '<td>'.$date_taken.'</td>
			  <td><a href="quiz.php?showmore='.$subjectcode.'">Show More</a></td>
			  </tr>';
		}
	}
	echo '</table>';
}


//VIEW SHOW MORE RESULT DATA FOR EACH QUESTION IN THE SELECTED QUIZ
if(isset($_GET['showmore'])){

	$subjectcode = $_GET['showmore'];

	$query_1 = "SELECT * FROM `result` WHERE `subjectcode` = '$subjectcode' AND `username` = '$username'";
	$result_1 = mysql_query($query_1);
	$numrows_1 = mysql_num_rows($result_1);


	$query_ques = "SELECT * FROM question WHERE subjectcode = '$subjectcode' ORDER BY questionid ASC";
	$result_ques = mysql_query($query_ques);
	$numrows_ques = mysql_num_rows($result_ques);


		echo "<table align='center'>
			  <tr>
			  <td width = '600'><b>Question</b></td>
			  <td width = '150'><b>Your Answer</b></td>
			  <td width = '150'><b>Correct Answer</b></td>
			  </tr>";


	$counter=0;

	while ($counter < $numrows_1) {
	$qnum = $counter + 1;

	$useranswer = mysql_result($result_1,$counter,"useranswer");
	$correctanswer = mysql_result($result_1,$counter,"correctanswer");
	$queryques = mysql_result($result_ques,$counter,"question");

		echo '<tr>
		<td><b>'.$queryques.'</b></td>
		<td>'.$useranswer.'</td>
		<td>'.$correctanswer.'</td>
		</tr>';

	$counter++;	

		}

		echo "</table></br>";
		echo '</div>';
}



?>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/bootstrap.js"></script>
  <script>
  $('.carousel').carousel({
    interval: 3500
  })
  </script>
  </body>
</html>
<?php
}
else{
	header('location:index.php');
}
?>