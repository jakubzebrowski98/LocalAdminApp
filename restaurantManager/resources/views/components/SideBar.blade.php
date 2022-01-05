<ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion toggled" id="accordionSidebar" aria-hidden="false">

    <a class="sidebar-brand bg-dark d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-text mx-3">Restaurant <sup> APP</sup></div>
        <i class="fas fa-utensils"></i>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-carrot"></i>
            <span>Zarządzaj składnikami</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <router-link :to="{ name: 'Ingredients.index' }" class="collapse-item">Składniki</router-link>
                <router-link :to="{ name: 'meals.index' }" class="collapse-item">Posiłki</router-link>
                <router-link :to="{ name: 'menu.index' }" class="collapse-item">Menu</router-link>
            </div>
        </div>
    </li>



    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
