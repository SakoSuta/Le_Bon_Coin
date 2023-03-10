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
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <h2>Annonces</h2>

        @if($annonces === "")
            <table class="table">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Location</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($annonces as $annonce)
                    <tr>
                        <td>{{ $annonce->title }}</td>
                        <td>{{ $annonce->description }}</td>
                        <td>{{ $annonce->price }}</td>
                        <td>{{ $annonce->location }}</td>
                        <td>
                            <a href="{{ route('annonces.show', $annonce->id) }}" class="btn btn-primary">Voir l'annonce</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <div class="alert alert-success">
                No annonce was published
            </div>
        @endif
        <br>
        <a href="/annonces/create"><button>Create a new Annonce ?</button></a>
    </body>
</html>

<!-- @section('content')
<div class="container">
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    <div class="row">
        <div class="col-md-12">
            <h2>Annonces</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>Titre</th>
                        <th>Description</th>
                        <th>Prix</th>
                        <th>Ville</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($annonces as $annonce)
                    <tr>
                        <td>{{ $annonce->title }}</td>
                        <td>{{ $annonce->description }}</td>
                        <td>{{ $annonce->price }}</td>
                        <td>{{ $annonce->location }}</td>
                        <td>
                            <a href="{{ route('annonces.show', $annonce->id) }}" class="btn btn-primary">Voir l'annonce</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection -->