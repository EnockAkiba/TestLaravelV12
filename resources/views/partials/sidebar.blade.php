<div class="sidebar  col-md-3 col-lg-2 pl-3" style="height: 100vh; background:#0c151d; ">

    <div class="offcanvas-md offcanvas-end pt-2" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">

        <div class="mt-3 d-flex justify-content-between align-items-start">
            <h3 class=" text-white">PARAMETRE SYSTEME</h3>
        </div>


        <div class="d-flex align-items-center my-5">
            <div class="img">
                <i class="fa fa-user img-icon "></i>
            </div>
            <div class="mx-3 text-white">
                <h3>{{ Auth::user()->name }}</h3>
                <p>Compte Admin</p>
            </div>
        </div>

        <ul class="menu mt-5">

            <a href="" wire:navigate>
                <li class="menu-item ">
                    <i class="fa fa-paint-brush"></i>
                    <span class="hidden-text"> Apparence </span>
                </li>
            </a>

            <a href="" wire:navigate>
                <li class="menu-item ">
                    <i class="fa fa-bars"></i>
                    <span class="hidden-text"> Général </span>
                </li>
            </a>

            
        </ul>

    </div>

    @php

    @endphp

</div>
