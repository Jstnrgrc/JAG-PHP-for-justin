<nav class="navbar">
    <div class="navbar-brand">Laravel Dashboard</div>
    <div class="navbar-menu">
        <button class="dropdown-toggle">Menu ▾</button>
        <ul class="dropdown-menu">
            <li><a href="{{ route('about') }}">About</a></li>
            <li><a href="{{ route('contact') }}">Contact</a></li>
            <li><a href="{{ route('logout') }}">Logout</a></li>
        </ul>
    </div>
</nav>
