<html>

<head>
    <title>@yieled('title')</title>
    <link href="https://unpkg.com/sanitize.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
</head>

<body class="body">
    <div class="wrapper">
        <h1>@yield('title')</h1>
        @section('menubar')
        <ul>
            @show
        </ul>
        @foreach($questionWithChoices as $question_num => $questionWithChoice)
        <img src="{{ $questionWithChoice->first()->image }}" alt="">
        <ul class="choices">
            @foreach($questionWithChoice as $choice_num => $Choice)
            @if ($Choice->is_correct == 1)
            <li onclick="isCorrect('choice_{{$question_num}}_correct','choice_{{$question_num}}')" id="choice_{{$question_num}}_correct" class="choice">{{ $Choice->choices }}</li>
            @elseif($Choice->is_correct == 0)
            <li onclick="isCorrect('choice_{{$question_num}}_wrong{{$loop->iteration}}','choice_{{$question_num}}')" id="choice_{{$question_num}}_wrong{{$loop->iteration}}" class="choice">{{ $Choice->choices }}</li>
            @endif
            @endforeach
        </ul>
        @endforeach
        <div>
            @yield('footer')
        </div>
    </div>
    <script src="{{asset('/js/main.js')}}"></script>
</body>

</html>