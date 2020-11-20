<?php
$host = 'localhost';
$username = 'lab5_user';
$password = 'password123';
$dbname = 'world';
$country = $_GET['country'];
$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);

$stmt = $conn->query("SELECT * FROM countries WHERE name LIKE '%$country%'");
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo "<table border ='1' style='background-color:#FFFFFF;border-collapse:collapse;border:2px solid #6699FF;color:#000000;width:400'>";
echo "<tr><th>Name". "</th>". "<th>Continent". "</th>". "<th>Independence". "</th>". "<th>Head of State". "</th></tr>";
foreach ($results as $row){   //Creates a loop to loop through results
  echo "<tr><td>" . $row['name']. "</td>". "<td>". $row['continent']. "</td>". "<td>". $row['independence_year']. "</td>". "<td>". $row['head_of_state']. "</td></tr>";
  }
echo "</table>"; //Close the table in HTML



/*
?>
<table>
<?php foreach ($results as $row): ?>
  <li><?= $row['name']. $row['continent']. $row['independence_year']. $row['head_of_state']; ?></li>
<?php endforeach; ?>
</table>
*/
