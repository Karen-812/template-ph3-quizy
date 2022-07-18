<html>
    <head>
        <title>@yieled('title')</title>
        <link href="https://unpkg.com/sanitize.css" rel="stylesheet"/>
    </head>

    <body>
        <h1>@yield('title')</h1>
        @section('menubar')
        <ul>
            @show
        </ul>
            @foreach($questionWithChoices as $questionWithChoice)
            <img src="{{ $questionWithChoice->first()->image }}" alt="">
            <ul>
                @foreach($questionWithChoice as $Choice)
                    <li>{{ $Choice->choices }}</li>
                @endforeach
            </ul>
            @endforeach
        <div>
            @yield('footer')
        </div>
    </body>
</html>
