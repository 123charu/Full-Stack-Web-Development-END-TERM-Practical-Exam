<?php
    session_start();
            echo"<Center>"."<b>Employee Details</b>"."<br>";
            echo"Emp No:".$_SESSION['eno']."<br>";
            echo"Emp name:".$_SESSION['name']."<br>";
            echo"Address:".$_SESSION['addr']."<br>"."<hr>";
			echo"Address:".$_SESSION['mob']."<br>"."<hr>";
            

 ?>