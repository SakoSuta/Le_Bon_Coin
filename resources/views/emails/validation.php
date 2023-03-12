<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Le Bon Coin</title>
    </head>
    <body>
        <h1>Verify your annonce !</h1>
        <h2>Good job ! 👍</h2>
        <p>Your annonce has been well saved and you have to check your annonce !</p>
        <a href="http://localhost:8000/validate/ + {{ $token }}">Clic on me for validate your annonce !</a>
        <p>{{ $token }}</p>
    </body>
</html>