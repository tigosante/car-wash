<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link rel="stylesheet" href="{{url(mix("app/app.css"))}}">
        <link rel="stylesheet" href="{{url(mix("components/header.css"))}}">
        <link rel="stylesheet" href="{{url(mix("components/sidebar.css"))}}">

        <script src="{{url(mix("components/sidebar.js"))}}"></script>

        <title>Car Wash</title>
    </head>
    <body>
        @component('components.header.header')
        @endcomponent
        @component('components.sidebar.sidebar')
        @endcomponent
    </body>
</html>

