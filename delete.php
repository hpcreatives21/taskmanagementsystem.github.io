<?php
include 'connect.php';

$id = $_REQUEST['id'];

$sql = "DELETE FROM task WHERE task_id = '" . $id . "'";
if(mysqli_query($conn, $sql)){
  print ("Stored");
} else {
  print("Failed");
}

echo "<script>location.href='index.php'</script>";


?>
