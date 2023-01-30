{{-- FOOTER --}}
@extends('components.footer')
@section('footer')
    <footer class="bg-footer">
        <div class="container-fluid">
            <div class="container d-flex justify-content-between">
                <div class="container d-flex justify-content-between my-5">
                    <div class="button-sign font-white d-flex align-items-center">
                        <h3>SIGN UP!</h3>
                    </div>
                    <div class="d-flex align-items-center">
                        <h3 class="font-azul">FOLLOW US!</h3>
                        <ul class="d-flex text-align-center align-items-center">
                            <li class="mx-2">
                                <a href="">
                                    <img src="{{Vite::asset('resources/img/footer-facebook.png')}}" alt="">
                                </a>
                            </li>
                            <li class="mx-2">
                                <a href="">
                                    <img src="{{Vite::asset('resources/img/footer-periscope.png')}}" alt="">
                                </a>
                            </li>
                            <li class="mx-2">
                                <a href="">
                                    <img src="{{Vite::asset('resources/img/footer-pinterest.png')}}" alt="">
                                </a>
                            </li>
                            <li class="mx-2">
                                <a href="">
                                    <img src="{{Vite::asset('resources/img/footer-twitter.png')}}" alt="">
                                </a>
                            </li>
                            <li class="mx-2">
                                <a href="">
                                    <img src="{{Vite::asset('resources/img/footer-youtube.png')}}" alt="">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                
            </div>
        </div>
    </footer>
@endsection

{{-- MAIN --}}
@extends('layouts.main-layout')

@section('main')
    <main>
        <section class="jumbotron">
                <img src="{{Vite::asset('resources/img/jumbotron.jpg')}}" alt="">
        </section>

        <section>
            <h1>card</h1>
            <h1>card</h1>
            <h1>card</h1>
            <h1>card</h1>
            <h1>card</h1>
            <h1>card</h1>
            <h1>card</h1>
            <h1>card</h1>
            <h1>card</h1>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque in obcaecati rerum fugit ad officia, culpa laudantium atque nemo voluptatum corporis, ab eos, doloribus ut. Tempora eos blanditiis voluptatem non! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita temporibus dolores minima veniam adipisci, vel minus, saepe quidem, doloremque nostrum mollitia voluptatem ipsa commodi molestiae iste. Maxime, nobis molestiae. Cumque.
            </p>
        </section>

        <section class="merch">
            <ul class="container">
                <li class="merch-list">
                    <img class="merch-img" src="{{Vite::asset('resources/img/buy-comics-digital-comics.png')}}">
                    <a href=""> DIGITAL COMICS </a>
                </li>
                <li class="merch-list">
                    <img class="merch-img" src="{{Vite::asset('resources/img/buy-comics-merchandise.png')}}">
                    <a href=""> DC MERCHANDISE </a>
                </li>
                <li class="merch-list">
                    <img class="merch-img" src="{{Vite::asset('resources/img/buy-comics-subscriptions.png')}}">
                    <a href=""> SUBSCRIPTION </a>
                </li>
                <li class="merch-list">
                    <img class="merch-img" src="{{Vite::asset('resources/img/buy-comics-shop-locator.png')}}">
                    <a href=""> COMIC SHOP LOCATOR </a>
                </li>
                <li class="merch-list">
                    <img class="merch-img" src="{{Vite::asset('resources/img/buy-dc-power-visa.svg')}}">
                    <a href=""> DC POWER VISA </a>
                </li>
            </ul>
        </section>

        <section>
            <div class="links">
                <div class="container-fluid">
                    <div class="container">
                        <div class="title-links">
                            <h1>DC COMICS</h1>
                                <div class="arrays-link">
                                    <a href="#">Characters</a>
                                    <a href="#">Comics</a>
                                    <a href="#">Movies</a>
                                    <a href="#">TV</a>
                                    <a href="#">Games</a>
                                    <a href="#">Videos</a>
                                    <a href="#">News</a>
                                </div>
                            <h1>SHOP</h1>
                                <div class="arrays-link">
                                    <a href="3">Shop DC</a>
                                    <a href="3">Shop DC Collectibles</a>
                                </div>
                        </div>
                            <div class="title-links">
                                <h1>DC</h1>
                                <div class="arrays-link">
                                    <a href="#">Terms Of Use</a>
                                    <a href="#">Privacy policy</a>
                                    <a href="#">Ad Choice</a>
                                    <a href="#">Advertising</a>
                                    <a href="#">Jobs</a>
                                    <a href="#">Subscriptions</a>
                                    <a href="#">Talent Workshops</a>
                                    <a href="#">CPSC Certificates</a>
                                    <a href="#">Ratings</a>
                                    <a href="#">Shop Help</a>
                                    <a href="#">Contact us</a>
                                </div>
                            </div>
            
                            <div class="title-links">
                                <h1>SITES</h1>
                                <div class="arrays-link">
                                    <a href="#">DC</a>
                                    <a href="#">MAD Magazine</a>
                                    <a href="#">DC Kids</a>
                                    <a href="#">DC Universe</a>
                                    <a href="#">DC Power Visa</a>
                                </div>
                            </div>
                            <div class="img-bg">
                                <img src="{{Vite::asset('resources/img/dc-logo-bg.png')}}" alt="">
                            </div>
                    </div> 
                </div>
            </div>
        </section>
    </main>
@endsection

{{-- HEADER --}}
@extends('components.header')

@section('content')
<header>
    <div class="container-fluid bg_blue">
        <div class="container d-flex justify-content-end font-white">
            <div class="mx-3">DC POWER&trade; VISA&#169;</div>
            <div>ADDITIONALL DC SITES</div>
        </div>
    </div>
    
    <div class="container-fluid">
        <div class="container my-2">
            <div class="d-flex justify-content-between align-items-center">
                <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
                <nav class="d-flex align-items-center">
                    <ul class="d-flex align-itesm-center">
                        <li class="mx-3">
                            <a class="font-grey" href="localhost:8000/prodotto">CHARACTERS</a>
                        </li>
                        <li class="mx-3">
                            <a class="font-grey" href="localhost:8000/prodotto">COMICS</a>
                        </li>  
                        <li class="mx-3">
                            <a class="font-grey" href="localhost:8000/prodotto">MOVIES</a>
                        </li>  
                        <li class="mx-3">
                            <a class="font-grey" href="localhost:8000/prodotto">TV</a>
                        </li>  
                        <li class="mx-3">
                            <a class="font-grey" href="localhost:8000/prodotto">GAMES</a>
                        </li>
                        <li class="mx-3">
                            <a class="font-grey" href="localhost:8000/prodotto">COLLECTIBLES</a>
                        </li>
                        <li class="mx-3">
                            <a class="font-grey" href="localhost:8000/prodotto">VIDEOS</a>
                        </li>  
                        <li class="mx-3">
                            <a class="font-grey" href="localhost:8000/prodotto">FANS</a>
                        </li>  
                        <li class="mx-3">
                            <a class="font-grey" href="localhost:8000/prodotto">NEWS</a>
                        </li>  
                        <li>
                            <a class="font-grey" href="localhost:8000/prodotto">SHOP</a>
                        </li>    
                    </ul>
                </nav>
            </div>
        </div>
    </div>    
</header>
@endsection

