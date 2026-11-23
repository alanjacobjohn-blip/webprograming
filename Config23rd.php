
<?php
$mysql_host = "localhost";
$mysql_user = "root";
$mysql_password = "";

$conn = mysqli_connect(
    $mysql_host,
    $mysql_user,
    $mysql_password,
    "22mca007"
);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully";
?>
