<?php
  $servername = "localhost";
  $username = "root";
  $password = "";

  // Create connection
  $conn = new mysqli($servername, $username, $password, 'AcadMap');

  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
  $crmid = '1'; //parse from url?

  $cmt=$_GET['msg'];
  if($_SESSION['signed_in']){
    $name = $_SESSION['user_name'];
  }
  else{
    $name = "Admin1"; //delete this
    //error die("Cannot identity user account");
  }
  $time = date("Y-m-d H:i:s");
  $conrm = 0;

  $commentsql = "INSERT INTO chat (chatroom_id, message, message_date_time, sender_name, consultroom, msg_type)
                  VALUES ('$crmid','$cmt','$time','$name','0','normal')";

  if (mysqli_multi_query($conn, $commentsql)) {
    echo "New records created successfully";
  } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  header("Location: {$_SERVER["HTTP_REFERER"]}");
?>