<?php

include("includes/config.php"); //connecting database
$_SESSION['username'] == "";  //SESSION 

$date = date("Y-m-d h:i:s");  //date 
$query = $con->query("UPDATE userlog SET logout = '$date' WHERE username = '".$_SESSION['username']."'");
$_SESSION['errmsg']="You have successfully logout";

session_unset();  //session unset
session_destroy(); //session destroy

?>



<script language="javascript">
document.location="login.php";
</script>