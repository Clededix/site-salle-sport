@extends('base')

@section('title', 'Titre de la Page')

@section('content')
    <section>
        <h2>Pour nous contacter</h2>
        <p>Par téléphone :</p>
        <p>60 00 00 00 00</p>
        <br>
        <p>Par courrier :</p>
        <p>5 Boulevard Louis XIV</p>
        <p>59800 Lille</p>
        <br>
        <h2>Pour nous écrire ici</h2>
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
                <input type="text" name="message" id="demand"></text>
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
    </section>

    <style>
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

        h2{
            margin: 40px;
        }

        p {
            margin-left: 20px
        }
    </style>
@endsection
