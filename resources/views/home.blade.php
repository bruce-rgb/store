@extends('layouts.app')

@section('content')
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-8">Product Dashboard</h1>
        <div class="text-right">
            <a href="{{ route('create') }}" class="btn btn-success">Add new</a>
        </div>
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
                    <div class="d-flex align-items-center justify-content-between"> {{--  --}}
                        {{-- <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                            <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                        </div> --}}
                        <div class=""> {{--col-sm-6 col-6 text-right --}}
                            <a href="{{--route('edit',$commerce->id )--}}" class="btn btn-primary btn-sm">Editar</a>
                            <form action="{{--route('delete', $commerce->id)--}}" method="POST" class="d-inline">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Está seguro que desea eliminar el comercio?');">
                                    Eliminar
                                </button>
                            </form>
                        </div>
                        <small class="text-muted">
                            Last Update {{
                                $ago = (
                                    new Carbon \Carbon($product['updated_at']))->diffForHumans(Carbon\Carbon::now(),
                                    true
                                )
                            }} ago
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
