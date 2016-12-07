<html>  
      <head>  
           <title>Rezultati</title>  
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
                     <h3 align="center">Rezultātu pievienošana datubāzei</h3><br />  
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
                url:"rezultati-select.php",  
                method:"POST",  
                success:function(data){  
                     $('#live_data').html(data);  
                }  
           });  
      }  
      fetch_data();  
      $(document).on('click', '#btn_add', function(){  
           var komanda_a = $('#komanda_a').text();  
           var rezultats_a = $('#rezultats_a').text();
           var rezultats_b = $('#rezultats_b').text();
           var komanda_b = $('#komanda_b').text();
           if(komanda_a == '')  
           {  1
                alert("Ievadiet 1. komandas nosaukumu");  
                return false;  
           }  
           if(rezultats_a == '')  
           {  
                alert("Ievadiet 1. komandas rezultatu");  
                return false;  
           } 
           if(rezultats_b == '')  
           {  
                alert("Ievadiet 2. komandas rezultatu");  
                return false;  
           }
            if(komanda_b == '')  
           {  
                alert("Ievadiet 2. komandas nosaukumu");  
                return false;  
           }
           $.ajax({  
                url:"rezultati-insert.php",  
                method:"POST",  
                data:{komanda_a:komanda_a, rezultats_a:rezultats_a, rezultats_b:rezultats_b, komanda_b:komanda_b},  
                dataType:"text",  
                success:function(data)  
                {  
                     alert(data);  
                     fetch_data();  
                }  
           })  
      });    
      $(document).on('blur', '.komanda_a', function(){  
           var id = $(this).data("id1");  
           var komanda_a = $(this).text();  
           edit_data(id, komanda_a, "komanda_a");  
      });  
      $(document).on('blur', '.rezultats_a', function(){  
           var id = $(this).data("id2");  
           var rezultats_a = $(this).text();  
           edit_data(id, rezultats_a, "rezultats_a");  
      }); 
      $(document).on('blur', '.rezultats_b', function(){  
           var id = $(this).data("id3");  
           var rezultats_b = $(this).text();  
           edit_data(id, rezultats_b, "rezultats_b");  
      });
      $(document).on('blur', '.komanda_b', function(){  
           var id = $(this).data("id4");  
           var komanda_b = $(this).text();  
           edit_data(id, komanda_b, "komanda_b");  
      });  
 });  
 </script> 