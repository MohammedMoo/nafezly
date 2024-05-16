<section class="mainShop">
    {{-- navebar --}}
    <nav class="navbar navbar-expand-lg container">
        <div class="container-fluid">
            <div class="logoTitle">
                <img class="logo" src="{{ asset('assets/img/task/Screenshot_2.png') }}" alt="" srcset="">
                <a class="navbar-brand" href="#">BORCELLE</a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class=""><i class="fa-solid fa-bars"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="#">HOME</a>
                    <a class="nav-link" href="#">ABOUT</a>
                    <a class="nav-link" href="#">COURSES</a>
                    <a class="nav-link" href="#">SHOP</a>
                    <a class="nav-link" href="#">CONTACT</a>

                </div>
            </div>
        </div>
    </nav>
    {{-- end navebar --}}
    <div class="container">
        <div class="mainTitle">
            <h1>ONLINE SHOP</h1>
            <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae illo modi magni possimus
                cupiditate
                obcaecati vel atque neque accusamus sapiente inventore dolorum omnis quo, excepturi, molestiae numquam
                fugit
                dicta ea?</span>
        </div>
        <div class="slideShow container">
            <div class="owl-carousel owl-theme main-carousel">
                <div class="item">
                    <div class="card">
                        <img src="{{ asset('assets/img/task/image.png') }}" alt="">
                        <div class="titleImg">Olive oil Soap</div>
                        <div class="price">$5.00</div>
                        <button>ADD TO CART</button>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="{{ asset('assets/img/task/image copy 2.png') }}" alt="">
                        <div class="titleImg">Olive oil Soap</div>
                        <div class="price">$5.00</div>
                        <button>ADD TO CART</button>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="{{ asset('assets/img/task/images.jpg') }}" alt="">
                        <div class="titleImg">Olive oil Soap</div>
                        <div class="price">$5.00</div>
                        <button>ADD TO CART</button>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="{{ asset('assets/img/task/image copy.png') }}" alt="">
                        <div class="titleImg">Olive oil Soap</div>
                        <div class="price">$5.00</div>
                        <button>ADD TO CART</button>
                    </div>
                </div>

                <div class="item">
                    <div class="card">
                        <img src="{{ asset('assets/img/task/image copy 2.png') }}" alt="">
                        <div class="titleImg">Olive oil Soap</div>
                        <div class="price">$5.00</div>
                        <button>ADD TO CART</button>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>
