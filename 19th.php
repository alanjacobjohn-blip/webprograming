
<!DOCTYPE html>
<html>
<body>

<h1>Registration Form</h1>

<form action="" method="POST">

    Username:
    <input type="text" name="username">
    <br><br>

    Email:
    <input type="email" name="email">
    <br><br>

    Password:
    <input type="password" name="pass">
    <br><br>

    Confirm Password:
    <input type="password" name="cpass">
    <br><br>

    <input type="submit" name="submit" value="Register">

</form>

<?php

if (isset($_POST['submit'])) {

    // Check empty fields
    if (
        empty($_POST['username']) ||
        empty($_POST['email']) ||
        empty($_POST['pass']) ||
        empty($_POST['cpass'])
    ) {
        die("Please fill all required fields!");
    }

    // Validate email
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        die("Please enter a valid email address!");
    }

    // Check password length
    if (strlen($_POST['pass']) < 8) {
        die("Password must contain at least 8 characters!");
    }

    // Check password matching
    if ($_POST['pass'] != $_POST['cpass']) {
        die("Password and confirm password should match!");
    }

    // Success message
    echo "Registration successful!";
}

?>

</body>
</html>
