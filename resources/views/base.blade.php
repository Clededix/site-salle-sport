<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('resources/css/app.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body>
    <header>
        <h1>Nom de la Salle de Sport</h1>
        <nav>
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
        <a href="{{ route('mentions-legales') }}">Mentions Légales</a>
    </footer>
</body>

</html>
