@extends('base')

@section('title', 'Sport en salle')

@section('content')

    <body>
        <div class="container">
            <h1>Mentions légales</h1>
            <br>
            <p>Informations légales et confidentialité
                Afin de garantir une transparence totale, cette page vous fournit toutes les informations nécessaires
                concernant l’utilisation de notre site. Vous y trouverez nos mentions légales, ainsi que les informations
                relatives à la collecte et à l’utilisation de vos données personnelles. Votre sécurité et votre confiance
                sont au cœur de nos préoccupations.</p>
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
            display: flex;
            flex-direction: column;
            width: 70%;
            border-radius: 5px;
            margin: 30px auto;
            padding: 50px;
            background-color: rgba(0, 0, 0, 0.8);
            align-items: center;
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
