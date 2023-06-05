<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
    @include('head')

    <body class="antialiased">

        <div class="container-fluid g-0">
            <div class="row g-0">
                <div class="col-md-4 col-lg-3 col-xs-4 col-sm-4">
                    @include('pages/sidebar/sidebar')
                </div>
                <div class="col-md-8 col-lg-9 col-xs-8 col-sm-8">
                    @include('pages/clientes/listagem-clientes')
                </div>
            </div>
        </div>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://unpkg.com/feather-icons"></script>
        <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
        <script>
            feather.replace()
        </script>
    </body>
</html>