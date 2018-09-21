<nav class="navbar navbar-expand-md navbar-primary  fixed-top navbar-laravel">
    <div class="container-fluid">
        <a class="navbar-brand navbar-brand-centered" href="{{ url('/') }}">
            {{ config('app.name', 'macraMe') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarLinks" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon">
                <i class="fas fa-bars"></i>
            </span>
        </button>

        <div class="collapse navbar-collapse" id="navbarLinks">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown " id="dropdown-hover">
                    <a class="nav-link dropdown-toggle"  id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Shop <i class="fas fa-caret-down"></i>
                    </a>
                    <div class="dropdown-menu" id="dropdown-custom" aria-labelledby="navbarDropdown">
                       <div class="left">
                            <div>
                            </div>
                            <div>

                            </div>
                       </div>
                       <div>

                       </div>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Nuovi Prodotti</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Migliori</a>
              </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item ">
                  <a class="nav-link" href="#">Sconti <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">il nostro Blog</a>
                </li>
                <li class="nav-item dropdown " id="dropdown-hover">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-h"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-shopping-cart"></i></a>
                  </li>
              </ul>
          </div>
    </div>
</nav>

