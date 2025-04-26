<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">

<head>
    @include('partials.head')
</head>

<body>
    <div class="container-fluid">
        <div class="row ">
            @include('partials.sidebar')

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 pt-4 main">
                {{ $slot }}
                 @fluxScripts
            </main>

            <div class="offcanvas offcanvas-start" style="background:#0c151d; width:300px" tabindex="-1" id="menu"
                aria-labelledby="menuLabel">
                <div class="offcanvas-body">
                    <div class="mb-3 d-flex justify-content-between align-items-start">
                        <a wire:navigate="" href="" class="no-underline">
                            <h3 class="tagline">PARAMETRES</h3>
                        </a>
                    </div>

                    <div class="d-flex align-items-center mb-4">
                        <div class="img">
                            <i class="fa fa-user img-icon "></i>
                        </div>
                        <div class="mx-3 text-white">
                            <h3>PAUL</h3>
                            <p>Compte Admin</p>
                        </div>
                    </div>

                    <ul class="menu">
                        <a href="{{ route('dashboard') }}" wire:navigate>
                            <li class="menu-item {{ Request::routeIs('dashboard') ? 'active' : '' }}"> <i
                                    class="fa fa-user">
                                </i> <span class="hidden-text"> Profil </span>
                            </li>
                        </a>
                    

                    </ul>

                </div>
            </div>
            
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.3.2/dist/chart.umd.js"
        integrity="sha384-eI7PSr3L1XLISH8JdDII5YN/njoSsxfbrkCTnJrzXt+ENP5MOVBxD+l6sEG4zoLp" crossorigin="anonymous">
    </script>
    <script src="{{ asset('dashboard.js') }}"></script>

    <script src="{{ asset('toastify/toastify.js') }}"></script>
</body>

</html>
