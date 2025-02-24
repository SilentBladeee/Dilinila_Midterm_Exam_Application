<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #6a0dad; /* Purple background */
            color: white; /* White text */
        }
        .card {
            background-color: #ffffff;
            color: #6a0dad;
            border: 2px solid #6a0dad;
        }
        .card-title {
            color: #6a0dad;
        }
    </style>
</head>
<body class="container mt-5">
    <h1 class="text-center mb-4">Anime List</h1>
    <div class="row">
        @foreach ($products as $product)
            <div class="col-md-4">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product['name'] }}</h5>
                        <p class="card-text">{{ $product['description'] }}</p>
                        <h6 class="card-subtitle text-muted">${{ $product['price'] }}</h6>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</body>
</html>