<?php
include 'connect.php';

$category = $_REQUEST['cat'];
$text = $_REQUEST['text'];
$date = $_REQUEST['taskdate'];
$complete = $_REQUEST['complete'];

if ($complete == '' || $complete == null){
  $complete = 0;
}

$sql = "INSERT INTO task (task_category, task_text, task_date, task_complete) VALUES ";
$sql .= "('" . $category . "',";
$sql .= "'" . $text . "',";
$sql .=  "'" . $date . "',";
$sql .= "'" .$complete . "')";


//print $sql;
if(mysqli_query($conn, $sql)){
  print ("Stored");
} else {
  print("Failed");
}

echo "<script>location.href='index.php'</script>";
 ?>
