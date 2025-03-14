<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>MP Batalhão - @yield('titulo', '')</title>

        {{-- links online --}}
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

        {{-- links local --}}
        <link href="/sb-admin/css/styles.css" rel="stylesheet"/>
    </head>

    <body class="sb-nav-fixed">
        @include('layouts.navbar')
        
        <div id="layoutSidenav">

            @include('layouts.sidenav')
            
            <div id="layoutSidenav_content">

                {{-- main content --}}
                <main>
                    <div class="container-fluid px-5">
                        <h1 class="mt-4 mb-4">@yield('sub-titulo', 'MP Batalhão')</h1>

                        @yield('content')

                    </div>
                </main>
                {{-- end main content --}}
                @include('layouts.footer')
                
            </div>
        </div>

        {{-- links online --}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>

        {{-- Js para criar gráficos dinâmicos --}}
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

        {{-- SweetAlert2 para alertas dinâmicos --}}
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        {{-- links local --}}
        <script src="/sb-admin/assets/demo/chart-area-demo.js"></script>
        <script src="/sb-admin/assets/demo/chart-bar-demo.js"></script>
        <script src="/sb-admin/js/datatables-simple-demo.js"></script>
        <script src="/sb-admin/js/scripts.js"></script>
        <script src="/js/dashboard.js"></script>
        <script src="{{ asset('js/dashboard.js') }}"></script>

        
        {{-- Alerta Dinâmico com SweetAlert2 --}}
        @include('layouts.alerta_dinamico')

    </body>
</html>