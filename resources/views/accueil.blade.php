@extends('base')

@section('title', 'Titre de la Page')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
@endsection

@section('content')


@section('content')
    <h1><strong>Accueil</strong></h1>
    <section class="container">
        <p><strong>Bienvenu.e.s à l'association "Les Copaines des Coquilles" !</strong></p>
        <p> Vous pensiez nos ami.e.s les escargots flasques? Mollassons ? Incapable de se muscler ?</p>
        <br>
        <p>Vous aviez tort !</p>
        <br>
        <p>Ici, vous allez pouvoir confier vos petit.e.s protégé.e.s entre des mains de professionnelles du sport !</p>
        <br>
        <p>Vos escargots vont pratiquer des activités aussi variées que :
        <p>Escalade sur blocs,</p>
        <p>Boxe d'antennes,</p>
        <p>Yoga streching,</p>
        <p>Zumba carapace,</p>
        <p>Pilates sur branches,</p>
        <p>HIIT & GLIIDE,</p>
        <p>Course sur tapis de feuilles...</p>
        <br>
        <p>Ils pourront aussi se relaxer et profiter du SPA détente "Mucus Humus" après des séances de sport intenses...</p>
    </section>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-image: url(/img/SNAIL_help_each_other.jpg);
            background-size: 100%;
            background-repeat: no-repeat;
            box-sizing: border-box;
            display: block;
            max-width: 100%;
            object-fit: cover;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border-radius: 20px;
            background-color: rgba(0, 0, 0, 0.5);
        }

        h1 {
            text-align: center;
        }
    </style>
@endsection
