<div class="sidebar">
    <nav class="sidebar-nav">

        <ul class="nav">
            <li class="nav-item">
                <a href="{{ route('home') }}" class="nav-link ">
                    <i class="nav-icon fas fa-fw fa-tachometer-alt"></i>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('user.index') }}" class="nav-link
                    {{ request()->is('user') || request()->is('user/*') ? 'active':'' }}">
                    <i class="fa-fw fas fa-user nav-icon"></i>
                    Users
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('auth.change_password') }}" class="nav-link">
                    <i class="nav-icon fas fa-fw fa-key"></i>
                    Change password
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link"
                    onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                    <i class="nav-icon fas fa-fw fa-sign-out-alt"></i>
                    Logout
                </a>
            </li>
        </ul>

    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>
