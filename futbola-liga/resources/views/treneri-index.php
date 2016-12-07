<html>  
      <head>  
           <title>Treneri</title>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
      </head>  
      <body>  
           <div class="container">  
                <br />  
                <br />  
                <br />  
                <div class="table-responsive">  
                     <h3 align="center">Treneru pievienošana un labošana</h3><br />  
                     <div id="live_data"></div>                 
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){
      function fetch_data()  
      {  
          console.log('asd');
           $.ajax({  
                url:"treneri-select.php",  
                method:"POST",  
                success:function(data){ 
                    console.log('asd')
                     $('#live_data').html(data);  
                }  
           });  
      }  
      fetch_data();  
      $(document).on('click', '#btn_add', function(){  
           var vards = $('#vards').text();  
           var uzvards = $('#uzvards').text();
           var personas_kods = $('#personas_kods').text();
           var komanda = $('#komanda').text();
           var vecums = $('#vecums').text();
           var augums = $('#augums').text();
           var svars = $('#svars').text();
           if(vards == '')  
           {  1
                alert("Ievadiet vardu");  
                return false;  
           }  
           if(uzvards == '')  
           {  
                alert("Ievadiet uzvardu");  
                return false;  
           } 
           if(personas_kods == '')  
           {  
                alert("Ievadiet personas kodu");  
                return false;  
           }
           if(komanda == '')  
           {  
                  
                return 'NAV';  
           }
           if(vecums == '')  
           {  
                alert("Ievadiet vecumu");  
                return false;  
           }
           if(augums == '')  
           {  
                alert("Ievadiet augumu");  
                return false;  
           }
           if(svars == '')  
           {  
                alert("Ievadiet svaru");  
                return false;  
           }
           $.ajax({  
                url:"treneri-insert.php",  
                method:"POST",  
                data:{vards:vards, uzvards:uzvards, personas_kods:personas_kods, komanda:komanda, vecums:vecums, augums:augums, svars:svars},  
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
                url:"treneri-edit.php",  
                method:"POST",  
                data:{id:id, text:text, column_name:column_name},  
                dataType:"text",  
                success:function(data){  
                     alert(data);  
                }  
           });  
      }  
      $(document).on('blur', '.vards', function(){  
           var id = $(this).data("id1");  
           var vards = $(this).text();  
           edit_data(id, vards, "vards");  
      });  
      $(document).on('blur', '.uzvards', function(){  
           var id = $(this).data("id2");  
           var uzvards = $(this).text();  
           edit_data(id, uzvards, "uzvards");  
      }); 
      $(document).on('blur', '.personas_kods', function(){  
           var id = $(this).data("id3");  
           var personas_kods = $(this).text();  
           edit_data(id, personas_kods, "personas_kods");  
      });
      $(document).on('blur', '.komanda', function(){  
           var id = $(this).data("id4");  
           var komanda = $(this).text();  
           edit_data(id, komanda, "komanda");  
      });
      $(document).on('blur', '.vecums', function(){  
           var id = $(this).data("id5");  
           var vecums = $(this).text();  
           edit_data(id, vecums, "vecums");  
      });
      $(document).on('blur', '.augums', function(){  
           var id = $(this).data("id6");  
           var augums = $(this).text();  
           edit_data(id, augums, "augums");  
      });
      $(document).on('blur', '.svars', function(){  
           var id = $(this).data("id7");  
           var svars = $(this).text();  
           edit_data(id, svars, "svars");  
      });
      $(document).on('click', '.btn_delete', function(){  
           var id=$(this).data("id8");  
           if(confirm("Vai tiesam velaties dzest so ierakstu?"))  
           {  
                $.ajax({  
                     url:"treneri-delete.php",  
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