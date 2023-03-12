<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/kimeiga/bahunya/dist/bahunya.min.css">
        <title>Le Bon Coin</title>
    </head>
    <body>
            <h1>{{ $annonce->id }} - {{ $annonce->title }}</h1>
            <h2>{{ $annonce->name }} - {{ $annonce->email }}</h2>
            <h3>{{ $annonce->price }}</h3>
            <h3>{{ $annonce->location }}</h3>
            <h3>{{ $annonce->description }}</h3>
    </body>
</html>