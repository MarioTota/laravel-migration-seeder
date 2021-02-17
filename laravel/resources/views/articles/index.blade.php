<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <hr>
        <h1>Blog di Mario</h1>
        <div class="posts_container">
            @foreach ($articles as $article)
                <a href="{{ route('articles.show', ['article' => $article->id]) }}" class="single_post">
                    <div class="title">
                        <h3>{{ $article->title }}</h3>
                    </div>
                    <div class="subtitle">
                        <h4>{{ $article->subtitle }}</h4>
                    </div>
                    <div class="author_pub">
                        <span class="author">{{ $article->author }}</span><span>-</span>
                        <span class="publication_date"><em>{{ $article->publication_date }}</em></span>
                    </div>
                    <div class="text">
                        <p>{{ substr($article->text, 0, 250).'...' }}</p>
                    </div>   
                </a>
            @endforeach
                <div class="single_post" style="visibility: hidden;"></div>
                <div class="single_post" style="visibility: hidden;"></div>
                <div class="single_post" style="visibility: hidden;"></div>
        </div>
    </div>
</body>
</html>