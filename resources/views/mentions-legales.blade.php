@extends('base')

@section('title', 'Titre de la Page')

@section('content')

    <body>
        <h1>Mentions légales</h1>
        <br>
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
        <p>Contact : Pour toute question, veuillez nous contacter à l'adresse : contact@associationxyz.fr</p>

    </body>

    <style>
        body {
            font-family: Arial,
                sans-serif;
            margin: 0;
            padding: 20px;
            background-image: url(/img/SNAIL_climbing.jpg);
            background-size: 100%;
            /* background-repeat: no-repeat;
                box-sizing: border-box; */
            /* display: block; */
            /* max-width: 100%; */
            /* object-fit: cover; */
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border-radius: 20px;
        }

        h1 {
            text-align: center;
            color: #333;
            margin: 30px;

        }

        .p {
            padding: 10px;
        }
    </style>
@endsection
