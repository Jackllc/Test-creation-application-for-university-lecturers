<?php
/* pChart library inclusions */
include("pChart/class/pDraw.class.php");
include("pChart/class/pImage.class.php");
include("pChart/class/pData.class.php");

/* Create and populate the pData object */
$subjectcode = $_POST ['button1'];
$MyData = new pData();  

$db = mysql_connect("localhost", "root", "");
mysql_select_db("quiz",$db);

$Requete = "SELECT * FROM `score` WHERE subjectcode = '$subjectcode' ORDER BY correct_percent ASC";
$Result  = mysql_query($Requete,$db);
while($row = mysql_fetch_array($Result))
 {
 	/* Get the data from the query result */
  $correct_percent = $row["correct_percent"];
  $full_name = $row["full_name"];

  /* Save the data in the pData array */
  $MyData->addPoints($correct_percent,"Percentage %");
  $MyData->setAxisName(0,"Score %");

  $MyData->addPoints($full_name,"Labels");
  $MyData->setSerieDescription("Labels","Users");
  $MyData->setAbscissa("Labels");
 }

/* Create the pChart object */
$myPicture = new pImage(1024,720,$MyData);

/* Write the chart title */ 
$myPicture->setFontProperties(array("FontName"=>"pChart/fonts/verdana.ttf","FontSize"=>8));
/* Set the default font */

/* Define the chart area */
$myPicture->setGraphArea(100,50,900,600);

/* Draw the scale */
$scaleSettings = array("XMargin"=>0,"YMargin"=>10,"Floating"=>TRUE,"GridR"=>100,"GridG"=>100,"GridB"=>100,"CycleBackground"=>TRUE);
$myPicture->drawScale($scaleSettings);

/* Turn on Antialiasing */
$myPicture->Antialias = TRUE;
$myPicture->setShadow(TRUE,array("X"=>1,"Y"=>1,"R"=>0,"G"=>0,"B"=>0,"Alpha"=>10));

/* Write the chart legend */
$myPicture->drawLegend(580,10,array("Style"=>LEGEND_NOBORDER,"Mode"=>LEGEND_HORIZONTAL));
$myPicture->drawPlotChart();
$myPicture->Stroke();

?>
