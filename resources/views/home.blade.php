<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <h1>Hello World!</h1>
        <h2>Ciao, {{ $name }}!</h2>
        <section>
            @if (count($colors) == 0)
                <h3>Non hai nessun colore preferito!</h3>
            @elseif (count($colors) == 1)
                <h3>Il tuo colore preferito è il {{ $colors[0] }}</h3>
            @else
                <h3>I tuoi colori preferiti sono:</h3>
                <ul>
                    @foreach ($colors as $color)
                        <li>{{ $color }}</li>
                    @endforeach
                </ul>
            @endif
        </section>
    </body>
</html>