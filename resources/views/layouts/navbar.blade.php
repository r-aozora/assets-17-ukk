<div class="navbar-bg"></div>
<nav class="navbar navbar-expand-lg main-navbar">
    <form class="form-inline mr-auto">
        <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
        </ul>
    </form>
    <ul class="navbar-nav navbar-right">
        <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                <img alt="" src="{{ asset('images/user.png') }}" class="rounded-circle mr-1">
                <div class="d-sm-none d-lg-inline-block">Username</div>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-title">Hi, Name</div>
                <a href="#" class="dropdown-item has-icon">
                    <i class="fas fa-user"></i> Profil
                </a>
                <div class="dropdown-divider"></div>
                <form action="#" method="POST">
                    @csrf
                    <a href="#" class="dropdown-item has-icon text-danger" onclick="event.preventDefault(); this.closest('form').submit();">
                        <i class="fas fa-sign-out-alt"></i> Logout
                    </a>
                </form>
            </div>
        </li>
    </ul>
</nav>
