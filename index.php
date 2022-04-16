<!DOCTYPE html>
<?php
  require_once 'database.php';
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Chad's Cave</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
<!--Comments
    Comments goes here
-->
    <?php
      $sql = "select * from users";
      $result = mysqli_query($conn, $sql);
      $rowCount = mysqli__num_rows($result);

      if($rowCount>0){
        while($row=mysqli_fetch_assoc($result)){
          echo $row['firstname'] . "<br>";
        }
      }else{
        echo "No results found!";
      }

     ?>
      </body>
</html>
