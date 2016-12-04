<?php
include 'db.inc.php';
// Connect to MySQL DBMS
if (!($connection = @ mysql_connect($hostName, $username,
  $password)))
  showerror();
// Use the foods database
if (!mysql_select_db($databaseName, $connection))
  showerror();

// sql to delete a record
$query = "DELETE FROM MyGuests WHERE id=3";

if (!($result = @ mysql_query($query, $conn))) {
    showerror();
} else {
    echo "Record deleted successfully";
}

mysqli_close($conn);
?>
