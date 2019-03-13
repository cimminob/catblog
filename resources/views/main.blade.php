<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cat Blog</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        .icon-img {
            height: 50px;
        }

        .bg-image {
            background-image: url("/images/portrait-cute-tabby-cat-white background.jpg");
            background-size: cover;
            background-repeat:no-repeat;
            opacity: .5;

        }

        .banner {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            width: 75%;
            height: auto;
            z-index: -1;
            opacity: .8;
        }

        .jumbotron {
            background-image: url("/images/portrait-cute-tabby-cat-white background.jpg");
            background-size: 100%;
            background-repeat:no-repeat;

        }
        html { font-size: 1rem; }

        @media (min-width: 576px) {
            html { font-size: 1rem; }
        }
        @media (min-width: 768px) {
            html { font-size: 1.2rem; }
        }
        @media (min-width: 992px) {
            html { font-size: 1.5rem; }
        }
        @media (min-width: 1200px) {
            html { font-size: 1.75rem; }
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-sm navbar-light bg-light mb-2">
    <a class="navbar-brand" href="#">Cat Blog </a>
    <img src="/images/caticon.svg" class="icon-img">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/about">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/contact">Contact</a>
            </li>
            </ul>
    </div>
</nav>

{{--beginning of container--}}
<div class="container">
@yield('content')
    <hr>
    <p class="text-center">Copyright Cat Blog</p>
</div> {{--end of container--}}

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
</body>
</html>
