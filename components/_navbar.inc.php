<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="/"><?= $appConfig->app_name ?></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link <?= isActiveTab('home') ?>" aria-current="page" href="/home">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle <?= isActiveTab('properties') ?>" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Properties
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/properties/apartments">Apartments</a></li>
                        <li><a class="dropdown-item" href="/properties/houses">Houses</a></li>
                        <li><a class="dropdown-item" href="/properties/villas">Villas</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= isActiveTab('about') ?>" href="/about">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= isActiveTab('contact') ?>" href="/contact">Contact Us</a>
                </li>
            </ul>
        </div>
    </div>
</nav>