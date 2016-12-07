<?php  
 $connect = mysqli_connect("localhost", "root", "", "futbola-liga");  
 $output = '';  
 $sql = "SELECT * FROM results ORDER BY id";  
 $result = mysqli_query($connect, $sql);  
 $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">  
                <tr>  
                     <th width="5%">ID</th> 
                     <th width="35%">1. komandas nosaukums</th>  
                     <th width="10%">1. komandas rezultats</th>
                     <th width="10%">2. komandas rezultats</th>
                     <th width="35%">2. komandas nosaukums</th>  
                     <th width="5%">Labot</th>
                </tr>';  
 if(mysqli_num_rows($result) > 0)  
 {  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>
                     <td>'.$row["id"].'</td>
                     <td>'.$row["komanda_a"].'</td>  
                     <td>'.$row["rezultats_a"].'</td>
                     <td>'.$row["rezultats_b"].'</td>
                     <td>'.$row["komanda_b"].'</td>
                     <td></td>
                </tr>  
           ';  
      }  
      $output .= '  
           <tr>
                <td></td>
                <td id="komanda_a" contenteditable></td>  
                <td id="rezultats_a" contenteditable></td> 
                <td id="rezultats_b" contenteditable></td> 
                <td id="komanda_b" contenteditable></td> 
                <td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">+</button></td>  
           </tr>  
      ';  
 }  
 else  
 {  
      $output .= '<tr>  
                          <td colspan="4">Dati netika atrasti!</td>  
                     </tr>';  
 }  
 $output .= '</table>  
      </div>';  
 echo $output;  
 ?>  