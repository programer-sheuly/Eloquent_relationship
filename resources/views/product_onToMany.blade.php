<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Relationship</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="text-center my-3">Eloquant Relationships</h2>
                    <h3>One to Many Relationship</h3>
                    <table class="table table-bordered">
                        <thead>
                            <tr class="table-primary">
                                <th>Brand Name</th>
                                <th>Products Name</th>
                                <th>Salling Price</th>
                                <th>Buying Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $data)  
                           <tr>
                                <td>{{ $data->name }}</td>
                                <td>
                                    @foreach ( $data->product as $row)  
                                    {{ $row->name }}<br>
                                    @endforeach
                                </td>
                                <td>
                                    @foreach ( $data->product as $row)  
                                    {{ $row->selling_price }}<br>
                                    @endforeach
                                </td>
                                <td>
                                    @foreach ( $data->product as $row)  
                                    {{ $row->buying_price }}<br>
                                    @endforeach
                                </td>
                                
                            </tr>
                            @endforeach
                        </tbody>
                        
                        
                    </table>
                </div>
            </div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>