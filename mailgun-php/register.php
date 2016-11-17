<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<style>
form {
    border: 3px solid #f1f1f1;
}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #008cba;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
    .button3 {
            background-color: #008cba;
            border: none;
            color: white;
            text-decoration: none;
            display: inline-block;
            font-size: 16px; 
            margin: 0px 20px;
            cursor: pointer;
          }
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
.count {
    padding: 16px;
}
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}
</style>
<body>

<h2 class="count" style="text-align: center">Change your Password</h2>

<form class="modal-content animate" action="verify.php" method="post">
  <div class="count">
    <label><b>Password From the mail</b></label>
    <input type="text" placeholder="Enter Password received" name="oldpsw" required>

    <label><b>New Password</b></label>
    <input type="text" placeholder="Enter New Password" name="newpsw" required>

    <label><b>Type it again</b></label>
    <input type="text" placeholder="Confirm Password" name="confpsw" required>
        
    <button type="submit" >Submit</button>
    <input type="checkbox" checked="checked"> Remember me
  </div>

 
</form>

</body>
</html>
