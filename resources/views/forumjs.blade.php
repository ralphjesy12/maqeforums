<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Maqe Forums</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.4.2/css/bulma.min.css" rel="stylesheet" type="text/css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" type="text/css">

</head>
<body>
    <section class="hero is-primary is-bold">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    Maqe Forums
                </h1>
                <h2 class="subtitle">
                    Subtitle
                </h2>
            </div>
        </div>
    </section>
    <section id="posts" class="section">
        <div class="container">
            <div class="heading">
                <h2 class="subtitle">
                    Posts
                </h2>
            </div>

            <forum></forum>

            
        </div>
    </section>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
