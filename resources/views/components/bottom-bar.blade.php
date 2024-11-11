<nav class="navbar navbar-bottom fixed-bottom">
    <div class="container p-0">
        <ul class="navbar-nav nav-flex-icons">
            <li class="nav-item flex-fill">
                <a class="nav-link p-0 {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">
                    <span class="icon"><i class="material-icons">home</i></span>
                    <span class="nav-title">Home</span>
                </a>
            </li>
            <li class="nav-item flex-fill">
                <a class="nav-link p-0 {{ request()->routeIs('campaigns.index') ? 'active' : '' }}" href="{{ route('campaigns.index') }}">
                    <span class="icon"><i class="material-icons">article</i></span>
                    <span class="nav-title">Kanal</span>
                </a>
            </li>
            <li class="nav-item flex-fill">
                <a class="nav-link p-0 {{ request()->routeIs('register.organization') ? 'active' : '' }}" href="{{ route('register.organization') }}">
                    <span class="icon"><i class="material-icons">campaign</i></span>
                    <span class="nav-title">Galang Dana</span>
                </a>
            </li>
            <li class="nav-item flex-fill">
                <a class="nav-link p-0 {{ request()->routeIs('my-transactions.index') ? 'active' : '' }}" href="{{ route('my-transactions.index') }}">
                    <span class="icon"><i class="material-icons">list_alt</i></span>
                    <span class="nav-title">Transaksi</span>
                </a>
            </li>
            <li class="nav-item flex-fill">
                <a class="nav-link p-0 {{ request()->routeIs('profile.edit') ? 'active' : '' }}" href="{{ route('profile.edit') }}">
                    <span class="icon"><i class="material-icons">account_circle</i></span>
                    <span class="nav-title">Profil</span>
                </a>
            </li>
        </ul>
    </div>
</nav>