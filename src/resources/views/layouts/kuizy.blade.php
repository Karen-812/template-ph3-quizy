<html>

<head>
    <title>@section('title', $quiz1)</title>
    <link href="https://unpkg.com/sanitize.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
</head>


<body class="body">
    <div class="wrapper">

    <h1>
        @yield('title')
    </h1>
    <ul>
        @yield('menubar')
    </ul>
    @yield('question')

    <div>
            @yield('footer')
            copyright 2022 karen.
    </div>
    </div>
    <script src="{{asset('/js/main.js')}}"></script>
</body>

</html>
