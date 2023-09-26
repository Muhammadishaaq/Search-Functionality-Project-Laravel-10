<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Search Functionality</title>
</head>
<body>
    <center>
        <h1>Search Functionality</h1>
    </center>
    <center>
        <form action="search_data" method="get">
            <input type="text" name="search" placeholder="search here......">
            <button type="submit">Search</button>
        </form>
    </center>
    <div class="container">
        <table class="table table-hover mt-2">
            <thead>
              <tr>
                <th>Sno.</th>
                <th>Name</th>
                <th>Author</th>
                <th>Price</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($records as $records )
                    <tr>
                        {{-- <td>{{ $loop->index+1 }}</td> --}}
                        <td>{{ $records->id }}</td>
                        <td>{{ $records->name }}</td>
                        <td>{{ $records->author }}</td>
                        <td>{{ $records->price }}</td>
                        <td>
                        <a href=""><button class="btn btn-primary">Edit</button></a>
                        <a href=""><button class="btn btn-danger">Delete</button></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
          </table>
    </div>
    
</body>
</html>