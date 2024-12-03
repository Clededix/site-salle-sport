@extends('base')

@section('title', 'Sport en salle')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Chakra+Petch:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
@endsection

@section('content')

    <h1>Bienvenue dans votre salle de sport !</h1>
    <section class="container">
        <p>Découvrez un lieu où vos objectifs prennent vie !</p>
        <p>Nos équipements modernes, notre large choix de programmes et un encadrement professionnel
            sont à votre service pour vous accompagner dans chaque étape de votre parcours sportif.</p>
        <p>Que vous soyez débutant.e.s ou confirmé.e.s, venez vous dépasser dans une ambiance conviviale et motivante.</p>
        <p>Rejoignez-nous !</p>
    </section>

    <style>
        body {
            font-family: "Chakra Petch", Arial, sans-serif;
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
        }

        p {
            font-family: "Chakra Petch", Arial, sans-serif;
        }

        ul {
            margin-left: 10px;
        }
    </style>

@endsection
