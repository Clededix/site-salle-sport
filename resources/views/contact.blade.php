@extends('base')

@section('title', 'Sport en salle')

<head>
    <title>@yield('title')</title>

    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    @yield('styles')

    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    @yield('scripts')
</head>



@section('content')
    <section class="container">
        <h2>Pour nous contacter</h2>
        <p>Par téléphone :</p>
        <p>60 00 00 00 00</p>
        <br>
        <p>Par courrier :</p>
        <p>5 Boulevard Louis XIV</p>
        <p>59800 Lille</p>
        <br>
        <h2>Notre emplacement</h2>
        <div id="map"></div>
        <br>
        <h2>Pour nous écrire c'est ici</h2>
        <form method="get" action="#">
            <div class="formulaire">
                <label for="nom">Votre nom :</label><br>
                <input type="text" name="nom" id="nom" minlength="2" maxlength="20" required>
            </div>
            <div class="formulaire">
                <label for="email">Votre e-mail :</label><br>
                <input type="email" name="email" id="email" required>
            </div>
            <div class="formulaire">
                <label for="demand">Objet de la demande :</label><br>
                <input type="text" name="message" id="demand"></input>
            </div>
            <div class="formulaire">
                <label for="message">Message :</label><br>
                <textarea name="message" id="message" required></textarea>
            </div>
            <div class="formulaire">
                <input type="submit" value="Envoyer" class="bouton-envoi">
            </div>
        </form>
    </section>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-image: url(/img/SNAIL_help_each_other.jpg);
            background-size: 110%;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            border-radius: 20px;
            background-color: rgba(0, 0, 0, 0.5);
        }

        h2 {
            margin-left: 20px;
        }

        p {
            margin-left: 20px;
        }

        .formulaire input,
        .formulaire textarea {
            width: 100%;
        }

        .bouton-envoi {
            display: block;
            max-width: max-content;
            margin: 20px auto;
            padding: 10px 30px;
            border: none;
            background-color: darkblue;
            color: white;
            cursor: pointer;
            font-weight: bold;
        }

        .bouton-envoi:hover {
            background-color: gray;
        }

        #map {
            height: 200px;
            width: 100%;
        }

        #map {
            height: 200px;
            width: 100%;
        }
    </style>

    <script>
        var map = L.map('map').setView([50.628726, 3.071487], 13);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        var marker = L.marker([50.628726, 3.071487]).addTo(map)
            .bindPopup('Sport en salle - Les copaines des Coquilles')
            .openPopup();
    </script>
@endsection
