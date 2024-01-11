<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<nav> 
        <a href="{{route('home')}}">Home</a>
        <a href="{{route('articles')}}">Articoli</a>
        <a href="{{route('about-us')}}">About Us</a>
    </nav>
<h1>Articoli</h1>
<ul>


    @if($articles)
    @foreach($articles as $id => $article)
    <li>
        <h2>{{$article['title']}}</h2>
        <p>{{$article['category']}}</p>
        <a href="{{route('articles.view',$id)}}">Link all'articolo</a>
    </li>
    @endforeach
    @else
    <h2>Nessun articolo è presente!</h2>
    @endif


</ul>


<p>
</p>
</body>
</html>