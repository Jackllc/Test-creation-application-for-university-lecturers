<?php 

			if(mysql_connect('localhost','root','')){
					if(!mysql_select_db('quiz')){
						header('Location:index.php');
					} 
				}
			else{
					header('Location:index.php');
				}
 ?>