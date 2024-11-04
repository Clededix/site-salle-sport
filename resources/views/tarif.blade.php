@extends('base')

@section('title', 'Sport en salle')

@section('styles')
    <link rel="stylesheet" href="{{ asset('public/style_tarif.css') }}">
@endsection

@section('content')
    <h1>Les tarifs</h1>
    <section class="container">
        <div>
            <p><strong>Adhésion annuelle à l'association "Les Copaines des Coquilles" : 15 €</strong></p>
            <p><strong>Une séance : 10 €</strong></p>
            <p><strong>Le carnet de 10 séances : 90 €</strong></p>
            <p><strong>Abonnement mensuel illimité sans cours : 30 €</strong></p>
            <p><strong>Abonnement mensuel illimité avec cours : 60 €</strong></p>
            <p><strong>Réglements sur place</strong></p>
        </div>
    </section>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-image: url(/img/SNAIL_climbing.jpg);
            background-size: 100%;
            background-repeat: no-repeat;
            box-sizing: border-box;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 30px;
            border-radius: 20px;
            background-color: rgba(0, 0, 0, 0.5);
        }

        h1 {
            text-align: center;
        }
    </style>
@endsection
