<!-- 
PROGRAM chatp.php - store the message to the server and update the page of chatroom
PROGRAMMER: Chung Tsz Ting 115511028
CALLING SEQUENCE: 
- chatrooms.php -> submit button -> chatp.php -> chatrooms.php
Where 'submit' button in chatrooms.php 
 -->
<?php
  session_start();
  $servername = "localhost";
  $username = "root";
  $password = "";

  // Create connection
  $conn = new mysqli($servername, $username, $password, 'AcadMap');

  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  $crmid = $_SESSION["crmid"]; 
  $cmt=$_GET['msg'];

  $name = $_SESSION['username'];
  $time = date("Y-m-d H:i:s");
  $conrm = 0;

  $commentsql = "INSERT INTO chat (chatroom_id, message, message_date_time, sender_name, consultroom, msg_type)
                  VALUES ('$crmid','$cmt','$time','$name','0','normal')";

  if (mysqli_multi_query($conn, $commentsql)) {
    echo "New records created successfully";
  } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
  header("Location: {$_SERVER["HTTP_REFERER"]}#bottom");
  // echo "<script>
  // history.go(-1);
  // </script>";
?>