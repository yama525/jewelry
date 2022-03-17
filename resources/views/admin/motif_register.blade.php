<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="official_register">オフィシャル</a>
    <a href="brand_register">ブランド</a>
    <a href="motif_register">モチーフ</a>

    <h1>モチーフ！</h1>
    <form action="motif_register" method="POST">
        @csrf

        <input type="text" name="motif_type">
        <input type="submit" name="" id="" value="送信">
    </form>
</body>
</html>