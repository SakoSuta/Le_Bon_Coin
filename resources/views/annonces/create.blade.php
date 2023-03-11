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
        <h1>Le Bon Coin</h1>
        <h2>Create your annonce !</h2>
        <form action="{{ route('annonces.createdOnDB') }}" method="POST">
        @csrf
            <label for="">Title of the annonce :</label>
            <input type="text" name="title" placeholder="Title">

            <label for="">Price of the annonce :</label>
            <input type="number" name="price" placeholder="Price">

            <label for="">localisation :</label>
            <input type="text" name="location" placeholder="localisation">

            <label for="">Email of the seller :</label>
            <input type="email" name="email" placeholder="Email">

            <label for="">Name of the seller :</label>
            <input type="text" name="name" placeholder="Name">

            <label for="">Description of the annonce :</label>
            <textarea name="description" name="description" cols="30" rows="10" placeholder="Descriptions"></textarea>
            <br>

            <button type="submit"><strong>Sending the annonce</strong></button>
        </form>
    </body>
</html>