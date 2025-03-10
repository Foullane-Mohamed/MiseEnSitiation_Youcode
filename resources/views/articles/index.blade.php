<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
    <h1> articles</h1>
    <button >Ajouter Article</button>
    <br>

    <tr border="1">
        <th>id</th>
        <th>Title</th>
        <th>Category</th>
    </tr>
    @foreach($articles as $article)
        @if($article)
    <tr>

        <td>{{$article.id}}</td>
        <td>{{$article.title}}</td>
        <td>{{$article.category}}</td>
        <button >Edite</button>
        <button >Dekete</button>
    </tr>
    @endif
    @endforeach
</body>
</html>
