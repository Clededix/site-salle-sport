@extends('base')

@section('title', 'Sport en salle')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
@endsection

@section('content')

    <h1><strong>Bienvenue dans votre salle de sport !</strong></h1>
    <section class="container">
        <p>Découvrez un lieu où vos objectifs prennent vie !</p>
        <p>Nos équipements modernes, notre large choix de programmes et un encadrement professionnel
            sont à votre service pour vous accompagner dans chaque étape de votre parcours sportif.</p>
        <p>Que vous soyez débutant.e.s ou confirmé.e.s, venez vous dépasser dans une ambiance conviviale et motivante.</p>
        <p>Rejoignez-nous !</p>
    </section>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-image: url('{{ asset('img/regard.jpg') }}');
            background-size: 100%;
            background-position: center;

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
