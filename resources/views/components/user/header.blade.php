<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="index.html">PT. Edy Mitra Karya</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item @if (request()->segment(1) == 'user') active @endif "><a href="{{ route('user.index') }}" class="nav-link">Home</a></li>
                <li class="nav-item @if (request()->segment(1) == 'about') active @endif "><a href="about.html" class="nav-link">About</a></li>
                <li class="nav-item @if (request()->segment(1) == 'property') active @endif "><a href="{{ route('user.property') }}#properties" class="nav-link">Properties</a></li>
                <li class="nav-item @if (request()->segment(1) == 'contact') active @endif "><a href="contact.html" class="nav-link">Contact</a></li>

                <!-- Example single danger button -->
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <img src="{{ asset('assets/admin/img/avatar.png') }}" alt="" class="w-px-40 h-auto rounded-circle space-between"
                            style="width: 35px;height: 35px" />
                         {{ ucfirst(auth()->user()->nama) }}
                    </a>
                    <div class="dropdown-menu">

                        <a class="dropdown-item" href="#">
                            <i class="fa fa-user"></i>
                            <span class="align-middle">My Profile</span>
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="fa fa-home"></i>
                            <span class="align-middle">Book Property</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('user.logout') }}">
                            <i class="fa fa-sign-out"></i>
                            <span class="align-middle">Logout</span>

                            </a>
                    </div>
                </li>
            </ul>

        </div>
    </div>
</nav>
