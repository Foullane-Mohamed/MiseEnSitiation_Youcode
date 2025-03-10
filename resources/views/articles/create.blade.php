<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
<form action="" method="Post">
    @csrf

    <label>Title</label>
    <input type="text" name="title" placeholder="Title">
    <label>Category</label>
    <input type="text" name="category" placeholder="Category">
    <button type="submit">Ajouter Article</button>

</form>
</body>
</html>
