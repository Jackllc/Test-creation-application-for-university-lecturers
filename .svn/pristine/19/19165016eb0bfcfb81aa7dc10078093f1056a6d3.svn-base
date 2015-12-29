<?php
include 'connect.php';
include 'core.php';
 
if(logged_in()){
     
    $session_user_id = $_SESSION['user_id'];
    $user_data = user_data($session_user_id, 'id','username','firstname','lastname','type');

            $instructor = $user_data['username']; 
        }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Questions</title>
  
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
 
 </b>
</br>
 
<?php
 
$instructor = $user_data['username'];
$query="SELECT * FROM `question` WHERE `instructor`='$instructor' ORDER by `subjectcode` ASC";
 
$result = mysql_query($query);
$numrows = mysql_num_rows($result);


//delete Question
if(isset($_GET['del'])){
    $id = $_GET['del'];
    $questionid = $_GET['id'];
    $id = mysql_real_escape_string($id);
    $questionid = mysql_real_escape_string($questionid);
 
            mysql_query("DELETE FROM `question` WHERE `id`=$id")or die (mysql_error());
            mysql_query("DELETE FROM `answer` WHERE `questionid` = $questionid")or die (mysql_error());
            header('Location:question.php');    
}


 



                  

        $instructor = $user_data['username'];
        $querymodule="SELECT DISTINCT `subjectcode` FROM `quiz` WHERE `instructor`= '$instructor'";
        
 
        $resultmodule = mysql_query($querymodule);
        while($row = mysql_fetch_assoc($resultmodule)){
            $subjectcode = $row['subjectcode'];
         
                 
            }
             
?>

<table WIDTH="900" class="table table-striped">
<tr>
    <th>Question</th>
    <th>Subject Code</th>
    <th>Instructor</th>
    <th>Type</th>
    <th>Marks</th>
    <th colspan="2" style="text-align:center">Action</th>
</tr>

<?php
 
$counter=0;
while ($counter < $numrows) {
 
$id = mysql_result($result,$counter,"id");
$questionid = mysql_result($result,$counter,"questionid");
$questionname = mysql_result($result,$counter,"question");
$questionname = strip_tags($questionname);
$subjectcode = mysql_result($result,$counter,"subjectcode");
$questiontype = mysql_result($result,$counter,"type");
$instructor = mysql_result($result,$counter,"instructor");
$questionweight = mysql_result($result,$counter,"weight");
 
if($questiontype == '1'){
    $questiontypetext = 'True or False';
}
elseif($questiontype == '2'){
    $questiontypetext = 'Multiple Choice';
}
elseif($questiontype == '3'){
    $questiontypetext = 'Blank Answer';
}
 
 
        echo '<tr>
        <td>'.$questionname.'</td>
        <td>'.$subjectcode.'</td>
        <td>'.$instructor.'</td>
        <td>'.$questiontypetext.'</td>
        <td>'.$questionweight.'</td>
        <td class="center"><a href="question.php?editid='.$id.'" class="linkedit">edit</a></td>
        <td class="center"><a onclick="return proceed()" href="question.php?del='.$id.'&id='.$questionid.'" class="linkdel">delete</a></td></tr>';
     
 
$counter++; 
}
 
