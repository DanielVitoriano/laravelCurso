<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield("title")</title>
    </head>

    <body class="antialiased">
        <header>
            <a href="{{URL::route('createEvent')}}">Criar evento</a>
        </header>

        @yield("content")

        <footer>
            <h2>Daniel Events &copy; 2024</h2>
        </footer>
    </body>

</html>
