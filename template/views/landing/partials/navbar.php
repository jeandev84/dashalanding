<nav id="section__navbar" class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <div class="logo">
            <a href="{{ route('home') }}" class="navbar-brand">
                {{ app_name() }}<span class="text_red_pretty">.ru</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0 section__social_links">
                <li class="nav-item">
                    <a href="#services" class="nav-link">Услуги</a>
                </li>
                <li class="nav-item">
                    <a href="#about" class="nav-link">Обо мне</a>
                </li>
                <li class="nav-item">
                    <a href="#blog" class="nav-link">Блог</a>
                </li>
            </ul>
            <ul class="navbar-nav mt-2 mt-lg-0 section__social_links">
                <li class="nav-item">
                    <a href="#" class="nav-link" title="facebook">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" title="instagram">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" title="telegram">
                        <i class="fa fa-telegram" aria-hidden="true"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>