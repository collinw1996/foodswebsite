<html>
<head>
<link rel="stylesheet" href="PHP Styling.css"/>
<title>Foods By Type</title>
</head>
<body>
<div id="main">
<?php if(!empty($_POST['type'])) {
 echo "<table border=1>
 <tr><th>ID</th><th>Type</th><th>Recipe</th><th>Rating</th>
 <th>Price</th></tr>";
 include 'db.inc.php';
 // Connect to MySQL DBMS
 if (!($connection = @ mysql_connect($hostName, $username,
 $password)))
 showerror();
 // Use the foods database
 if (!mysql_select_db($databaseName, $connection))
 showerror();
 // Create SQL statement
 $type = $_POST['type'];
 $query = "SELECT * FROM foods WHERE type='$type'";
 // Execute SQL statement
 if (!($result = @ mysql_query ($query, $connection)))
 showerror();
 // Display results
 while ($row = @ mysql_fetch_array($result))
 echo "<tr><td>{$row["id"]}</td>
 <td>{$row["type"]}</td>
 <td>{$row["recipe"]}</td>
 <td>{$row["rating"]}</td>
 <td>{$row["price"]}</td></tr>";
 echo "</table>";
 } ?>
 </div>
 </body>
</html>
