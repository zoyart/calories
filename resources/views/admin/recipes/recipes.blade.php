@extends('layouts.admin_layout')

@section('head-title')
    Recipes
@endsection


@section('content')
    <div class="content w-100">
        <div class="row mb-3 fs-2">
            <div class="col">
                Recipes
            </div>
        </div>
        <div class="row pb-4 ">
            <div class="col">
                <a href="{{ route('admin.recipes.index') }}" class="link-dark" style="text-decoration: none;">
                    <div class="card border-primary" style=" margin: 0px 20px 20px 0px;">
                        <div class="card-body text-center">
                            <h5 class="card-title">{{ $recipesCount }}</h5>
                            <p class="card-text">Recipes</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col">
                <a href="{{ route('admin.categories.index') }}" class="link-dark" style="text-decoration: none;">
                    <div class="card" style="margin: 0px 20px 20px 0px;">
                        <div class="card-body text-center">
                            <h5 class="card-title">{{ $categoriesCount }}</h5>
                            <p class="card-text">Categories</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col">
                <form action="{{ route('admin.recipes.create') }}" method="get">
                    <button type="submit" class="btn btn-outline-success">Create recipe</button>
                </form>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col">
                <div class="w-100">
                    <input type="text" class="form-control" id="search" placeholder="Recipe Search">
                </div>
            </div>
        </div>
        <div class="row pb-4">
            <div class="col">
                <table class="table table-borderless" id="table">
                    <thead>
                    <tr>
                        <th scope="col">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            </div>
                        </th>
                        <th scope="col">Name</th>
                        <th scope="col">Category</th>
                        <th scope="col">Male</th>
                        <th scope="col">Published</th>
                        <th scope="col">Author</th>
                        <th scope="col">Created at</th>
                        <th scope="col">Updated at</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($recipes as $recipe)
                        <tr>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                </div>
                            </td>
                            <td>
                                <a href="#" class="link-primary">{{ $recipe->name }}</a>
                            </td>
                            <td>
                                @foreach($recipe->categories as $category)
                                    {{ $category['name'] }}
                                @endforeach
                            </td>
                            <td> {{ $recipe->male }}</td>
                            <td> {{ ($recipe->is_published == 1) ? 'Yes' : 'No' }}</td>
                            <td>{{ $recipe->author }}</td>
                            <td>{{ $recipe->created_at }}</td>
                            <td>{{ $recipe->updated_at }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


@endsection
