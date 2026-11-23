
<?php
include "config.php";

$sql = "SELECT * FROM local";
$result = $conn->query($sql);
?>

<html>
<head>
<title>View Page</title>
</head>

<body>

<h2>VIEW DATA</h2>

<table border="1" cellpadding="10">

<tr>
<th>Sl No</th>
<th>Name</th>
<th>Email</th>
<th>Password</th>
</tr>

<?php
if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {
?>

<tr>
<td><?php echo $row['slno']; ?></td>
<td><?php echo htmlspecialchars($row['name']); ?></td>
<td><?php echo htmlspecialchars($row['email']); ?></td>
<td><?php echo htmlspecialchars($row['password']); ?></td>
</tr>

<?php
    }

} else {
    echo "<tr><td colspan='4'>No records found</td></tr>";
}
?>

</table>

<br>

<a href="reg.php">Back to Registration</a>

</body>
</html>
