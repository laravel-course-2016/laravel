<html>
<head>
    <title>{{ $title or '' }}</title>
    <link rel="stylesheet" href="base_style.css">

    @section('head')
        <script src="base_script.js"></script>
    @show
</head>
<body>
    <header>
        @section('header')
        @show
    </header>

    <div class="mainContent">
        @section('content')
        @show
    </div>

    <footer>
        @section('footer')
        @show
    </footer>

</body>
</html>