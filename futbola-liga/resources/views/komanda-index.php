<html>  
      <head>  
           <title>Komandas</title>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
      </head>  
      <body>  
           <div class="container">  
                <br />  
                <br />  
                <br />  
                <div class="table-responsive">  
                     <h3 align="center">Komandu pievienošana datubāzei</h3><br />  
                     <div id="live_data"></div>                 
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      function fetch_data()  
      {  
           $.ajax({  
                url:"komanda-select.php",  
                method:"POST",  
                success:function(data){  
                     $('#live_data').html(data);  
                }  
           });  
      }  
      fetch_data();  
      $(document).on('click', '#btn_add', function(){  
           var nosaukums = $('#nosaukums').text();  
           var atrasanas_vieta = $('#atrasanas_vieta').text();
           var dibinasanas_datums = $('#dibinasanas_datums').text();
           var apraksts = $('#apraksts').text();
           if(nosaukums == '')  
           {  1
                alert("Ievadiet komandas nosaukumu");  
                return false;  
           }  
           if(atrasanas_vieta == '')  
           {  
                alert("Ievadiet atrasanas vietu");  
                return false;  
           } 
           if(dibinasanas_datums == '')  
           {  
                alert("Ievadiet dibinasanas datumu");  
                return false;  
           }
           $.ajax({  
                url:"komanda-insert.php",  
                method:"POST",  
                data:{nosaukums:nosaukums, atrasanas_vieta:atrasanas_vieta, dibinasanas_datums:dibinasanas_datums, apraksts:apraksts},  
                dataType:"text",  
                success:function(data)  
                {  
                     alert(data);  
                     fetch_data();  
                }  
           })  
      });  
      function edit_data(id, text, column_name)  
      {  
           $.ajax({  
                url:"komanda-edit.php",  
                method:"POST",  
                data:{id:id, text:text, column_name:column_name},  
                dataType:"text",  
                success:function(data){  
                     alert(data);  
                }  
           });  
      }  
      $(document).on('blur', '.nosaukums', function(){  
           var id = $(this).data("id1");  
           var nosaukums = $(this).text();  
           edit_data(id, nosaukums, "nosaukums");  
      });  
      $(document).on('blur', '.atrasanas_vieta', function(){  
           var id = $(this).data("id2");  
           var atrasanas_vieta = $(this).text();  
           edit_data(id, atrasanas_vieta, "atrasanas_vieta");  
      }); 
      $(document).on('blur', '.dibinasanas_datums', function(){  
           var id = $(this).data("id3");  
           var dibinasanas_datums = $(this).text();  
           edit_data(id, dibinasanas_datums, "dibinasanas_datums");  
      });
      $(document).on('blur', '.apraksts', function(){  
           var id = $(this).data("id4");  
           var apraksts = $(this).text();  
           edit_data(id, apraksts, "apraksts");  
      });
      $(document).on('click', '.btn_delete', function(){  
           var id=$(this).data("id5");  
           if(confirm("Vai tiesam velaties dzest so ierakstu?"))  
           {  
                $.ajax({  
                     url:"komanda-delete.php",  
                     method:"POST",  
                     data:{id:id},  
                     dataType:"text",  
                     success:function(data){  
                          alert(data);  
                          fetch_data();  
                     }  
                });  
           }  
      });  
 });  
 </script> 