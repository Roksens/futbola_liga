<!doctype html>
<html>
    <head>
        <title>Komandas</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" 
        crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
          <h2>Visas amatieru līgas komandas</h2>          
          <table style="width:75%" class="table table-bordered">
            <thead>
              <tr>
                <th>Nr.p.k</th>
                <th>Komandas nosaukums</th>
                <th>Atrašanās vieta</th> 
                 <th>Dibināšanas datums</th>
                 <th>Apraksts</th>
                 </tr>
            </thead>
            <tbody>
              <?php $i=1; ?>
              @foreach($all_teams as $team)
              <tr>
                <td>{{ $i.'.' }}</td>
                <td>{{ $team->nosaukums }}</td>
                <td>{{ $team->atrasanas_vieta }}</td>
                <td>{{ $team-> dibinasanas_datums }}</td>
                <td>{{ $team->apraksts }}</td>
              </tr>
              <?php $i++; ?>
              @endforeach
            </tbody>
          </table>
        </div>
    </body>
    
</html>
