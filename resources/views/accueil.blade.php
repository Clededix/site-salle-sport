@extends('base')

@section('title', 'Titre de la Page')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
@endsection

@section('content')

    <h1>Accueil</h1>
    <p class="intro"><strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt, iusto, autem natus, accusamus excepturi
            expedita cum
            minima facere provident necessitatibus numquam quibusdam sequi repellendus adipisci a laboriosam quisquam non
            id?
            Lorem ipsum dolor sit amet consectetur adipisicing elit. </strong> </p>

    <p>Aperiam ipsum tempora quas perspiciatis, nisi consectetur officia voluptatum sed commodi ullam sint quis aliquam,
        suscipit voluptates modi placeat vel tempore est.
        Quasi officia, ex, illo inventore aliquid vel officiis animi eaque nemo sapiente ad velit sint sed tempora. Nemo
        perspiciatis deleniti sed excepturi et voluptatem repellat, atque iste eligendi, eum quam!
        Dignissimos voluptatibus deserunt veritatis totam quo illo illum natus beatae minus. Voluptates, nulla suscipit
        labore maiores inventore repudiandae aliquam. Ipsum optio, asperiores minus libero aliquam excepturi esse laboriosam
        officiis facilis!</p>

    <style>
        body {
            font-family: Arial,
                sans-serif;
            margin: 0;
            padding: 20px;
            background-image: url(/img/SNAIL_climbing.jpg);
            background-size: 100%;
            /* background-repeat: no-repeat;
            box-sizing: border-box; */
            /* display: block; */
            /* max-width: 100%; */
            /* object-fit: cover; */
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
            margin: 30px;

        }

        .p {
            padding: 10px;
        }
    </style>
@endsection
