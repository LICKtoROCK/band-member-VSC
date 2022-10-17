<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        @yield('title')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">

        <div id="header">
            <div class="card border-info mx-auto mt-4 mb-2" style="width:fit-content">
                <div class="card-header">
                    <div class="text-center">
                        @yield('heading')
                    </div>
                </div>
            </div>
        </div>
        @stack('css')
        <link rel="stylesheet" href="../css/main.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>

    <body>
        <div class="container">
            @include('commons.error_message')
                @yield('content')
        </div>

        @stack('post')
        @stack('carousel')
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/f170ca01bf.js" crossorigin="anonymous"></script>
    </body>
</html>
