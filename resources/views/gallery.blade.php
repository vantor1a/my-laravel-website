<!DOCTYPE html>
<html>
<head>
    <title>Gallery</title>
</head>
<body>
    <h1>Gallery</h1>
    @for ($i = 1; $i <= 15; $i++)
        <img src="{{ asset('images/photo'.$i.'.jpg') }}" width="200" style="margin:10px;">
    @endfor
    <nav>
        <a href="/">Home</a> | <a href="/about">About You</a> | <a href="/gallery">Gallery</a>
    </nav>
</body>
</html>