<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple UI</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f5f5f5;
            text-align: center;
            padding: 20px;
        }

        .card {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 300px;
            margin: 20px auto;
        }

        .card img {
            width: 100%;
            border-radius: 10px;
        }

        .card h1 {
            font-size: 1.5em;
            color: #333;
        }

        .card p {
            font-size: 1em;
            color: #666;
        }

        .card a {
            display: inline-block;
            margin-top: 10px;
            padding: 10px 15px;
            background: #ffcc00;
            color: #000;
            text-decoration: none;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="card">
        <img src="image.jpg" alt="Image">
        <h1>Hello!</h1>
        <p>Welcome to my world!</p>
        <a href="#">Learn More</a>
    </div>
</body>
</html>
