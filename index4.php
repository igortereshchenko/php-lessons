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


<table >
  <tr>
    <th>Firstname</th>
    <th>Lastname</th> 
    <th>Age</th>
  </tr>  
  
<?php
for ($i = 0; $i < 10; $i++) 
{
   echo "<tr>"; 
   
   for ($j = 0; $j < 3; $j++) {
	   echo "<th> info </th>";
   }
   
   echo "/<tr>"; 
} 
?>
  
  
  
</table>

</body>
