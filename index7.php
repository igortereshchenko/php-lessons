<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
</head>


<body>

<?php
echo 'Hello <br>';
?>

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


$sql = "INSERT INTO Person (Email, Firstname, Lastname)
VALUES ('john@example.com','John', 'Doe')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully <br>";
} else {
    echo "Error <br>";
}

$conn->close();
?>



</body>
