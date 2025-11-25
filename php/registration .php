<!DOCTYPE html>
<html>
<head>
<title>Registration Form</title>
</head>

<body bgcolor="lavender">

<h1>REGISTRATION FORM</h1>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["Name"];
    $email = $_POST["Email"];
    $password = $_POST["Password"];
    $phone = $_POST["Phone"];
    $gender = isset($_POST["gender"]) ? $_POST["gender"] : "";

    if ($name == "" || $email == "" || $password == "" || $phone == "" || $gender == "") {
        echo "Please fill all fields!<br>";
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email!<br>";
    } else if (!preg_match('/^[0-9]{10}$/', $phone)) {
        echo "Phone must be 10 digits!<br>";
    } else if (strlen($password) < 6) {
        echo "Password must be 6 characters!<br>";
    } else {
        echo "Form submitted successfully!<br>";
    }
}
?>

<form method="post">

Name: <input type="text" name="Name"><br><br>

Email: <input type="text" name="Email"><br><br>

Password: <input type="password" name="Password"><br><br>

Phone: <input type="text" name="Phone"><br><br>

Address: <textarea name="Address"></textarea><br><br>

Course:
<select name="course">
  <option>MCA</option>
  <option>MBA</option>
  <option>B.Tech</option>
  <option>CS</option>
</select><br><br>

Gender:
<input type="radio" name="gender" value="Male">Male
<input type="radio" name="gender" value="Female">Female
<input type="radio" name="gender" value="Other">Other
<br><br>

<input type="submit" value="Submit">
<input type="reset" value="Reset">

</form>

</body>
</html>

