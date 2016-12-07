<?php  
 $connect = mysqli_connect("localhost", "root", "", "futbola-liga");  
 $sql = "INSERT INTO players(vards, uzvards, personas_kods, komanda, vecums, augums, svars) VALUES('".$_POST["vards"]."', '".$_POST["uzvards"]."', '".$_POST["personas_kods"]."', '".$_POST["komanda"]."', '".$_POST["vecums"]."', '".$_POST["augums"]."', '".$_POST["svars"]."')";  
 if(mysqli_query($connect, $sql))  
 {  
      echo 'Dati ievietoti';  
 }  
 ?>  