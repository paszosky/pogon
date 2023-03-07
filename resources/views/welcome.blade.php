@extends('layouts.app')

@section('content')
<!--Main layout-->
<main class="my-5">
    <div class="container">
      <!--Section: Content-->
      <section>
        <!-- Jumbotron -->
        <div id="intro" class="p-5 text-center bg-light shadow-5 rounded-5 mb-5">
          <h1 class="mb-3 h2" id="welcome">Learn Bootstrap 5 with MDB</h1>
          <p class="mb-3">Best & free guide of responsive web design</p>
          <a class="btn btn-primary m-2" href="https://www.youtube.com/watch?v=c9B4TPnak1A" role="button" rel="nofollow"
            target="_blank">Start tutorial</a>
          <a class="btn btn-primary m-2" href="https://mdbootstrap.com/docs/standard/" target="_blank"
            role="button">Download MDB UI KIT</a>
        </div>
        <!-- Jumbotron -->
      </section>
      <!--Section: Content-->

      <!--Section: Content-->
      <section class="text-center">
        <h4 class="mb-5"><strong>Latest posts</strong></h4>

        <div class="row">
          <div class="col-md">
            <h6 class="text-uppercase font-weight-bold">Kategorie</h6>
            @foreach ($categories as $category)
            <div class="">
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="category-{{ $category->id }}">
                <label class="custom-control-label" for="category-{{ $category->id }}">{{ $category->name }}</label>
              </div>
            </div>
            @endforeach
          </div>
          <div class="col-md">
            One of three columns
          </div>
          <div class="col-md">
            One of three columns
          </div>
        </div>

        <div class="row">
            @foreach($products as $product)
                <div class="col-lg-4 col-md-12 mb-4">
                    <div class="card">
                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                        @if(!is_null($product->image_path))
                            <a href="#!">
                                <img src="{{ asset('storage/' . $product->image_path) }}" class="img-fluid" />
                            </a>
                            
                        @else
                            <a href="#!">
                                <img src="https://mdbootstrap.com/img/new/standard/nature/111.jpg" class="img-fluid" />
                            </a>
                            
                        @endif
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text">
                        {{ $product->description }}
                        </p>
                        <a href="#!" class="btn btn-primary">Read</a>
                    </div>
                    </div>
                </div>
            @endforeach
          
        </div>
      </section>
      <!--Section: Content-->

      <!-- Pagination -->
      <nav class="my-4" aria-label="...">
        <ul class="pagination pagination-circle justify-content-center">
          <li class="page-item">
            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
          </li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item active" aria-current="page">
            <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
          </li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#">Next</a>
          </li>
        </ul>
      </nav>
    </div>
  </main>
  <!--Main layout-->

  <!--Footer-->
  <footer class="bg-light text-lg-start">
    <div class="py-4 text-center">
      <a role="button" class="btn btn-primary btn-lg m-2"
        href="https://liderwinnica.pl" rel="nofollow" target="_blank">
        Lider Winnica
      </a>
    </div>

    <hr class="m-0" />

    <div class="text-center py-4 align-items-center">
      <p>Wejdź na nasze social media</p>
      <a href="https://www.youtube.com/channel/UC5CF7mLQZhvx8O5GODZAhdA" class="btn btn-primary m-1" role="button"
        rel="nofollow" target="_blank">
        <i class="fab fa-youtube"></i>
      </a>
      <a href="https://www.facebook.com/liderwinnica" class="btn btn-primary m-1" role="button" rel="nofollow"
        target="_blank">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="https://twitter.com/MDBootstrap" class="btn btn-primary m-1" role="button" rel="nofollow"
        target="_blank">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="https://github.com/mdbootstrap/mdb-ui-kit" class="btn btn-primary m-1" role="button" rel="nofollow"
        target="_blank">
        <i class="fab fa-github"></i>
      </a>
    </div>

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2023 Copyright:
      <a class="text-dark" href="http://liderwinnica.pl/">Lider Winnica</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!--Footer-->
@endsection