@extends('base')

@section('title', 'Titre de la Page')

@section('content')

    <body>
        <section class="container">
            <div>
                <h1>Les cours</h1>
            </div>
            <div>
                <p><strong>Lundi :</strong> 19h à 21h - Zumba carapace</p>
                <p><strong>Mardi :</strong> 19h30 à 21h30 - Escalade sur blocs</p>
                <p><strong>Mercredi :</strong> 9h à 11h - Yoga streching</p>
                <p><strong>Jeudi :</strong> 20h à 22h - Boxe d'antennes</p>
                <p><strong>Vendredi :</strong> 20h à 22h - HIIT & GpIDE</p>
                <p><strong>Samedi :</strong> 11h à 13h - Course sur tapis de feuilles</p>
                <p><strong>Dimanche :</strong> 19h30 à 21h30 - Pilates sur branches</p>

            </div>
        </section>
    </body>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 10px;
            background-image: url(/img/SNAIL_jumping.jpg);
            background-size: 100%;
            background-repeat: no-repeat;
            box-sizing: border-box;
        }

        .container {
            display: flex;
            flex-direction: column;
            max-width: 400px;
            margin: 30px auto;
            padding: 10px;
            border-radius: 20px;
            background-color: rgba(0, 0, 0, 0.3);
            align-items: center;
        }
    </style>
@endsection
