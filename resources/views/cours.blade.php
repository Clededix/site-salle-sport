@extends('base')

@section('title', 'Titre de la Page')

@section('content')

    {{-- html --}}

    <body>
        <section class="container">
            <h1>Les cours</h1>
            <ul class="cours-list">
                <li><strong>Lundi :</strong> 19h à 21h - Zumba des antennes</li>
                <li><strong>Mardi :</strong> 19h30 à 21h30 - Pilates sur branche</li>
                <li><strong>Jeudi :</strong> 20h à 22h - Boxe Coquille</li>
                <li><strong>Vendredi :</strong> 20h à 22h - HIIT & GLIIDE</li>
                <li><strong>Samedi :</strong> 9h à 11h - Yoga streching</li>
            </ul>
        </section>
    </body>

    {{-- CSS --}}
    <style>
        body {
            font-family: Arial,
                sans-serif;
            margin: 0;
            padding: 20px;
            background-image: url(/img/SNAIL_climbing.jpg);
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
        }

        h1 {
            text-align: center;
            color: #333;
        }

        ul {
            background-color: rgba(0, 96, 26, 0.5)
        }

        .cours-list {
            list-style-type: none;
            padding: 0;
        }

        .cours-list li {
            padding: 10px;
            border-bottom: 1px solid #ccc;
        }

        .cours-list li:last-child {
            border-bottom: none;
        }

        strong {
            color: #007BFF;
        }
    </style>
@endsection
