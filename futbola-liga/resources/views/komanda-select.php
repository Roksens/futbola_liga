<?php  
 $connect = mysqli_connect("localhost", "root", "", "futbola-liga");  
 $output = '';  
 $sql = "SELECT * FROM teams ORDER BY id";  
 $result = mysqli_query($connect, $sql);  
 $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">  
                <tr>  
                     <th width="5%">ID</th> 
                     <th width="20%">Komandas nosaukums</th>  
                     <th width="20%">Komandas atrašanās vieta</th>
                     <th width="20%">Dibināšanas datums</th>  
                     <th width="30%">Apraksts</th>
                     <th width="5%">Labot</th>
                </tr>';  
 if(mysqli_num_rows($result))  
 {  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>
                     <td>'.$row["id"].'</td>
                     <td class="nosaukums" data-id1="'.$row["id"].'" contenteditable>'.$row["nosaukums"].'</td>  
                     <td class="atrasanas_vieta" data-id2="'.$row["id"].'" contenteditable>'.$row["atrasanas_vieta"].'</td>
                     <td class="dibinasanas_datums" data-id3="'.$row["id"].'" contenteditable>'.$row["dibinasanas_datums"].'</td>
                     <td class="apraksts" data-id4="'.$row["id"].'" contenteditable>'.$row["apraksts"].'</td>   
                     <td><button type="button" name="delete_btn" data-id5="'.$row["id"].'" class="btn btn-xs btn-danger btn_delete">x</button></td>  
                </tr>  
           ';  
      }  
      $output .= '  
           <tr>
                <td></td>
                <td id="nosaukums" contenteditable></td>  
                <td id="atrasanas_vieta" contenteditable></td> 
                <td id="dibinasanas_datums" contenteditable></td> 
                <td id="apraksts" contenteditable></td> 
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