@extends('base')

@section('title', 'Titre de la Page')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
@endsection

@section('content')


@section('content')
    <h1><strong>Accueil</strong></h1>
    <section class="container">
        <p> Vous pensiez nos ami.e.s les escargots flasques? Mollassons ? Incapable de se muscler ?</p>
        <br>
        <p>Vous aviez tort !</p>
        <br>
        <p>Ici, vous allez pouvoir confier vos petit.e.s protégé.e.s entre des mains de professionnelles du sport !</p>
        <br>
        <p>Vos escargots vont pratiquer des activités aussi variées que :
        <p>Escalade sur branche,</p>
        <p>Boxe d'antennes,</p>
        <p>Yoga streching,</p>
        <p>Zumba carapace,</p>
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









<section>
    <h1>Accueil</h1>
    <p class="intro">Vous pensiez nos ami.e.s les escargots <strong>flasques</strong> ? Mollassons ? Incapable de se
        muscler
        ?</p>
    <br>
    <p>Vous aviez tort !</p>
    <p>Ici, vous allez pouvoir nous confier vos petits protégés entre des mains de professionnelles de l'activité
        physique
        et sportive !</p>
    <p>Vos escargots vont pratiquer des activités aussi variées que
    <p>
        <li>escalade sur branche,</li>
    </p>
    <li>boxe d'antennes,</li>
    </p>
    <li>yoga streching,</li>
    </p>
    <li>Zumba carapace,</li>
    <li>course sur tapis de feuilles...</li>
    </p>
    </p>
    <p>Ils pourront aussi se relaxer et profiter du SPA détente "Mucus Humus" après des séances de sport intenses.</p>
</section>
<section class="container"></section>


<style>
    /*         body {
                font-family: Arial,
                    sans-serif;
                margin: 0;
                padding: 20px;
                background-image: url(/img/SNAIL_equilibre.jpg);
                background-size: 90%;

                background-repeat: no-repeat;
                box-sizing: border-box;
                display: block;
                max-width: 100%;
                object-fit: cover;
            } */

    .container {
        position: relative;
        font-family: Arial, sans-serif;

        padding: 20px;
        box-sizing: border-box;
        display: block;
        /*             max-width: 100%;
                max-width: 600px; */
        margin: 0 auto;

        border-radius: 20px;
    }

    .container::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-image: url(/img/SNAIL_equilibre.jpg);
        background-size: 90%;
        background-repeat: no-repeat;
        opacity: 0.5;
        /* Ajustez l'opacité ici */
        z-index: -1;
        /* Assurez-vous que l'image est derrière le contenu */
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
