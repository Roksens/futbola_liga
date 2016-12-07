<!doctype html>
<html>
    <head>
        <title>Spēlētāji</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" 
        crossorigin="anonymous">
    </head>
    <body>

        <div class="container">
          <h2>Visi amatieru līgas spēlētāji</h2>          
          <table style="width:75%" class="table table-bordered">
            <thead>
              <tr>
              <th>Nr.p.k</th>
              <th>Vārds</th>
              <th>Uzvārds</th> 
              <th>Personas kods</th>
              <th>Komanda</th>
              <th>Vecums</th>
              <th>Augums(cm)</th>
              <th>Svars(kg)</th>
              </tr>
            </thead>
            <tbody>
                <?php $i=1; ?>
              @foreach($all_players as $players)
              <tr>
                <td>{{ $i .'.'}}</td>  
                <td>{{ $players->vards }}</td>
                <td>{{ $players->uzvards }}</td>
                <td>{{ $players->personas_kods }}</td>
                <td>{{ $players->komanda }}</td>
                <td>{{ $players->vecums }}</td>
                <td>{{ $players->augums }}</td>
                <td>{{ $players->svars }}</td>
              </tr>
              <?php $i++; ?>
              @endforeach
            </tbody>
          </table>
        </div>
    </body>   
</html>
