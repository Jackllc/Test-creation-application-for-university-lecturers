<?php
/*
* Author : Ali Aboussebaba
* Email : bewebdeveloper@gmail.com
* Website : http://www.bewebdeveloper.com
* Subject : Dynamic Drag and Drop with jQuery and PHP
*/

// including the config file
include('config.php');
$subcode = $_POST ['button'];
$pdo = connect();
// select all items ordered by item_order
$sql = "SELECT * FROM question WHERE subjectcode = '$subcode' ORDER BY item_order ASC";
$query = $pdo->prepare($sql);
$query->execute();
$list = $query->fetchAll();
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/style1.css" />
<script type="text/javascript" src="js/jquery-1.10.2.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.10.4.custom.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
</head>
<h2>Sort Question Order for <?php echo $subcode; ?></h2>
</br></br>
<body>
    <div class="container">
        <div class="content">

        <ul id="sortable">
            <?php
            foreach ($list as $rs) {
            ?>
            <li id="<?php echo $rs['id']; ?>">
                <span></span>
                <div><h2><?php echo $rs['question']; ?></h2></div>
            </li>
            <?php
            }
            ?>
        </ul>
        </div>  
    </div>
</br>
</br>
<FORM METHOD="LINK" ACTION="quizzes.php">
<INPUT TYPE="submit" VALUE="Submit">
</FORM>
</body>
</html>
