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
                    <h3>Many to Many Relationship</h3>
                    <table class="table table-bordered">
                        <thead>
                            <tr class="table-primary">
                                <th>Customer_name</th>
                                <th>Customer_phone</th>
                                <th>Product_name</th>
                                <th>Selling_price</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                           @foreach ($products as $cus)
                               <tr>
                                    <td>{{ $cus->customer_name }}</td>
                                    <td>{{ $cus->customer_phone }}</td>
                                    <td>
                                        @foreach ( $cus->product as $datarow )
                                            {{ $datarow->name }}
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach ( $cus->product as $datarow )   
                                            {{ $datarow->selling_price }}
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