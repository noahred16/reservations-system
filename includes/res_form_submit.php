<?php
  require '../includes/dbh.php';

  



  $res_date = $_POST['res_date'];
  $res_court = $_POST['res_court'];
  $res_time = $_POST['res_time'];
  $res_dur = $_POST['res_dur'];
  $res_memid = $_POST['res_memid'];

  $time = $res_time;
  $time2 = $res_dur;

  $secs = strtotime($time2)-strtotime("00:00:00");
  $end_time = date("H:i:s",strtotime($time)+$secs);

  // echo $_POST['res_date'] ."<br />";
  // echo $_POST['res_court'] ."<br />";
  // echo $_POST['res_time'] ."<br />";
  // echo $_POST['res_dur'] ."<br />";
  // echo $_POST['res_memid']."<br />";
  // echo $end_time;



  // echo "==============================<br />";
  // echo "All Data Submitted Successfully!";

  // $res_fname = $_POST['res_fname'];
  // $res_lname = $_POST['res_lname'];
  
  // INSERT INTO reservations (date, court, start_time, end_time, duration, res_member_id) VALUES ('2020-09-20', '1', '08:00:00', '10:00:00', '02:00:00', '1234')
  
  
  $sql = "INSERT INTO reservations (date, court, start_time, end_time, duration, res_member_id) VALUES (?, ?, ?, ?, ?, ?);";

  $stmt = mysqli_stmt_init($conn);

  if (!mysqli_stmt_prepare($stmt, $sql)) {
      echo 'Error adding reservation';
  }
  else {
      mysqli_stmt_bind_param($stmt, "sisssi", $res_date, $res_court, $res_time, $end_time, $res_dur, $res_memid);
      mysqli_stmt_execute($stmt);
      echo 'Reservation added!';
  }
  mysqli_stmt_close($stmt);
  mysqli_close($conn);
?>