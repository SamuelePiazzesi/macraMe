<footer id="footer" class="">
    <div class="row">
        <div class="col">
            <div id="footer-links">
                <div>
                    <h1>Negozio</h1>
                    <a href="#">Shop</a>
                    <a href="#">migliori</a>
                    <a href="{{ url('/shop/new') }}">Novità</a>
                </div>
                <div>
                    <h1>Info</h1>
                    <a href="#">Aiuto</a>
                    <a href="#">Contattaci</a>
                    <a href="#">Resi</a>
                </div>
                <div>
                    <h1>Chi siamo</h1>
                    <a href="#">La nostra storia</a>
                    <a href="#">Il nostro Blog</a>
                    <a href="#">Progetti</a>
                </div>
            </div>
        </div>
        <div class="col d-none d-xl-block">
            <div id="social">
                <a class="" href="{{ url('/') }}">
                    {{ config('app.name', 'macraMe') }}
                </a>
                <div>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                </div>
            </div>
        </div>
        <div class="col">
            <div id="newsletter">
                <h2>Non perderti le ultilme novità.</h2>
                <h5>Ricevi notizie su nuovi prodotti, sconti e altro!</h5>
                <div>
                    <form class="form-inline">
                        <label class="sr-only" for="email">Name</label>
                        <input type="email" class="form-control " id="inlineFormInputName2" placeholder="Indirizzo Email">
                        <button type="submit" class="btn btn-primary">Iscriviti</button>
                    </form>
                </div>
                <div class="small-icons">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>
