<?php
include 'connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (isset($_POST['attendance'])) {
    $attendance = $_POST['attendance'];
    foreach ($attendance as $aid => $status) {
      $sql = "UPDATE tbl_attend SET status = '$status' WHERE aid = '$aid'";
      mysqli_query($conn, $sql);
    }
  }
  
}
?>
