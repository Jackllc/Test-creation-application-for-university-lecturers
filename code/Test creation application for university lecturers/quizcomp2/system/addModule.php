<?php
include 'connect.php';
include 'core.php';

if(logged_in()){
	$session_user_id = $_SESSION['user_id'];
  //User data for the session of logged in user
	$user_data = user_data($session_user_id, 'id','username','firstname','lastname','type');
?>





<?php
//Gather posted form data and insert into the correct columns in the module table
if(isset($_POST['addmoduledata'])){
	$instructor = $user_data['username'];
	$modulename = $_POST['modulename'];
	$modulecode = $_POST['modulecode'];
	$moduleinst = $_POST['instructor'];
  $modulename = mysql_real_escape_string($modulename);
  $modulecode = mysql_real_escape_string($modulecode);

      if(empty($modulename) || empty($modulecode)){
      header('Location:addModule.php?ThoseFieldsAreRequired!');
    }
    else {

	     //Create module
				mysql_query("INSERT INTO `module` (`id`, `modulename`, `modulecode`, `instructor`) VALUES
				('', '$modulename', '$modulecode', '$instructor')")or die (mysql_error());
				header('Location:module.php');
      }
}
	$userstatus = 'Instructor';
?>






<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Module</title>
 
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

<div id="itemmodule">
<?php
      //Create module form
			echo '<form action="addModule.php" method="post">		
			      <table align="center"><tr><td>Module Name: </td><td><input type="text" class="form-control input-sm" name="modulename" maxlength="100" /></td></tr>
		      	<tr><td>Module Code: </td><td><input type="text" class="form-control input-sm" name="modulecode" maxlength="100" /></td></tr>
			      </table></br>
			      <table align="center"><tr><td colspan="2"><input type="submit" value="Add Module" class="btn btn-lg btn-default" name="addmoduledata"/></td></tr></table>
			      <input type="hidden" name="addmod" value="">
			      </form>';	
?>


</br>
</br>
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