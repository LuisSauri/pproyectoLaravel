@extends('layouts.template')

@section('title', 'Crescendo')
    
@section('header')

@endsection

@section('main')
        <!-- Page Content-->
        <div class="container px-4 px-lg-5">
            <!-- Heading Row-->
            <div class="row gx-4 gx-lg-5 align-items-center my-5">
                <div class="col-lg-7">
                    <img class="img-fluid rounded mb-4 mb-lg-0" src="" alt="" />
                    <div id="carouselExampleFade" class="carousel slide carousel-fade">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="/img/carrusel1.jpg" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="/img/carrusel3.jpg" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="/img/carrusel2.jpg" class="d-block w-100" alt="...">
                          </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>
                
                </div>
                <div class="col-lg-5">
                    <h1 class="font-weight-light">"Crescendo" Escuela Musical</h1>
                    <p>"Armonizando talentos, creando melodías para el futuro."</p>
                </div>
                

        </div>

@endsection



@section('footer')



