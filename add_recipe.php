<?php
include 'db.inc.php';
// Connect to MySQL DBMS
if (!($connection = @ mysql_connect($hostName, $username,
  $password)))
  showerror();
// Use the foods database
if (!mysql_select_db($databaseName, $connection))
  showerror();

$query = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";

if (!($result = @ mysql_query($query, $conn))) {
    showerror();
} else {
    echo "New record created successfully";
}

mysql_close($conn);
?>
