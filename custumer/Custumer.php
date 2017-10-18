 <!DOCTYPE html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$databale = "quanlyhoso";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $databale);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
<html>
<head>
<style>
table, td, th {
    border: 1px solid black;
}

table {
    border-collapse: collapse;
    width: 100%;
}

th {
    height: 50px;
}
</style>
</head>
<body>


<h1>Custumer</h1>
<?php
$sql = "SELECT ID, Name, Address, Email FROM hosonhanvien";

?>
<table>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Address</th>
    <th>Email</th>
  </tr>
  <?php
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
  ?>
    <td><?php echo $row["ID"] ?></td>
    <td><?php echo $row["Name"]?></td>
    <td><?php echo $row["Address"]?></td>
    <td><?php echo $row["Email"]?></td>
  </tr>
</table>

<?php
  }
}
?>

</body>
</html> 