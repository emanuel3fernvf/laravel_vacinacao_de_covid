<!doctype html>
<html lang="pt-br">
<head>

    <style>
        .actionsPac{
            display: col;
            position: absolute;
            top: 0;
            right: 0;
            height: 100%;
            align-content: center;
        }
        .btnSvgPai{
            display: inline-block;
        }
 		.btnSvg{
 			display: inline-block;
 			font-size: inherit;
 			height: 1em;
 			overflow: visible;
 			vertical-align: -.125em;
 		}
 	</style>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vacinação Santa Margarida</title>
    <link rel="stylesheet" href="{{url('assets\bootstrap\bootstrap-5.1.3-dist\css\bootstrap.min.css')}}">
    <div style="padding-top: 50px;padding-bottom: 20px;background: lightgray;border-bottom: 2px solid gray;">
        <div class="col-8 text-center" style="margin-right: auto;margin-left: auto;">

            <h1>Controle de vacinas COVID-19 Santa Margarida</h1>

            <form style="margin-top: 50px;" class="row input-group input-group-lg" name="formSearch" id="formSearch" method="get" action="">
                <input class="col form-control" type="text" name="inputSearch" id="inputSearch" placeholder="Pesquise:" value="" required>
                <button class="col-2 btn btn-primary btnSvgPai" type="submit">
                    <svg class="btnSvg" viewBox="0 0 195 196" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M192.5 172L138 118C132.227 126.008 128.016 130.31 118 137.5L170.5 191C178.669 196.37 182.955 196.469 190 191C195.189 185.663 195.65 181.458 192.5 172Z" fill="white"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M127 26C138.362 40.5359 142.397 50.9673 145 74C141.852 94.6317 138.091 104.83 127 120C110.976 136.934 98.2543 141.197 72.5 144.5C47.8581 142.451 36.5774 136.223 19 120C7.06456 103.056 3.54654 92.8974 1 74C3.41942 50.5566 7.17049 39.8555 19 26C37.2864 9.39952 48.8344 3.49081 72.5 1C97.1437 4.52132 109.743 8.75718 127 26ZM72.5 128.5C93.6601 126.72 102.792 122.579 115 110.5C124.991 99.7983 128.201 91.8012 129.5 74C128.952 54.3855 125.503 46.0826 115 35C101.385 22.9015 92.0261 18.9472 72.5 16.5C51.4418 18.6341 43.894 23.9657 32 35C21.1817 46.063 16.969 53.6187 16.5 74C18.3459 92.0633 21.6485 100.11 32 110.5C46.8568 124.064 55.7868 127.58 72.5 128.5ZM49.5 99.5C49.0922 105.263 47.7575 106.991 42 105.5C32.827 97.5547 29.9198 90.1637 27 74C28.7545 55.0458 32.5994 47.932 42 39.5C47.6956 38.7191 49.2782 39.9461 49.5 45C41.4976 52.4493 38.169 58.0665 37 74C39.2881 86.794 42.3945 91.9726 49.5 99.5Z" fill="white"/>
                        <path d="M192.5 172L138 118C132.227 126.008 128.016 130.31 118 137.5L170.5 191C178.669 196.37 182.955 196.469 190 191C195.189 185.663 195.65 181.458 192.5 172Z" stroke="white"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M127 26C138.362 40.5359 142.397 50.9673 145 74C141.852 94.6317 138.091 104.83 127 120C110.976 136.934 98.2543 141.197 72.5 144.5C47.8581 142.451 36.5774 136.223 19 120C7.06456 103.056 3.54654 92.8974 1 74C3.41942 50.5566 7.17049 39.8555 19 26C37.2864 9.39952 48.8344 3.49081 72.5 1C97.1437 4.52132 109.743 8.75718 127 26ZM72.5 128.5C93.6601 126.72 102.792 122.579 115 110.5C124.991 99.7983 128.201 91.8012 129.5 74C128.952 54.3855 125.503 46.0826 115 35C101.385 22.9015 92.0261 18.9472 72.5 16.5C51.4418 18.6341 43.894 23.9657 32 35C21.1817 46.063 16.969 53.6187 16.5 74C18.3459 92.0633 21.6485 100.11 32 110.5C46.8568 124.064 55.7868 127.58 72.5 128.5ZM49.5 99.5C49.0922 105.263 47.7575 106.991 42 105.5C32.827 97.5547 29.9198 90.1637 27 74C28.7545 55.0458 32.5994 47.932 42 39.5C47.6956 38.7191 49.2782 39.9461 49.5 45C41.4976 52.4493 38.169 58.0665 37 74C39.2881 86.794 42.3945 91.9726 49.5 99.5Z" stroke="white"/>
                    </svg> Pesquisar
                </button>
            </form>
        </div>
    </div>
</head>
<body>

    @yield('content')

    <script src="{{url("assets/js/javascript.js")}}"></script>

</body>
</html>
