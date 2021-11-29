<nav class="navbar navbar-expand bg-dark fixed-top topbar static-top shadow-lg">
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>
    <div class="col-md-2 text-light ps-4">
        <router-link :to="{ name: 'home' }" class="router-link"><div class="navbar-brand-text">Restaurant <sup> APP</sup></div></router-link>
    </div>
    <ul class="navbar-nav ml-auto">
        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    @isset(auth()->user()->name)
                    <span class="mr-2 d-none d-lg-inline text-light-600 mx-3">{{ auth()->user()->name }}</span>
                    @endisset 
                <img class="img-profile rounded-circle"
                    src="img/undraw_profile.svg">
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                aria-labelledby="userDropdown">

                <div class="dropdown-divider"></div>
                <a class="dropdown-item">
                    <form id="logout-form" class="d-flex justify-content-end" action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger btn-sm text-light">Wyloguj</button>
                    </form>
                </a>
            </div>
        </li>
    </ul>
</nav>
<div class="row py-3"></div>
<div class="row py-3"></div>