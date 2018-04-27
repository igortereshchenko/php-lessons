<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
</head>


<body>

<?php
$servername = "127.0.0.1";
$username = "root";
$password = "mysql";
$dbname = "Lesson";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully <br>";

$sql = "SELECT Email, Firstname,  Lastname FROM Person";
$result = $conn->query($sql);

$conn->close();

?>


<table class="table table-striped table-hover table-bordered">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody> 
  
  
  
		<?php
		
		
		if ($result->num_rows > 0) {
			// output data of each row
			while($row = $result->fetch_assoc()) {
				echo "<tr>". 
						"<td>".
							$row["Firstname"].
						"</td>".							
						"<td>".
							$row["Lastname"].
						"</td>".							
						"<td>".
							$row["Email"].
						"</td>".							
					"/<tr>"; 
			}
		} 
		
		
		?>
		
    </tbody>
  </table>

</body>
