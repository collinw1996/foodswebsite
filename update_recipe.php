<?php
include 'db.inc.php';
// Connect to MySQL DBMS
if (!($connection = @ mysql_connect($hostName, $username,
  $password)))
  showerror();
// Use the foods database
if (!mysql_select_db($databaseName, $connection))
  showerror();

$sql = "UPDATE MyGuests SET lastname='Doe' WHERE id=2";

if (!($result = @ mysql_query($query, $conn))) {
    showerror();
} else {
    echo "Record updated successfully";
}

mysqli_close($conn);
?>
