<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php


$fullname = $_POST["fullname"];
$username = $_POST["username"];
$pass = $_POST["password"];
$con_pass = $_POST["confirm-password"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$dob = $_POST["date"];

$logUsername = $_POST["logUsername"];
$logPass = $_POST["logPassword"];


echo "Registration: ";
echo "<br>";
echo "Name: " .$fullname;
echo "<br>";
echo "Username: " .$username;
echo "<br>";
echo "Password: " .$pass;
echo "<br>";
echo "Confirm Password: " .$con_pass;
echo "<br>";
echo "Email: " .$email;
echo "<br>";
echo "Phone Number: " .$phone;
echo "<br>";
echo "Date of birth: " .$dob;
echo "<br>";
echo "<br>";

echo "Username: " .$logUsername;
echo "<br>";
echo "Password " .$logPass;


?>
</body>
</html>