?>
</table>

 
<?php
//Edit Question
if(isset($_POST['editquestion'])){
    $subjectcode = $_POST['subjectcodeedit'];
    $id = $_POST['editid'];
    $question = $_POST['question'];
    $questionid = $_POST['questionid'];
    $numrows = $_POST['numrows'];
    $iscorrect = $_POST['iscorrect'];
     
         
        mysql_query("UPDATE `question` SET `subjectcode`='$subjectcode' WHERE `questionid`='$questionid'")or die (mysql_error());
        mysql_query("UPDATE `question` SET `question`='$question' WHERE `questionid`='$questionid'")or die (mysql_error());
        mysql_query("DELETE FROM `answer` WHERE `questionid`='$questionid'")or die (mysql_error());
         
        $counter=0;
        while($counter<$numrows){
            $answer = $_POST['answer'.$counter.''];
                $counters = $counter + 1;
                 
                if(empty($answer)){
                    if(isset($iscorrect)){  
                        mysql_query("INSERT INTO `answer` (`questionid`,`answer`,`correct`) VALUES('$questionid','Answer Required $counters','0') ")or die (mysql_error());
                        mysql_query("UPDATE `answer` SET `correct` = '1' WHERE `questionid`='$questionid' AND `answer` = '$iscorrect'") or die(mysql_error());
                    }
                    header('Location:question.php');
                }
                else{
                    if(isset($iscorrect)){
                        mysql_query("INSERT INTO `answer` (`questionid`,`answer`,`correct`) VALUES('$questionid','$answer','0') ")or die (mysql_error());
                        if($iscorrect == 'answer_ba'){
                        mysql_query("UPDATE `answer` SET `correct` = '1' WHERE `questionid`='$questionid'") or die(mysql_error());
                        }
                        else{
                        mysql_query("UPDATE `answer` SET `correct` = '1' WHERE `questionid`='$questionid' AND `answer` = '$iscorrect'") or die(mysql_error());
                        }
                    }
                    header('Location:question.php');
                }
             
            $counter++;
        }
}




//get editid
if(isset($_GET['editid'])){
    $editid = $_GET['editid'];
     
    $query = "SELECT * FROM `question` WHERE `id`='$editid'";
    $result = mysql_query($query);
    $row = mysql_fetch_assoc($result);
    $questionid = $row['questionid'];
    $question = $row['question'];
    $type = $row['type'];

     
     
    ?>
</br>
</br>
    <form action="question.php" method="post">
    <tr><th colspan="2"><h2>Subject Code</h2> 
    <div class="col-md-2"><select name="subjectcodeedit" class="form-control">
    <?php 
    
    $instructor = $user_data['username'];
    $query = "SELECT DISTINCT `subjectcode` FROM `quiz` WHERE `instructor`= '$instructor'";


    $result = mysql_query($query);
    echo '<option>Private</option>';
    while($row= mysql_fetch_assoc($result)){
        $subjectcode = $row['subjectcode'];
        echo '<option>'.$subjectcode.'</option>';
        }
    ?>


    </select></div></td></tr>

    </th></tr>
    </br>
    </br>
    <tr><th colspan="2"><h2>Question</h2></th></tr>
    </br>

    <?php
    echo '<textarea class="form-control input-lg" name="question">'.$question.'</textarea></br>';
    //echo '<textarea rows="1" cols="1" name="questionweight">'.$questionweight.'</textarea></br>';
    echo '</br><h2>Answers</h2>';
    $query = "SELECT * FROM `answer` WHERE `questionid`='$questionid'";
    $result = mysql_query($query);
    $numrows = mysql_num_rows($result);
    $counter=0;
    while ($counter < $numrows) {
 
    $answer = mysql_result($result,$counter,"answer");
    $answerid = mysql_result($result,$counter,"answerid");
    $correct = mysql_result($result,$counter,"correct");
     
        if($type != 3){
                echo '</br></br><input type="radio" name="iscorrect" value="'.$answer.'" ';
                         
                        if($correct == '1'){
                            echo 'checked';
                        }
                 
                echo '>
                    <textarea rows="1" cols="30" name="answer'.$counter.'"';
                 
                    if($type == '1'){
                        echo 'readonly';
                    }
                 
                echo '>'.$answer.'</textarea>';
        }
        else if($type == 3){
                echo '<input type="hidden" name="iscorrect" value="answer_ba" />';
                     
                echo '<textarea rows="1" cols="30" name="answer'.$counter.'" >'.$answer.'</textarea>';
        }
         
        $counter++;
    }
     
    ?>
     </br>
     </br>
    <tr><td colspan="2">
    <input type="hidden" name="editid" value="<?php echo $editid; ?>" />
    <input type="hidden" name="numrows" value="<?php echo $numrows; ?>" />
    <input type="hidden" name="questionid" value="<?php echo $questionid; ?>" />

    <input type="submit" class="btn btn-default" name="editquestion" value="Save Changes"/></td></tr>
    </form>
    </div>
    </div>
</div>
    <?php
}
 
?>
 
</div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>