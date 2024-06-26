<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<nav>
    <ul>
        <li><a href="/acceuil">Acceuil</a></li>
        <li><a href="/presentation">Presentation</a></li>
        <li><a href="/produits">Produits</a></li>
        <li><a href="/contact">Contact</a></li>
    </ul>
</nav>

</body>
</html>-->

@extends("layouts.template")

@section("titre")
page presentation
@endsection

@section("contenu")

<div class="breadcrumb-area pt-35 pb-35 bg-gray-3">
    <div class="container">
        <div class="breadcrumb-content text-center">
            <ul>
                <li>
                    <a href="{{route('website.Acceuil')}}">Home</a>
                </li>
                <li class="active">About us </li>
            </ul>
        </div>
    </div>
</div>

<div class="welcome-area pt-100 pb-95">
    <div class="container">
        <div class="welcome-content text-center">
            {{-- <h5>Who Are We</h5> --}}
            <h1>Welcome To Flone</h1>
            <p> Découvrez notre boutique en ligne de vêtements tendance où style et qualité se rencontrent. Explorez une collection variée pour hommes, femmes et enfants, adaptée à toutes les occasions. Profitez d'offres exclusives et d'une livraison rapide pour une expérience d'achat inégalée.Notre site propose des articles soigneusement sélectionnés, allant des tenues décontractées aux vêtements de soirée élégants. Nous collaborons avec des marques renommées pour vous garantir des produits de haute qualité. Chaque semaine, de nouvelles collections arrivent pour suivre les dernières tendances de la mode.

                Grâce à notre interface conviviale, trouvez facilement ce que vous cherchez avec des filtres par taille, couleur et style. Notre service client est disponible 24/7 pour répondre à toutes vos questions et vous assister dans vos achats</p>
        </div>
    </div>
</div>

{{-- <div class="banner-area pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="single-banner mb-30">
                    <a href="product-details.html"><img src="{{asset('assets/img/banner/banner-1.jpg')}}" alt=""></a>
                    <div class="banner-content">
                        <h3>Watches</h3>
                        <h4>Starting at <span>$99.00</span></h4>
                        <a href="#"><i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="single-banner mb-30">
                    <a href="product-details.html"><img src="{{asset('assets/img/banner/banner-2.jpg')}}" alt=""></a>
                    <div class="banner-content">
                        <h3>Plo Bag</h3>
                        <h4>Starting at <span>$79.00</span></h4>
                        <a href="#"><i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="single-banner mb-30">
                    <a href="product-details.html"><img src="{{asset('assets/img/banner/banner-3.jpg')}}" alt=""></a>
                    <div class="banner-content">
                        <h3>Sunglass</h3>
                        <h4>Starting at <span>$79.00</span></h4>
                        <a href="#"><i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<div class="about-mission-area pb-70">
    <div class="container">
        {{-- <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="single-mission mb-30">
                    <h3>Our vission</h3>
                    <p>Flone provide how all this mistaken idea of denounc pleasure and sing pain was born an will give you a ete account of the system, and expound the actual teangs the eat explorer of the truth.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="single-mission mb-30">
                    <h3>Our mission </h3>
                    <p>Flone provide how all this mistaken idea of denounc pleasure and sing pain was born an will give you a ete account of the system, and expound the actual teangs the eat explorer of the truth.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="single-mission mb-30">
                    <h3>Our goal</h3>
                    <p>Flone provide how all this mistaken idea of denounc pleasure and sing pain was born an will give you a ete account of the system, and expound the actual teangs the eat explorer of the truth.</p>
                </div>
            </div>
        </div> --}}
    </div>
</div>

{{-- <div class="funfact-area bg-gray-3 pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-count text-center mb-30">
                    <div class="count-icon">
                        <i class="pe-7s-portfolio"></i>
                    </div>
                    <h2 class="count">360</h2>
                    <span>project done</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-count text-center mb-30">
                    <div class="count-icon">
                        <i class="pe-7s-cup"></i>
                    </div>
                    <h2 class="count">690</h2>
                    <span>cups of coffee</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-count text-center mb-30">
                    <div class="count-icon">
                        <i class="pe-7s-light"></i>
                    </div>
                    <h2 class="count">420</h2>
                    <span>branding</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-count text-center mb-30 mrgn-none">
                    <div class="count-icon">
                        <i class="pe-7s-smile"></i>
                    </div>
                    <h2 class="count">100</h2>
                    <span>happy clients</span>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<div class="team-area pt-95 pb-70">
    <div class="container">
        {{-- <div class="section-title-2 text-center mb-60">
            <h2>Team Members</h2>
            <p>Lorem ipsum dolor sit amet conse ctetu.</p>
        </div> --}}
        {{-- <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="team-wrapper mb-30">
                    <div class="team-img">
                        <a href="#">
                            <img src="{{asset('assets/img/team/team-1.jpg')}}" alt="">
                        </a>
                        <div class="team-action">
                            <a class="facebook" href="#">
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a class="twitter" title="Wishlist" href="#">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a class="instagram" href="#">
                                <i class="fa fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                    <div class="team-content text-center">
                        <h4>Mr.Mike Banding</h4>
                        <span>Manager </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="team-wrapper mb-30">
                    <div class="team-img">
                        <a href="#">
                            <img src="{{asset('assets/img/team/team-3.jpg')}}" alt="">
                        </a>
                        <div class="team-action">
                            <a class="facebook" href="#">
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a class="twitter" title="Wishlist" href="#">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a class="instagram" href="#">
                                <i class="fa fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                    <div class="team-content text-center">
                        <h4>Mr.Peter Pan</h4>
                        <span>Developer </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="team-wrapper mb-30">
                    <div class="team-img">
                        <a href="#">
                            <img src="{{asset('assets/img/team/team-2.jpg')}}" alt="">
                        </a>
                        <div class="team-action">
                            <a class="facebook" href="#">
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a class="twitter" title="Wishlist" href="#">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a class="instagram" href="#">
                                <i class="fa fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                    <div class="team-content text-center">
                        <h4>Ms.Sophia</h4>
                        <span>Designer </span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="team-wrapper mb-30">
                    <div class="team-img">
                        <a href="#">
                            <img src="{{asset('assets/img/team/team-4.jpg')}}" alt="">
                        </a>
                        <div class="team-action">
                            <a class="facebook" href="#">
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a class="twitter" title="Wishlist" href="#">
                                <i class="fa fa-twitter"></i>
                            </a>
                            <a class="instagram" href="#">
                                <i class="fa fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                    <div class="team-content text-center">
                        <h4>Mr.John Lee</h4>
                        <span>Chairmen </span>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
</div>

<div class="brand-logo-area pb-100 about-brand-logo">
    <div class="container">
        <div class="brand-logo-active owl-carousel owl-dot-none">
            <div class="single-brand-logo">
                <img src="{{asset('assets/img/brand-logo/barnd-logo-1.png" alt="">
            </div>
            <div class="single-brand-logo">
                <img src="{{asset('assets/img/brand-logo/barnd-logo-2.png" alt="">
            </div>
            <div class="single-brand-logo">
                <img src="{{asset('assets/img/brand-logo/barnd-logo-3.png" alt="">
            </div>
            <div class="single-brand-logo">
                <img src="{{asset('assets/img/brand-logo/barnd-logo-4.png" alt="">
            </div>
            <div class="single-brand-logo">
                <img src="{{asset('assets/img/brand-logo/barnd-logo-5.png" alt="">
            </div>
        </div>
    </div>
</div>


@endsection
