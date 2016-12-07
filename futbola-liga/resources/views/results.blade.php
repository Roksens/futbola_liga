<!doctype html>
<html>
    <head>
        <title>Rezultati</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" 
        crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
          <h2>Visi amatieru līgas rezultāti</h2>          
          <table style="width:50%" class="table table-bordered">
            <thead>
              <tr>
              <th>Nr.p.k</th>
              <th>Komandas nosaukums</th>
              <th>1. komandas rezultāts</th>
              <th>2. komandas rezultāts</th>
              <th>Komandas nosaukums</th>
              </tr>
            </thead>
            <tbody>
                <?php $i=1; ?>
              @foreach($all_results as $results)
              <tr>
                <td>{{ $i .'.'}}</td>  
                <td>{{ $results->komanda_a }}</td>
                <td>{{ $results->rezultats_a }}</td>
                <td>{{ $results->rezultats_b }}</td>
                <td>{{ $results->komanda_b }}</td>
              </tr>
              <?php $i++; ?>
              @endforeach
            </tbody>
          </table>
        </div>
    </body>   
</html>
