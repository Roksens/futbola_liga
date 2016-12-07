<!doctype html>
<html>
    <head>
        <title>Treneri</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" 
        crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
          <h2>Visi amatieru līgas treneri</h2>          
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
              @foreach($all_trainers as $trainers)
              <tr>
                <td>{{ $i .'.'}}</td>  
                <td>{{ $trainers->vards }}</td>
                <td>{{ $trainers->uzvards }}</td>
                <td>{{ $trainers->personas_kods }}</td>
                <td>{{ $trainers->komanda }}</td>
                <td>{{ $trainers->vecums }}</td>
                <td>{{ $trainers->augums }}</td>
                <td>{{ $trainers->svars }}</td>
              </tr>
              <?php $i++; ?>
              @endforeach
            </tbody>
          </table>
        </div>
    </body>   
</html>
