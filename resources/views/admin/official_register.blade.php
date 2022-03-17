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

    <h1>オフィシャル！</h1>
    <form action="official_register" method="POST">
        @csrf

        <p>*ブランド公式の品番</p>
        <input type="text" name="official_product_id" required>

        <p>*ブランドのID（後々選択できるようにする）</p>
        <input type="text" name="brand_id" required>

        <p>*公式の商品名</p>
        <input type="text" name="name" required>

        <p>*公式の商品詳細</p>
        <textarea name="description" id="" cols="30" rows="10" required></textarea>

        <p>公式の商品サイズ</p>
        <textarea name="description" id="" cols="30" rows="10"></textarea>

        <p>モチーフのID</p>
        <input type="text" name="motif_id">

        <p>チャームの長さや大きさ（公式のサイズがあれば）</p>
        <textarea name="charm_length" id="" cols="30" rows="10"></textarea>

        <input type="submit" name="" id="" value="送信">
    </form>
</body>
</html>