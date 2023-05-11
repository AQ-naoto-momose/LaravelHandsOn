<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>車カタログ</title>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>
<body class="bg_cl_gr">

<header class="p-3 bg-dark text-white">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                車カタログ
            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li>
                    {{ link_to_route('cars.index', '車', null, ['class' => 'nav-link px-2 text-secondary']) }}
                </li>
            </ul>

            <div class="text-end">
                {{ Form::open(['url' => route('logout')]) }}
                {{ Form::submit('ログアウト', ['class' => 'btn btn-outline-light me-2']) }}
                {{ Form::close() }}
            </div>
        </div>
    </div>
</header>

@yield('main')

</body>
</html>
