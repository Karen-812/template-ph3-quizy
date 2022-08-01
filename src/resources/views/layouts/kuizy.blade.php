<html>
    <head>
        <title>@yieled('title')</title>
        <link href="https://unpkg.com/sanitize.css" rel="stylesheet"/>
        <link rel="stylesheet" href="{{asset('/css/style.css')}}">
    </head>

    <body>
        <h1>@yield('title')</h1>
        @section('menubar')
        <ul>
            @show
        </ul>
            @foreach($questionWithChoices as $question_num => $questionWithChoice)
            <img src="{{ $questionWithChoice->first()->image }}" alt="">
            <ul class="choices">
                @foreach($questionWithChoice as $choice_num => $Choice)
                    <li onclick="isCorrect({{ $Choice->choices }})" id="choice_{{$question_num}}_{{$choice_num}}">{{ $Choice->choices }}</li>
                @endforeach
            </ul>
            @endforeach
        <div>
            @yield('footer')
        </div>
        <script src="{{asset('/js/main.js')}}"></script>
    </body>
    </html>
