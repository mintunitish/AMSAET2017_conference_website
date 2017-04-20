<?php
require("connection.php");
$query="SELECT * FROM uid_management";
$result=mysqli_query($con,$query);
while($r=mysqli_fetch_array($result))
{
  mkdir("paperul/".$r[1],0777);
  echo "Creating folder name ".$r[1];
  echo "<br>";
}

echo "<h1>DONE</h2>";

?>
