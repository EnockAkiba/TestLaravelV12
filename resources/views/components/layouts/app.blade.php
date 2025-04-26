<x-layouts.app.main :title="$title ?? null">
    <div class="d-flex justify-content-between align-items-center ">
        <h1>
            <button class="btn bg-dark p-1 d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#menu"
                aria-controls="menu">
                <i class="fas fa-bars"></i>
            </button>
            <button class="btn bg-dark p-1 d-none d-lg-inline-block menu-toggle" type="button">
                <i class="fas fa-bars"></i>
            </button>
        </h1>
         <div class="d-flex">
             <p class="text-primary"> User : {{Auth::user()->name}}</p>
         </div>
    </div>

    <div class="content-main">
        {{ $slot }}
    </div>

</x-layouts.app.main>
