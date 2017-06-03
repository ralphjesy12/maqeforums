<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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

            @foreach ($posts as $post)
                <div class="box">
                    <article class="media">
                        <figure class="media-left">
                            <p class="image is-4by3">
                                <img src="{{ $post['image_url'] }}">
                            </p>
                        </figure>
                        <div class="media-content">
                            <div class="content">
                                <p>
                                    <strong>{{ $post['title'] }}</strong>
                                    <br>
                                    {{ $post['body'] }}
                                    <br>
                                    <em> <i class="fa fa-fw fa-clock-o"></i>{{ \Carbon\Carbon::parse($post['created_at'])->diffForHumans() }}</em>
                                </p>
                            </div>
                        </div>
                        <div class="media-right has-text-centered">
                            <figure>
                                <p class="image is-128x128">
                                    <img src="{{ $authors[$post['author_id'] - 1]['avatar_url'] }}">
                                </p>
                            </figure>
                            <h1 class="title">
                                {{ $authors[$post['author_id'] - 1]['name'] }}
                            </h1>
                            <h2 class="subtitle">
                                {{ $authors[$post['author_id'] - 1]['role'] }}
                            </h2>
                            <h3>
                                <i class="fa fa-fw fa-map-marker"></i> {{ $authors[$post['author_id'] - 1]['place'] }}
                            </h3>
                        </div>
                    </article>
                </div>
            @endforeach
            <nav class="pagination is-centered">
                <a class="pagination-previous">Previous</a>
                <a class="pagination-next">Next page</a>
                <ul class="pagination-list">
                    <li><a class="pagination-link">1</a></li>
                    <li><span class="pagination-ellipsis">&hellip;</span></li>
                    <li><a class="pagination-link">45</a></li>
                    <li><a class="pagination-link is-current">46</a></li>
                    <li><a class="pagination-link">47</a></li>
                    <li><span class="pagination-ellipsis">&hellip;</span></li>
                    <li><a class="pagination-link">86</a></li>
                </ul>
            </nav>
        </div>
    </section>
</body>
</html>
