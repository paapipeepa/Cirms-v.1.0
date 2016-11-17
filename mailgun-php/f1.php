<form class="modal-content animate" action="forgotmail.php" method="post">
    <div class="imgcontainer">
      <b>Enter your Credentials</b>
    </div>
<div class="count">
      <label><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>
      <br>
      <br>
      <label><b>Email</b></label>
      <input type="text" placeholder="Enter Email Address" name="ps" required>
       <br><br> 
      <button class="button button3" type="submit">Submit</button> 
      <input type="checkbox" checked="checked"> Remember me</input>
    </div>
    <style>
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
</form>