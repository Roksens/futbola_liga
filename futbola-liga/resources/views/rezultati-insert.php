<?php  
 $connect = mysqli_connect("localhost", "root", "", "futbola-liga");  
 $sql = "INSERT INTO results(komanda_a, rezultats_a, komanda_b, rezultats_b) VALUES('".$_POST["komanda_a"]."', '".$_POST["rezultats_a"]."', '".$_POST["komanda_b"]."', '".$_POST["rezultats_b"]."')";  
 if(mysqli_query($connect, $sql))  
 {  
      echo 'Dati ievietoti';  
 }  
 ?>  