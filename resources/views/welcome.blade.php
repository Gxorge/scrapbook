<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Scrapbook</title>
        @vite(['resources/scss/gweb.scss'])
    </head>
    <body class="gweb-site">
        <main class="gweb-container">
            @include("hero")
            <section class="content gweb-text-layout">
                <h1>Sup</h1>
            </section>
        </main>
        @include('footer')
    </body>
</html>
