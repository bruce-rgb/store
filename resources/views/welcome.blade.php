@extends('layouts.app')

@section('content')
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">Bienvenido a la mejor tienda!</h1>
        <p class="lead">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odio libero cum illo est, consectetur magni labore. Amet ad blanditiis vitae vero assumenda quas ipsa quisquam distinctio. Alias non beatae numquam!</p>
    </div>
</div>


    <div class="album bg-light">
        <div class="container">

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                @foreach ($products as $product)
                <div class="col">
                    <div class="card shadow-sm">
                        <img class="card-img-top" src="{{ $product['image'] }}" alt="{{ $product['name'] }}">

                        <div class="card-body">
                            <h5 class="card-title">{{ $product['name'] }}</h5>
                            <p class="card-text">{{ $product['description'] }}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <button type="button" class="btn btn-outline-dark">Details</button>
                                <small class="text-muted">
                                    Ultima actualización: hace {{
                                        $ago = (
                                            new Carbon \Carbon($product['updated_at']))->diffForHumans(Carbon\Carbon::now(),
                                            true
                                        )
                                    }}
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
@endsection
