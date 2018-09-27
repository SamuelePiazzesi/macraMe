@extends('layouts.app')

@section('content')

    <section id="showcase">
        <div id="carouselShowcase" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselShowcase" data-slide-to="0" class="active"></li>
              <li data-target="#carouselShowcase" data-slide-to="1"></li>
              <li data-target="#carouselShowcase" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item carousel-image-1 active">
                <div class="carousel-caption  white">
                    <h1>Nuova collezione autunnale. </h1>
                    <button class="btn  btn-lg btn-outline-dark">SCOPRI</button>
                  </div>
              </div>
              <div class="carousel-item carousel-image-2 ">
                <div class="carousel-caption  black">
                    <h1>I nuovi pattern. </h1>
                    <button class="btn  btn-lg btn-outline-dark">SCOPRI</button>
                  </div>
              </div>
              <div class="carousel-item carousel-image-3 ">
                <div class="carousel-caption  white">
                    <h1>Le ultime novità. </h1>
                    <button class="btn  btn-lg btn-outline-dark">SCOPRI</button>
                  </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselShowcase" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselShowcase" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
    </section>

    <section id="boxes">
        <div>
            <div class="row">
                <div class="col">
                    <div class="box-1">
                        <div>
                            <h2 class="black">Le ultime novità del 2018.</h2>
                            <h4 class="black">Non lasciartele sfuggire.</h4>
                            <button class="btn  btn-outline-dark black">SHOP</button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="box-2">
                        <div>
                            <h2 class="white">Non solo macramè</h2>
                            <h4 class="white">Esplora la categoria Handmade.</h4>
                            <button class="btn  btn-outline-dark white">SHOP</button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="box-3">
                        <div>
                            <h2 class="black">Scopri i pattern più venduti.</h2>
                            <h4 class="black">Scegli quello giusto.</h4>
                            <button class="btn  btn-outline-dark black">SHOP</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="client-opinions">
        <div>

        </div>
    </section>

@endsection
