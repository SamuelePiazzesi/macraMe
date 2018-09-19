<nav class="navbar navbar-expand-md navbar-primary  fixed-top navbar-laravel">
    <div class="container-fluid">
        <a class="navbar-brand navbar-brand-centered" href="{{ url('/') }}">
            {{ config('app.name', 'macraMe') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarLinks" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarLinks">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item ">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
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
                <li class="nav-item">
                  <a class="nav-link" href="#">...</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Carrello</a>
                  </li>
              </ul>
          </div>
    </div>
</nav>
