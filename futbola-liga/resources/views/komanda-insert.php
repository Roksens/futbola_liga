<?php  
 $connect = mysqli_connect("localhost", "root", "", "futbola-liga");  
 $sql = "INSERT INTO teams(nosaukums, atrasanas_vieta, dibinasanas_datums, apraksts) VALUES('".$_POST["nosaukums"]."', '".$_POST["atrasanas_vieta"]."', '".$_POST["dibinasanas_datums"]."', '".$_POST["apraksts"]."')";  
 if(mysqli_query($connect, $sql))  
 {  
      echo 'Dati ievietoti';  
 }  
 ?>  