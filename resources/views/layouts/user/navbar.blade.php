<header class="header-area sticky-header">
    <div class="main-menu">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light main-box">
                <a class="navbar-brand logo" href="#">
                    <img src="{{ asset('assets/templates/user/img/logo.png') }}" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav ml-auto">
                        <li class="nav-item active"><a class="nav-link" href="index.html">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Link</a></li>
                        <li class="nav-item nav-right"><a class="nav-link" href="{{ route('user.logout') }}">Logout</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>