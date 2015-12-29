<?php
include 'connect.php';
include 'core.php';
 
if(logged_in()){
     
    $session_user_id = $_SESSION['user_id'];
    //User data for the session of logged in user
    $user_data = user_data($session_user_id, 'id','username','firstname','lastname','type');
    $instructor = $user_data['username'];
    }



//Multiple Choice
if(isset($_POST['addquestionmc'])){
    $subjectcode = $_POST['subjectcode'];
    $quiztype = $_POST['quiztype'];
    $instructor = $user_data['username'];
    $questionname = $_POST['questionname'];
    $numchoice = $_POST['numchoice'];
    $iscorrect = $_POST['iscorrect'];
    $questionweight = $_POST['questionweight'];

         
            //insert into question table creation of multiple choice question
            mysql_query("INSERT INTO `question` (`id`, `questionid`, `question`, `subjectcode`, `instructor`, `type`, `weight`) VALUES
            ('', '$questionid', '$questionname','$subjectcode', '$instructor','$quiztype','$questionweight')")or die (mysql_error());
             
            //Question ID always one greater than the highest entry in the database
            //mysql_insert_id — Get the ID generated in the last query
            $lastID = mysql_insert_id(); 
                mysql_query("UPDATE `question` SET questionid='$lastID' WHERE `id`='$lastID' LIMIT 1") or die(mysql_error());
             
             
            //insert into answer table creation of the corresponding answers for the question
            $i = 1;
            while($i<=$numchoice){
                //Loop for however many answer choices the user created
                $answer = $_POST['answer'.$i.''];
                $answerid = $_POST['answerid'.$i.''];
                 
                    mysql_query("INSERT INTO `answer` (`questionid`, `answer`, `answerid`, `correct`) VALUES ('$lastID', '$answer', '$answerid', '0')") or die(mysql_error());
                     
                    //For the answer with a selected radio button (the corresponding correct answer, this answer is shown as correct in the database by a '1')
                    if(isset($iscorrect)){
                    mysql_query("UPDATE `answer` SET `correct` = '1' WHERE `questionid`='$lastID' AND `answerid` = '$iscorrect'") or die(mysql_error());
                    }     
                $i++;
            }

            header('Location:question.php');
}
 




//TO DO MULTIPLE CORRECT
if(isset($_POST['addquestionmc1'])){
    $subjectcode = mysql_real_escape_string($_POST['subjectcode']);
    $quiztype = $_POST['quiztype'];
    $instructor = $user_data['username'];
    $questionname = $_POST['questionname'];
    $numchoice = $_POST['numchoice'];
    $iscorrect = $_POST['iscorrect'];
    $questionweight = $_POST['questionweight'];
     
         
            //insert into question table creation of multiple choice question
            mysql_query("INSERT INTO `question` (`id`, `questionid`, `question`, `subjectcode`, `instructor`, `type`, `weight`) VALUES
            ('', '$questionid', '$questionname','$subjectcode', '$instructor','$quiztype','$questionweight')")or die (mysql_error());
             
            //Question ID always one greater than the highest entry in the database
            //mysql_insert_id — Get the ID generated in the last query
            $lastID = mysql_insert_id(); 
                mysql_query("UPDATE `question` SET questionid='$lastID' WHERE `id`='$lastID' LIMIT 1") or die(mysql_error());
             
             
            //insert into answer table creation of the corresponding answers for the question
            $i = 1;
            while($i<=$numchoice){
                //Loop for however many answer choices the user created
                $answer = $_POST['answer'.$i.''];
                $answerid = $_POST['answerid'.$i.''];
                 
                    if(isset($iscorrect)){
                    mysql_query("INSERT INTO `answer` (`questionid`, `answer`, `answerid`, `correct`) VALUES ('$lastID', '$answer', '$answerid', '0')") or die(mysql_error());
                    }
                    //For the answer with a selected radio button (the corresponding correct answer, this answer is shown as correct in the database by a '1')
                   // if(isset($iscorrect)){
                   // mysql_query("UPDATE `answer` SET `correct` = '1' WHERE `questionid`='$lastID' AND `answerid` = '$iscorrect'") or die(mysql_error());
                   // }
                       
                $i++;
            }

            header('Location:question.php');
}








//True and False
if(isset($_POST['addquestiontf'])){
    $subjectcode = $_POST['subjectcode'];
    $quiztype = $_POST['quiztype'];
    $instructor = $user_data['username'];
    $questionname = $_POST['questionname'];
    $iscorrect = $_POST['iscorrect'];
    $answer1 = $_POST['answer1'];
    $answer2 = $_POST['answer2'];
    $questionweight = $_POST['questionweight'];
     

            //insert into question table creation of true false question
            mysql_query("INSERT INTO `question` (`id`, `questionid`, `question`, `subjectcode`, `instructor`, `type`, `weight`) VALUES
            ('', '$questionid', '$questionname','$subjectcode', '$instructor', '$quiztype','$questionweight')")or die (mysql_error());
             

            //Question ID always one greater than the highest entry in the database
            //mysql_insert_id — Get the ID generated in the last query 
            $lastID = mysql_insert_id();
            mysql_query("UPDATE `question` SET questionid='$lastID' WHERE `id`='$lastID' LIMIT 1") or die(mysql_error());
             
             
            //insert into answer table depending on which answer was selected as being the correct one
            if($iscorrect == 'an1'){
                mysql_query("INSERT INTO `answer` (`questionid`, `answer`, `correct`) VALUES ('$lastID', '$answer1', '1')") or die(mysql_error());
                mysql_query("INSERT INTO `answer` (`questionid`, `answer`, `correct`) VALUES ('$lastID', '$answer2', '0')") or die(mysql_error());
            }
             
            elseif($iscorrect == 'an2'){
                mysql_query("INSERT INTO `answer` (`questionid`, `answer`, `correct`) VALUES ('$lastID', '$answer1', '0')") or die(mysql_error());
                mysql_query("INSERT INTO `answer` (`questionid`, `answer`, `correct`) VALUES ('$lastID', '$answer2', '1')") or die(mysql_error());
            }
             
            header('Location:question.php');
}
 



//Blank Answer
if(isset($_POST['addquestionba'])){
    $subjectcode = $_POST['subjectcode'];
    $quiztype = $_POST['quiztype'];
    $instructor = $user_data['username'];
    $questionname = $_POST['questionname'];
    $answer = $_POST['answer'];
    $questionweight = $_POST['questionweight'];


            //insert into question table creation of blank answer question
            mysql_query("INSERT INTO `question` (`id`, `questionid`, `question`, `subjectcode`, `instructor`, `type`, `weight`) VALUES
            ('', '$questionid', '$questionname','$subjectcode','$instructor','$quiztype','$questionweight')")or die (mysql_error());
             
            //Question ID always one greater than the highest entry in the database
            //mysql_insert_id — Get the ID generated in the last query
            $lastID = mysql_insert_id();
            mysql_query("UPDATE `question` SET questionid='$lastID' WHERE `id`='$lastID' LIMIT 1") or die(mysql_error());
                         
            $answer = $_POST['answer'];
            //Insert into answer table, as there is only one answer given and therefore correct always enter '1' in correct column
            mysql_query("INSERT INTO `answer` (`questionid`, `answer`, `correct`) VALUES ('$lastID', '$answer', '1')") or die(mysql_error());
             
            header('Location:question.php');
}
?>
 



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Question</title>
  
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
 
</div>

 
 
<form action="addQuestion.php" method="post" align="center">
<table align="center">
    <tr>
        <td>Subject</td>
        <td><select name="subjectcode" class="form-control" onchange="showUser(this.value)">
        <option value="">Select Subject</option>

<?php
    $instructor = $user_data['username'];
    $querysubject="SELECT DISTINCT `subjectcode` FROM `quiz` WHERE `instructor`= '$instructor'";
        
     
    $resultsubject = mysql_query($querysubject);
    while($row = mysql_fetch_assoc($resultsubject)){
        $subjectid = $row['id'];
        $subjectcode = $row['subjectcode'];
?>
     
    <option value="<?php echo $subjectcode; ?>"><?php echo $subjectcode; ?></option> 
    <?php } ?>
    </select></td></tr>
    

    <tr><td>Type: </td><td><select name="quiztype" class="form-control" >
    <option value="0">Select Question</option> 
    <option value="1">True or False</option>
    <option value="2">Multiple Choice</option>
    <option value="3">Blank Answer</option>
    </select>
    </td>


    <td id="multiple"> 
    <tr><td>Number of Choices: </td><td><select name="numchoice" class="form-control">
    <?php
    $counter = 2;
    while($counter <=5){
    ?>
    <option value="<?php echo $counter; ?>"><?php echo $counter; ?></option>
    <?php $counter++; } ?>
    </select> 
    </td></tr>   
</table>
</br>
<p><input type="submit" name="addquestion" value="Submit" class="btn btn-lg btn-default"/></p>
</form>
 
<?php

if(isset($_POST['addquestion'])){
        $quiztype = $_POST['quiztype'];
        $subjectcode = $_POST['subjectcode'];
        $numchoice = $_POST['numchoice'];

         
 
 
echo '<h2>Subject : '.$subjectcode.'</h2>    
      <form action="addQuestion.php" align="center" method="post">       
      <table align="center"><tr>
      <td><h2>Question Mark</h2><input type="text" class="form-control input-sm" name="questionweight"></td></tr></tr>
      <td><h2>Question</h2><textarea name="questionname" class="form-control input-lg"  cols="80" rows="3"></textarea></td></tr>
      <td><h2>Answers</h2></td>';



                if($quiztype == '1'){
                    echo '<tr><td><input type="radio" name="iscorrect" value="an1"><input type="text" name="answer1" value="true" readonly /></td></tr>
                          <tr><td><input type="radio" name="iscorrect" value="an2"><input type="text" name="answer2" value="false" readonly /></td></tr>';    
                }


                elseif($quiztype == '2'){

                    $i=1;
                    while($i<=$numchoice){
                        echo '<tr><td><input type="radio" name="iscorrect" value="an'.$i.'">
                        <textarea name="answer'.$i.'" cols="80" rows="1" ></textarea>
                        <input type="hidden" name="answerid'.$i.'" value="an'.$i.'">
                        <input type="hidden" name="numchoice" value="'.$i.'"></td></tr>';
                        $i++;
                    }   
                }


                elseif($quiztype == '3'){
                     
                        echo '<tr><td><input type="text" class="form-control input-sm"  name="answer"></td></tr>';
                     
                }

                elseif($quiztype == '4'){

                     $i=1;
                    while($i<=$numchoice){
                        echo '<tr><td><input type="checkbox" name="iscorrect" value="an'.$i.'"/>
                        <textarea name="answer'.$i.'" cols="80" rows="1"></textarea>
                        <input type="hidden" name="answerid'.$i.'" value="an'.$i.'">
                        <input type="hidden" name="numchoice" value="'.$i.'"></td></tr>';


                      $i++;
                    }   

                }
                 

            echo '</table>
                  <table align="center"><tr><td colspan="2" style="text-align:right"><input type="hidden" name="subjectcode" value="'.$subjectcode.'">
                  <input type="hidden" name="quiztype" value="'.$quiztype.'">
                  <input type="hidden" name="instructor" value="'.$instructor.'">
                  <input type="hidden" name="numchoice" value="'.$numchoice.'">
                  <td></td>
                  <td></td>';
             

            //quiztype submitdata validation
            if($quiztype == '1'){
                echo '<input type="submit" class="btn btn-lg btn-default" name="addquestiontf"/>';
                             
            }

            elseif($quiztype == '2'){
                echo '<input type="submit" class="btn btn-lg btn-default" name="addquestionmc"/>';     
            }

            elseif($quiztype == '4'){
                echo '<input type="submit" class="btn btn-lg btn-default" name="addquestionmc1"/>';     
            }

            else{
                echo '<input type="submit" class="btn btn-lg btn-default" name="addquestionba"/>';                            
            }

            echo '</td></tr></table>
                  <input type="hidden" name="item" value="">
                  </form>';   
            }
?>
</div>  
</select>







 
</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>