<?php 
include('include/dbcon.php');
if (isset($_POST['submit'])){
$note=$_POST['note'];
$title=$_POST['title'];
$subject=$_POST['subject'];
mysql_query("insert into notes (title,subject,note)
 values('$title','$subject','$note')")or die(mysql_error());
 
 
header('location:notes.php');
}
?>	