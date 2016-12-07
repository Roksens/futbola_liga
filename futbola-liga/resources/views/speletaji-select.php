<?php  
 $connect = mysqli_connect("localhost", "root", "", "futbola-liga");  
 $output = '';  
 $sql = "SELECT * FROM players ORDER BY id";  
 $result = mysqli_query($connect, $sql);  
 $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">  
                <tr>  
                     <th width="5%">ID</th> 
                     <th width="20%">Vārds</th>  
                     <th width="20%">Uzvārds</th>
                     <th width="15%">Personas kods</th>  
                     <th width="20%">Komanda</th>
                     <th width="5%">Vecums</th>
                     <th width="5%">Augums(cm)</th>
                     <th width="5%">Svars(kg)</th>
                     <th width="5%">Labot</th>
                </tr>';  
 if(mysqli_num_rows($result) > 0)  
 {  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>
                     <td>'.$row["id"].'</td>
                     <td class="vards" data-id1="'.$row["id"].'" contenteditable>'.$row["vards"].'</td>  
                     <td class="uzvards" data-id2="'.$row["id"].'" contenteditable>'.$row["uzvards"].'</td>
                     <td class="personas_kods" data-id3="'.$row["id"].'" contenteditable>'.$row["personas_kods"].'</td>
                     <td class="komanda" data-id4="'.$row["id"].'" contenteditable>'.$row["komanda"].'</td>
                     <td class="vecums" data-id5="'.$row["id"].'" contenteditable>'.$row["vecums"].'</td>
                     <td class="augums" data-id6="'.$row["id"].'" contenteditable>'.$row["augums"].'</td>
                     <td class="svars" data-id7="'.$row["id"].'" contenteditable>'.$row["svars"].'</td>
                     <td><button type="button" name="delete_btn" data-id8="'.$row["id"].'" class="btn btn-xs btn-danger btn_delete">x</button></td>  
                </tr>  
           ';  
      }  
      $output .= '  
           <tr>
                <td></td>
                <td id="vards" contenteditable></td>  
                <td id="uzvards" contenteditable></td> 
                <td id="personas_kods" contenteditable></td> 
                <td id="komanda" contenteditable></td>
                <td id="vecums" contenteditable></td> 
                <td id="augums" contenteditable></td> 
                <td id="svars" contenteditable></td> 
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