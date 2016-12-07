<?php  
 $connect = mysqli_connect("localhost", "root", "", "futbola-liga");  
 $id = $_POST["id"];  
 $text = $_POST["text"];  
 $column_name = $_POST["column_name"];  
 $sql = "UPDATE players SET ".$column_name."='".$text."' WHERE id='".$id."'";  
 if(mysqli_query($connect, $sql))  
 {  
      echo 'Dati atjaunoti';  
 }  
 ?>  