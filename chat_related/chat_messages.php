<?php
  include("ConnectDatabase.php");

  $sql = 'SELECT * FROM chat';
  $sql = 'SELECT * FROM user Order BY user_id';
  //get result accoriding to the query
  $result = mysqli_query($connect,$sql);
  $result = mysqli_query($connect,$usersql);
  /*
  SELECT * FROM chat
  WHERE user_id = user.user_id
  ORDER BY last_message_time
   */

  //fetch the result into the aoociative array format
  $chatinfo = mysqli_fetch_all($result,MySQLI_ASSOC);
  $userinfo = mysqli_fetch_all($result,MySQLI_ASSOC);

  //get certain userID and data
  /*

   */
  //output chatlist
  /*code skeleton of output Chatlist
  <?php forreach($chattinfo as chat){
    if(chat["userID"] == userID)

<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="device-width, initial-scale = 1">
<title>Forum skeleton</title>
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/main.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<style>
body {
  margin: 0;
  font-size: 17px;
  font-family: Arial, Helvetica, sans-serif;
}

.header {
  position: fixed;
  top: 0;
  z-index: 1;
  width: 100%;
  background-color: #f1f1f1;
}

.header1 {
  position: fixed;
  padding: 4px;
  text-align: center;
  color: aliceblue;
  z-index: 1;
  width: 100%;
  height: 30px;
  background-color: #5a924c;
}

.time-right {
  float: right;
  color: #aaa;
}

.container1 {
  border: 2px solid #A2E2F1;
  background-color: #B8E8F3;
  border-radius: 5px;
  padding: 10px;
  width: 100%;
  margin: 10px 10px;
  opacity: 0.8;
}

.container1:hover {
  opacity: 1;
}

.container1::after {
  content: "";
  clear: both;
  display: table;
}

.content1 {
  padding: 50px 0px;
  margin: 2px auto 2px auto;
  width: 90%;
}

.avatarname {
  float: left;
}

.msg {
  float: none;
}

.btn1 {
  float: left;
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 10px 5px 22px 5px;
  border: none;
  cursor: pointer;
  width: 10%;
  margin-bottom:10px;
  opacity: 0.8;
  text-align:center;
}

.btn1:hover {
  opacity: 1;
}

</style>
</head>
<body>

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <a href="#" class="navbar-brand">AcadMap</a>
    <div class="container-fluid">
      <ul class="nav navbar-nav">
        <li><a href="#">Forum</a></li>
        <li><a href="#">Chat</a></li>
        <li><a href="#">Consultation</a></li>
        <input type="text" placeholder="Search..">
        <li><a href="#">Welcome, User!</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="header1">
  <p>--- WELCOME ---- TO ---- CHATROOM ---</p>
</div>

<div class="content1">
<div id="1" class="container1" onclick="pagetrans()">
  <img class="avatarname" src="../assets/avatar.png" alt="Avatar1" height="30" width="30">
  <h4> Avatar1</h4>
  <p>last msg</p>
  <span class="time-right">time1</span>
</div>

<div id="2" class="container1" onclick="pagetrans()">
  <img class="avatarname" src="../assets/avatar.png" alt="Avatar2" height="30" width="30">
  <h4> Avatar2</h4>
  <p>last msg</p>
  <span class="time-right">time2</span>
</div>

<div id="3" class="container1" onclick="pagetrans()">
  <img class="avatarname" src="../assets/avatar.png" alt="Avatar3" height="30" width="30">
  <h4> Avatar3</h4>
  <p>last msg</p>
  <span class="time-right">time3</span>
</div>

<div id="4" class="container1" onclick="pagetrans()">
  <img class="avatarname" src="../assets/avatar.png" alt="Avatar4" height="30" width="30">
  <h4> Avatar4</h4>
  <p>last msg</p>
  <span class="time-right">time4</span>
</div>

<div id="5" class="container1" onclick="pagetrans()">
  <img class="avatarname" src="../assets/avatar.png" alt="Avatar5" height="30" width="30">
  <h4> Avatar5</h4>
  <p>last msg</p>
  <span class="time-right">time5</span>
</div>

</div>

<script>
// When the user scrolls the page, execute myFunction 
window.onscroll = function() {myFunction()};
function myFunction() {
  var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
  var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
}
</script>

</body>
</html>
