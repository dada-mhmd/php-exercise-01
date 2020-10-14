<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  
  <div class="first-div">
    <h1>Regisration</h1>
  </div>

<div class="wrapper">
  <div id="reg-form">
  <form method="post" action="safe.php">
    <label for="full-name"><b>Full name</b></label>
    <input type="text" id="full-name" name="fullname" placeholder="Full name" required>

    <label for="user-name"><b>User name</b></label>
    <input type="text" id="user-name" name="username" placeholder="Username" required>

    <label for="pass"><b>Password</b></label>
    <input type="password" id="pass" name="password" placeholder="Password" required>

    <label for="con-pass"><b>Confirm Password</b></label>
    <input type="password" id="con-pass" name="confirm-password" placeholder="confirm Password" required>

    <label for="email1"><b>Email</b></label>
    <input type="email" id="email1" name="email" placeholder="Email" required>

    <label for="phone"><b>Phone number</b></label>
    <input type="tel" id="phone" name="Phone" placeholder="Phone number" required>

    <label for="dob"><b>Date of birth</b></label>
    <input type="date" id="dob" name="date" placeholder="Date of birth" required>

    <input type="submit" name="submit" value="submit">
  </form>
  </div>


  <div class="second-div">
  <h2>Login</h2>
  </div>

  <div id="login-form">
  <form method="post" action="safe.php">
    <label for="usrname"><b>Username</b></label>
    <input type="text" id="usrname" name="logUsername" placeholder="Username" required>

    <label for="pass1"><b>Password</b></label>
    <input type="password" id="pass1" name="logPassword" placeholder="Password" required>

    <input type="submit" name="submit" value="submit">
  </form>
  </div>
</div>

 

</body>
</html>