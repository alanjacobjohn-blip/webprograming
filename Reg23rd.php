
<?php
include "config.php";

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    if (empty($name) || empty($email) || empty($_POST['password'])) {
        echo "Please fill all fields!";
    }
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email address!";
    }
    else {

        $sql = "INSERT INTO local (name, email, password)
                VALUES (?, ?, ?)";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $name, $email, $password);

        if ($stmt->execute()) {
            echo "New record created successfully";
        }
        else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    }
}
?>

<html>
<body>

<h2>Signup Form</h2>

<form action="" method="POST">

<fieldset>
<legend>Personal Information</legend>

First Name:<br>
<input type="text" name="name">
<br><br>

Email:<br>
<input type="email" name="email">
<br><br>

Password:<br>
<input type="password" name="password">
<br><br>

<input type="submit" name="submit" value="Submit">
<br><br>

<a href="view.php">VIEW DATA</a>

</fieldset>
</form>

</body>
</html>
