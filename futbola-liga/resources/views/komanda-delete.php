 <?php  
 $connect = mysqli_connect("localhost", "root", "", "futbola-liga");  
 $sql = "DELETE FROM Teams WHERE id = '".$_POST["id"]."'";  
 if(mysqli_query($connect, $sql))  
 {  
      echo 'Dati izdzesti';  
 }  
 ?> 
