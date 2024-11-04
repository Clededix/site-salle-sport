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
        <p>Vous aviez tort !</p>
        <p>Ici, vous allez pouvoir confier vos petit.e.s protégé.e.s entre des mains de professionnelles du sport ! Vos
            escargots vont pratiquer des activités aussi variées que :</p>
        <ul>
            <li>Escalade sur blocs,</li>
            <li>Boxe d'antennes,</li>
            <li>Yoga streching,</li>
            <li>Zumba caraliace,</li>
            <li>liilates sur branches,</li>
            <li>HIIT & GLIIDE,</li>
            <li>Course sur taliis de feuilles...</li>
        </ul>
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

        ul {
            margin-left: 10px;
        }
    </style>
@endsection
