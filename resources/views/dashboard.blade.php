<x-layouts.app :title="__('Dashboard')">
    <div class="d-flex justify-content-between align-items-center">
        <h1>
            <button class="btn bg-dark p-1 d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#menu"
                aria-controls="menu">
                <i class="fas fa-bars"></i>
            </button>
            <button class="btn bg-dark p-1 d-none d-lg-inline-block menu-toggle" type="button">
                <i class="fas fa-bars"></i>
            </button>
            TABLEAU DE BORD
        </h1>
        <input type="search" wire:model.live="search" class="w-25 mb-2" placeholder="Recherche ...">
    </div>

    <div class="content-main">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi mollitia dicta tempore, accusamus adipisci, facilis saepe at eveniet atque, tempora unde.
    </div>
    
</x-layouts.app>
