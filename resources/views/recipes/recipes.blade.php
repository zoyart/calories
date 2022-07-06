@extends('layouts.layout')

@section('head-title')
    Recipes
@endsection


@section('content')
    @foreach($recipes as $recipe)
        <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">
                    {{ Str::limit($recipe->name, 20, '...') }}
                </h5>
                <h5 class="card-title">

                </h5>
                <p class="card-text">
                    {{ Str::limit($recipe->description, 60, '...') }}
                </p>
                <a href="#" class="btn btn-primary">More</a>
            </div>
        </div>
    @endforeach
@endsection
