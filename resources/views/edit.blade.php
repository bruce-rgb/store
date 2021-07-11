@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Product') }}</div>

                <div class="card-body">

                <form action="{{ route('store') }}" method="post"> <!--multipart/form-data es para el envío de la foto -->
                    {{ csrf_field() }}

                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="Name">Name*</label>
                            <input type="text" class="form-control" id="Name" name="name" value="{{$product->name}}" required>
                            <br>
                            <label for="Brand">Brand</label>
                            <input type="text" class="form-control" id="brand" name="brand" value="{{$product->brand}}" required>
                        </div>

                        <div class="form-group col-md-8">
                            <label for="Description">Description*</label>
                            <textarea class="form-control" id="description" rows="5" aria-describedby="description-help" name="description" required>{{$product->description}}</textarea>
                            {{-- <small id="description-help" class="form-text text-muted">Trata de escribir una descripción corta y específica.</small> --}}
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="Model">Model</label>
                            <input type="text" class="form-control" id="model" name="model" value="{{$product->model}}" required>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="Color">Color</label>
                            <input type="text" class="form-control" id="color" name="color" value="{{$product->color}}" required>
                        </div>
                    </div

                    <div class="form-group col-md-6">
                        <label for="image">Image url</label>
                        <input type="url" class="form-control" id="image" name="image" value="{{$product->image}}" required>
                    </div>

                    <div class="col-sm-12 col-12 text-right mb-4">
                        <a href="{{ route('home') }}" class="btn btn-secondary">Cancelar</a>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>
@endsection
