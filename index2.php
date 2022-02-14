<?php
echo "List Table Users:";
$conn = mysqli_connect("172.20.0.3", "root", "test123","Trucorp");
if (!$conn){
	echo "Error CONNECT";
	exit;
}
mysqli_select_db($conn,"Trucorp");

$result = mysqli_query($conn,"SELECT * FROM users");

echo "<table style='border: 1px solid black;'>";
while($row = mysqli_fetch_array($result)){

echo "<tr><td style='border: 1px solid black;'>" . htmlspecialchars($row['ID']) . "</td><td style='border: 1px solid black;'>" . htmlspecialchars($row['Nama']) . "</td><td style='border: 1px solid black;'>" . htmlspecialchars($row['Alamat']) . "</td><td style='border: 1px solid black;'>" . htmlspecialchars($row['Jabatan']) . "</td></tr>";  
}

echo "</table>"; 

mysqli_close($conn); 

?>
