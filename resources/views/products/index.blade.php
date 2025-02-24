<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anime Products</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            background: white;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .product {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background: #fff;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }
        .product img {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 5px;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Anime-Themed Products</h1>
        
        @foreach ($products as $product)
            <div class="product">
                <img src="{{ asset('images/' . $product['image']) }}" alt="{{ $product['name'] }}">
                <div>
                    <h3>{{ $product['name'] }}</h3>
                    <p>₱{{ number_format($product['price'], 2) }}</p>
                </div>
            </div>
        @endforeach

    </div>

</body>
</html>
