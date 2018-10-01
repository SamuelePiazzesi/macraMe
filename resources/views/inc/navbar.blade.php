<nav class="navbar navbar-expand-md navbar-primary fixed-top ">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" id="toggle-button" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <i class="fas fa-bars" ></i>
        </button>
        <a class="navbar-brand navbar-brand-centered" href="{{ url('/') }}">
            {{ config('app.name', 'macraMe') }}
        </a>
        <div class="collapse navbar-collapse" >
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown"  id="dropdown-hover">
                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Shop <i class="fas fa-caret-down"></i>
                    </a>
                    <div class="dropdown-menu" id="dropdown-custom" aria-labelledby="navbarDropdown">
                        <div class="dropdown-container">
                            <div class="left">

                                    <h1>Esplora</h1>
                                    <p>
                                        <a href="#">I più venduti</a>
                                    </p>
                                    <p>
                                        <a href="{{ url('/shop/new') }}">Nuovi arrivi</a>
                                    </p>
                                    <p>
                                        <a href="#">In saldo</a>
                                    </p>

                            </div>
                            <div class="right">
                                <div>
                                    <a href="#">
                                        <img class="" src="{{ asset('/images/photo.png') }}">
                                        <p>Macrame</p>
                                    </a>
                                </div>
                                <div>
                                    <a href="#">
                                        <img class="" src="{{ asset('/images/equip.png') }}">
                                        <p>Handmade</p>
                                    </a>
                                </div>
                                <div>
                                    <a href="#">
                                        <img class="" src="{{ asset('/images/land.png') }}">
                                        <p>Cazzi finti</p>
                                    </a>
                                </div>
                                <div>
                                    <a href="#">
                                        <img class="" src="{{ asset('/images/camera.png') }}">
                                        <p>Foto</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/shop/new') }}">Nuovi Prodotti</a>
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
                    <a class="nav-link" href="#">Contattaci</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-shopping-cart"></i></a>
                </li>
              </ul>
          </div>
        <a class="navbar-toggler" href="#">

            <i class="fas fa-shopping-cart" ></i>
        </a>
    </div>
    <div  id="toggle-menu">
        <div class="mt-4">
            <a href="{{ url('/shop/new') }}">
                <p>Nuovi arrivi</p>
            </a>
        </div>
        <div>
            <a>
                <p>Più venduti</p>
            </a>
        </div>
        <div>
            <a>
                <p>In offerta</p>
            </a>
        </div>
        <div id="cats">
            <h1>Categorie</h1>
            <a>
                Macramè
            </a>
            <a>
                Handmade
            </a>
        </div>
        <div id="sales">
            <a>
                <p>10% per i nuovi prodotti!</p>
            </a>
        </div>
        <div id="contacts">
           <span>
               <a>Il nostro blog</a>
               <a>La nostra storia</a>
               <a>Contattaci</a>
           </span>
        </div>
    </div>

</nav>

