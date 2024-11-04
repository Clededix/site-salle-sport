@extends('base')

@section('title', 'Titre de la Page')

@section('content')

    <body>
        <div class="container">
            <h1>Mentions légales</h1>
            <br>
            <p><i>page en cours de rédaction</i></p>
            <p>Nom de l'association</p>
            <p>Siège social</p>
            <p>Numéro SIRET</p>
            <p>Directrice de la publication</p>
            <br>
            <p>Hébergeur, adresse, téléphone</p>
            <br>
            <p>Politique de confidentialité : Nous respectons votre vie privée et nous nous engageons à protéger vos données
                personnelles. Pour plus d'informations, consultez notre politique de confidentialité. </p>
            <br>
            <p>Droits d'auteur : Tous les contenus de ce site sont protégés par des droits d'auteur. Toute reproduction est
                interdite sans autorisation préalable.</p>
            <br>
            <p>Contact : Pour toute question, veuillez nous contacter à l'adresse : contact@sportcoquille.fr</p>
        </div>
    </body>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-image: url(/img/SNAIL_equilibre.jpg);
            background-size: 110%;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            border-radius: 20px;
            background-color: rgba(0, 0, 0, 0.5);
        }

        h1 {
            text-align: center;
            color: #000;
        }

        h2 {
            margin: 40px 0;
        }

        p {
            margin-left: 20px;
        }

        .p {
            padding: 10px;
        }
    </style>
@endsection
