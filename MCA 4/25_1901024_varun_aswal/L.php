<?php
session_start();
$_SESSION['eno']=$_POST['eno'];
$_SESSION['name']=$_POST['name'];
$_SESSION['addr']=$_POST['addr'];
$_SESSION['']=$_POST['mob'];
echo"Hello ".$_SESSION['name']."<br>";
?>
<form method="POST" action="display.php">

<input type=submit value=Display>
</form>