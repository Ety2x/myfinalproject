<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 2rem;
            background-color: #f5f5f5;
            color: #333;
        }

        .container {
            max-width: 700px;
            margin: auto;
            background-color: white;
            padding: 2rem;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            border-radius: 10px;
        }

        h1 {
            color: #2c3e50;
            margin-bottom: 1rem;
        }

        p {
            font-size: 1.1rem;
            line-height: 1.6;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>{{ $title }}</h1>
        <p>{{ $body }}</p>
    </div>
</body>
</html>
