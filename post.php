<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="mystyle.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    <meta charset="utf-8">
     
    <title>Login</title>
    <script src="script.js"></script>
  </head>
  
  
  <body>
  <?php
      $servername = "000.000.000.000";
      $username = "why";
      $password = "because fuck you";
      $dbname = "thats why";
      
      // Create connection
      $conn = new mysqli($servername, $username, $password,$dbname);
      
      // Check connection
      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      }
      echo "This page is unavailable at the moment.";

      
      $aa = $_POST['a'];
      $bb = $_POST['b'];


      $sql = "INSERT INTO table01 VALUES ('$aa', '$bb');";
      $result = $conn->query($sql);

      
    $conn->close();

    ?>

</body>
</html>