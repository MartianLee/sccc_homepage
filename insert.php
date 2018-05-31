
<?php
   $link = mysqli_connect("127.0.0.1", "root", "sccc2016!", "db" );
   if ( !$link ){
      echo "Error: Unable to connect to MYSQL. ".PHP_EOL;
      echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
      echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
      exit;
   }
 
 
   $num = $_GET["num"];
   $sql = "insert into data (num) values ($num)";
   $result = $link->query($sql);
 
   if(!$result){
      printf("Error: %s\n", $link->error);
   }
 
   mysqli_close($link);
?>
