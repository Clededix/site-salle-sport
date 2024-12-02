<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body>
    <header>
        <h1>Salle de sport</h1>
        <nav class="navbar">
            <a href="{{ route('accueil') }}">Accueil</a>
            <a href="{{ route('cours') }}">Cours</a>
            <a href="{{ route('tarif') }}">Tarifs</a>
            <a href="{{ route('contact') }}">Contact</a>
            <a href="{{ route('mentions-legales') }}">Mentions Légales</a>
        </nav>
    </header>
    <section id="content">
        @yield('content')
    </section>
    <footer>
        <a href="{{ route('mentions-legales') }}" class="mention">Mentions Légales</a>
    </footer>
</body>

<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
    }

    h1 {
        display: flex;
        justify-content: center;
        background-color: rgba(0, 0, 0, 0.5);
        padding: 50px;
    }
    .navbar {
        background-color: #333;
        padding: 10px 0;
        display: flex;
        justify-content: space-evenly;
    }

    .navbar ul {
        list-style-type: none;
        padding: 0;
        margin: 0;
        display: flex;
        justify-content: center;
    }

    .navbar li {
        margin: 0 15px;
    }

    .navbar a {
        color: white;
        text-decoration: none;
        font-size: 16px;
    }

    .navbar a:hover {
        text-decoration: underline;
    }

    .mention {
        display: block;
        background-color: #333;
        padding: 10px;
        margin: 10px;
        text-align: center;
    }

</style>

</html>
