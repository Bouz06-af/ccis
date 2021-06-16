@extends('layouts.app')

@section('content')
<?php
$active = "home";
?>
<div class="wrapper">
    <div class="landing">
        <div class="landingText" data-aos="fade-up" data-aos-duration="1000">
            <h1>“Si vous n'aimez pas lire, vous n'avez pas trouvé le bon livre.” </h1>
            <h3>-J.K.Rowling</h3>
            <div class="btn">
                <a href="{{ url('/books/search') }}">Réserver un livre</a>
            </div>
        </div>
        <div class="landingImage" data-aos="fade-down" data-aos-duration="2000">
            <img src="/images/—Pngtree—books in the library_3760888.png" alt="">
        </div>
    </div>
    <div style=" padding: 0 10vw 0 10vw;height: 70vh;">
        <div align="center" data-aos="fade-up" data-aos-duration="1000">
            <h1><br> <span style="color:#0004e6;font-size:3vw;">Types des livres</span> </h1>
            <img src="img/doctor-woman-400px.png" alt="">
        </div>


        <div clas="row" align="center" data-aos="fade-left" data-aos-duration="1000">
            <a href="{{ url('/books/search/mathematique') }}"><img class="col-sm-2" src="/images/math.png" alt="math" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Mathématique"></a>
            <a href="{{ url('/books/search/physique') }}"><img class="col-sm-2" src="/images/physique.png" alt="physique" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Physique"></a>
            <a href="{{ url('/books/search/informatique') }}"><img class="col-sm-2" src="/images/informatique.png" alt="informatique" data-bs-toggle="tooltip" data-bs-placement="bottom" title="informatique"></a>
            <a href="{{ url('/books/search/biologie') }}"><img class="col-sm-2" src="/images/biologie.png" alt="Biologie" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Biologie"></a>
            <a href="{{ url('/books/search/chimie') }}"><img class="col-sm-2" src="/images/chimie.png" alt="Chimie" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Chimie"></a>
        </div>
    </div>

    <div style="padding: 0 10vw 0 10vw;height: 120vh;" class="mb-5" data-aos="fade-up" data-aos-duration="1000">
        <div class="infoHeader" align="center">
            <h1><br> <span style="color:#0004e6;font-size:3vw">Quelques livres </span> </h1>
        </div>

        <div id="carouselExampleIndicators" class="carousel carousel-dark slide" data-bs-ride="carousel" data-aos="fade-up" data-aos-duration="1000">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner " style="height:700px;">
                <div class="carousel-item active">
                    <div class="row row-cols-1 row-cols-md-3 g-4 ms-5" style="width:1000px;" align="center">
                        @foreach ($books->take(3) as $book)
                        <div class="col">
                            <div class="card h-90 mt-5" style="width: 15rem;">
                                <img src="{{asset('/booksimages/'.$book->fiche)}}" class="card-img-top" alt="fiche">
                                <div class="card-body">
                                    <h5 class="card-title">{{$book->title}}</h5>
                                    <p class="card-text">{{$book->auteur}}</p>
                                    <a href="{{ url('/books/'.$book->id.'/afficher') }}" type="submit" class="btn btn-primary">Reserver</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row row-cols-1 row-cols-md-3 g-4 ms-5" style="width:1000px;" align="center">
                        @foreach ($books->take(6)->take(-3) as $book)
                        <div class="col">
                            <div class="card h-90 mt-5" style="width: 15rem;">
                                <img src="{{asset('/booksimages/'.$book->fiche)}}" class="card-img-top" alt="fiche">
                                <div class="card-body">
                                    <h5 class="card-title">{{$book->title}}</h5>
                                    <p class="card-text">{{$book->auteur}}</p>
                                    <a href="{{ url('/books/'.$book->id.'/afficher') }}" type="submit" class="btn btn-primary">Reserver</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row row-cols-1 row-cols-md-3 g-4 ms-5" style="width:1000px;" align="center">
                        @foreach ($books->take(12)->take(-3) as $book)
                        <div class="col">
                            <div class="card h-90 mt-5" style="width: 15rem;">
                                <img src="{{asset('/booksimages/'.$book->fiche)}}" class="card-img-top" alt="fiche">
                                <div class="card-body">
                                    <h5 class="card-title">{{$book->title}}</h5>
                                    <p class="card-text">{{$book->auteur}}</p>
                                    <a href="{{ url('/books/'.$book->id.'/afficher') }}" type="submit" class="btn btn-primary">Reserver</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon ms-5" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>


        </div>

    </div>



    @endsection