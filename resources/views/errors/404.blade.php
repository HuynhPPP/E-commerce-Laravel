<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Không tìm thấy trang</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: #f8fafc;
            text-align: center;
            padding: 50px;
        }
        h1 {
            font-size: 8rem;
            color: #red;
        }
        h2 {
            font-size: 2rem;
            margin-top: -20px;
            color: #333;
        }
        p {
            margin: 20px 0;
            color: #555;
        }
        a {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 25px;
            background: #6366f1;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            font-weight: bold;
        }
        a:hover {
            background: #4f46e5;
        }
    </style>
</head>
<body>

    <h1>404</h1>
    <h2>Oops! Không tìm thấy trang</h2>
    <a href="{{ route('dashboard') }}">Quay lại Trang chủ</a>

</body>
</html>
