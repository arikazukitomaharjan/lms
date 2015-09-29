<?php include('session.php'); ?>
<?php 
include('include/dbcon.php');
if (isset($_POST['submit'])){
$id=$_POST['id'];
$title=$_POST['title'];
$subject=$_POST['subject'];
$note=$_POST['note'];

/* $date_receive=$_POST['date_receive'];
$date_added=$_POST['date_added']; */
$status=$_POST['status'];




mysql_query("update book set title='$title',note_id='$note_id',subject='$subject'
,note = '$note' where note_id='$id'")or die(mysql_error());
								
								
 header('location:notes.php');
}
?>	