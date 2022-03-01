@extends('templates.template')

@section('content')

    <script>
        document.getElementById("loteLink").classList.toggle("btn-dark");
    </script>

    <nav class="navbar navbar-light bg-light col-10 m-auto">
        <div class="container-fluid">
            <a href="{{url("lotes/create")}}">
                <input type="button" class="btn btn-primary" value="Cadastrar novo lote">
            </a>
            <form class="d-flex" name="formSearch" id="formSearch" method="POST" action="{{url("pesquisa_lotes")}}">            
                @csrf
                <input class="form-control me-2" name="inputSearch" id="inputSearch" type="search" placeholder="Pesquise por lote:" aria-label="Search" value="{{ $filters['inputSearch'] ?? ''}}">
                <button class="btn btn-success" type="submit">
                    
                    <svg class="btnSvg" viewBox="0 0 195 196" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M192.5 172L138 118C132.227 126.008 128.016 130.31 118 137.5L170.5 191C178.669 196.37 182.955 196.469 190 191C195.189 185.663 195.65 181.458 192.5 172Z" fill="white"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M127 26C138.362 40.5359 142.397 50.9673 145 74C141.852 94.6317 138.091 104.83 127 120C110.976 136.934 98.2543 141.197 72.5 144.5C47.8581 142.451 36.5774 136.223 19 120C7.06456 103.056 3.54654 92.8974 1 74C3.41942 50.5566 7.17049 39.8555 19 26C37.2864 9.39952 48.8344 3.49081 72.5 1C97.1437 4.52132 109.743 8.75718 127 26ZM72.5 128.5C93.6601 126.72 102.792 122.579 115 110.5C124.991 99.7983 128.201 91.8012 129.5 74C128.952 54.3855 125.503 46.0826 115 35C101.385 22.9015 92.0261 18.9472 72.5 16.5C51.4418 18.6341 43.894 23.9657 32 35C21.1817 46.063 16.969 53.6187 16.5 74C18.3459 92.0633 21.6485 100.11 32 110.5C46.8568 124.064 55.7868 127.58 72.5 128.5ZM49.5 99.5C49.0922 105.263 47.7575 106.991 42 105.5C32.827 97.5547 29.9198 90.1637 27 74C28.7545 55.0458 32.5994 47.932 42 39.5C47.6956 38.7191 49.2782 39.9461 49.5 45C41.4976 52.4493 38.169 58.0665 37 74C39.2881 86.794 42.3945 91.9726 49.5 99.5Z" fill="white"/>
                        <path d="M192.5 172L138 118C132.227 126.008 128.016 130.31 118 137.5L170.5 191C178.669 196.37 182.955 196.469 190 191C195.189 185.663 195.65 181.458 192.5 172Z" stroke="white"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M127 26C138.362 40.5359 142.397 50.9673 145 74C141.852 94.6317 138.091 104.83 127 120C110.976 136.934 98.2543 141.197 72.5 144.5C47.8581 142.451 36.5774 136.223 19 120C7.06456 103.056 3.54654 92.8974 1 74C3.41942 50.5566 7.17049 39.8555 19 26C37.2864 9.39952 48.8344 3.49081 72.5 1C97.1437 4.52132 109.743 8.75718 127 26ZM72.5 128.5C93.6601 126.72 102.792 122.579 115 110.5C124.991 99.7983 128.201 91.8012 129.5 74C128.952 54.3855 125.503 46.0826 115 35C101.385 22.9015 92.0261 18.9472 72.5 16.5C51.4418 18.6341 43.894 23.9657 32 35C21.1817 46.063 16.969 53.6187 16.5 74C18.3459 92.0633 21.6485 100.11 32 110.5C46.8568 124.064 55.7868 127.58 72.5 128.5ZM49.5 99.5C49.0922 105.263 47.7575 106.991 42 105.5C32.827 97.5547 29.9198 90.1637 27 74C28.7545 55.0458 32.5994 47.932 42 39.5C47.6956 38.7191 49.2782 39.9461 49.5 45C41.4976 52.4493 38.169 58.0665 37 74C39.2881 86.794 42.3945 91.9726 49.5 99.5Z" stroke="white"/>
                    </svg>

                </button>

            </form>
        </div>
    </nav>

    <div class="col-10 m-auto">
        <form class="row g-3 m-auto" name="formLote" id="formLote" method="get" action="">

            <table class="table table-sm table-bordered align-middle table-hover shadow mb-5">

                <thead>
                <tr>
                    <th scope="col">Lote</th>
                    <th scope="col">Fabricante</th>
                    <th scope="col">Validade</th>
                    <th scope="col">nfe</th>
                    <th scope="col">Data de Recebimento</th>
                    <th scope="col">Edt/Exc</th>
                </tr>
                </thead>
                <tbody>
                @foreach($lote as $lotes)
                    <tr>
                        <td>{{$lotes->lote}}</td>
                        <td>{{$lotes->fabricante}}</td>
                        <td>{{date('d/m/Y',strtotime($lotes->validade))}}</td>
                        <td>{{$lotes->nfe}}</td>
                        <td>{{date('d/m/Y',strtotime($lotes->data_recebimento))}}</td>
                        <td>
                            @csrf
                            <a class="btn btn-primary btnSvgPai" href="{{url("lotes/$lotes->id/edit")}}">
                                
                                    <svg class="btnSvg" viewBox="0 0 244 245" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M42 44.5H140C148.575 36.3474 150.013 31.6041 140 22.5H42C17.6461 32.8269 7.52796 42.1023 0.5 69.5V197.5C8.3418 226.348 17.2062 236.802 42 244H179.5C209.916 236.825 218.612 226.16 222 197.5V108C213.018 96.346 207.982 97.3158 199 108V197.5C197.659 214.242 192.895 218.915 179.5 221.5H42C31.8037 218.695 28.1658 212.53 23.5 197.5V69.5C24.8002 56.7332 29.0721 51.3724 42 44.5Z" fill="white" stroke="white"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M80.5 129.5L194 6C204.826 0.978686 210.874 -0.851288 221.5 3C230.962 7.18383 235.383 11.1805 241.5 21.5C243.902 31.9684 243.417 37.8794 239 48.5L125 172.5L82.5 190.5C71.2163 189.078 67.8356 185.342 66 174.5L80.5 129.5ZM114.5 126L208.5 23.5C220.369 22.1536 222.521 25.2699 221.5 35L128.5 138.5L114.5 126ZM114.5 154L100 141.5L93 163.5L114.5 154Z" fill="white" stroke="white"/>
                                    </svg> Editar
                                
                            </a>

                            <a href="{{url("lotes/$lotes->id")}}" onclick="confirmDelLot(event)">
                                <button class="btn btn-danger btnSvgPai">
                                    <svg class="btnSvg" viewBox="0 0 161 207" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M56.7102 23H25.7102C17.3769 26.533 14.4555 29.4569 11.7102 36V49.5C8.6384 49.8631 6.90355 50.2348 3.71017 52C0.157965 56.2956 0.0357728 58.7045 3.71017 63L11.7102 66L16.2102 191C19.5013 200.054 22.6206 203.64 31.2102 206.5H129.21C139.291 203.199 143.082 199.936 145.71 191L150.71 66C154.518 64.8596 156.364 64.2119 157.71 63C161.433 58.2624 161.3 55.8692 157.71 52L150.71 49.5V36C147.697 29.3767 144.381 26.6884 136.71 23H105.21V9.5C103.818 4.69695 101.88 2.89298 96.7102 1H65.7102C61.4085 2.26051 59.3605 3.92827 56.7102 9.5V23ZM28.2102 49.5H133.71V42L131.21 40H31.2102L28.2102 42V49.5ZM133.71 66H28.2102L32.2102 187.5L34.7102 191H44.2102V120.5C50.4593 112.922 53.9613 113.987 60.2102 120.5V191H73.2102V120.5C79.2535 114.44 82.6711 114.364 88.7102 120.5V191H101.71V120.5C107.761 114.924 111.161 114.743 117.21 120.5V191H127.71L130.71 187.5L133.71 66Z" fill="white" stroke="white"/>
                                    </svg> Excluir
                                </button>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="6">
                            @if (isset($filters))
                                {{ $lote->appends($filters)->links("pagination::bootstrap-5") }}
                            @else
                                {{ $lote->links("pagination::bootstrap-5") }}
                            @endif
                        </td>
                    </tr>
                </tfoot>
            </table>
        </form>
    </div>
@endsection
