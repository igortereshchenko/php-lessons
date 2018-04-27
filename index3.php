
<?php
echo "Hello <br>";
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

