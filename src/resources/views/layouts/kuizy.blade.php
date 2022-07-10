<html>
    <head>
        <title>@yieled('title')</title>
    </head>
    <body>
        <h1>@yield('title')</h1>
        @section('menubar')
        <ul>
            @show
        </ul>
            @foreach($questions as $question)
            <img src="{{ $question->image }}"  alt="">
            <ul>
                @foreach($choices as $choice)
                    <li>{{ $choice->choices }}</li>
                @endforeach
            </ul>
            @endforeach
        <div>
            @yield('footer')
        </div>
    </body>
</html>