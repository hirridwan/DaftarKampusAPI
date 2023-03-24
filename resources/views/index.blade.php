<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link rel = "stylesheet" href = "https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src = "https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src = "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <link rel = "stylesheet" href = "https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
    <script src = "https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src = "https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

  </head>
  <body>
    <div class="container">
      <h1>Daftar Kampus di Indonesia</h1>
        <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr class="bg-primary text-light">
                <th scope="col">No</th>
                <th scope="col">Nama Kampus</th>
                <th scope="col">Website</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sortedUniversities as $university)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $university['name'] }}</td>
                <td>{{ $university['domains'][0] }}</td>
                
            </tr>
            @endforeach
        </tbody>
        </table>
    </div>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script>
      $(document).ready(function() {
      $('#example').DataTable();
      } );
    </script>
  </body>
</html>