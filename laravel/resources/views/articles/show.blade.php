<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/show.css') }}">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>{{ $article->getAttributes()['title'] }}</h1>
        <div class="author_pub">
            <div><em>{{ $article->getAttributes()['publication_date'] }}</em></div>
            <div>{{ $article->getAttributes()['author'] }}</div>
        </div>
        <h2>{{ $article->getAttributes()['subtitle'] }}</h2>
        <p>{{ $article->getAttributes()['text'] }}</p>
    </div>
</body>
</html>