<?php

    include_once 'includes/dbconnect.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ismail Helali</title>
</head>
<body>

<p>Post in the Wall</p>

    <form  action="includes/postemail.php" method="POST">
        <input type="Text" name="email" >
        <button type="submit" name="submit">Post it</button>
    </form>


    <?php

$sql = "SELECT `Email` FROM `email`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  
  while($row = $result->fetch_assoc()) {
    
    echo $row["Email"]. "<hr>"."<br>";

  }
} else {
  echo "0 results";
}
$conn->close();

?>

   

 
</body>
</html>