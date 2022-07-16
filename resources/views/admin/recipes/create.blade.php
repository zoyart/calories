@extends('layouts.admin_layout')

@section('head-title')
    Recipes
@endsection


@section('content')
    <div class="content w-100">
        <div class="row mb-3 fs-2">
            <div class="col">
                Create recipe
            </div>
        </div>
        <form method="post" action="{{ route('admin.recipes.store') }}" id="create" enctype="multipart/form-data">
            @csrf
            <div class="row mb-5">
                <div class="col-8">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input class="form-control" type="text" placeholder="Recipe name" aria-label="name" name="name"
                               id="name">
                    </div>
                    <div class="mb-3">
                        <label for="category" class="form-label">Category</label>
                        <select class="form-select" aria-label="Category" name="category_id" id="category">
                            <option value="uncategorized" selected>Uncategorized</option>
                            @foreach($categories as $category)
                                <option value="{{$category['id']}}">{{$category['name']}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-4">
                    <div class="mb-3">
                        <label for="cooking_time" class="form-label">Cooking time</label>
                        <input class="form-control" type="number" placeholder="In minutes" aria-label="cooking_time"
                               name="cooking_time" id="cooking_time">
                    </div>
                    <div class="mb-3">
                        <label for="male" class="form-label">Male</label>
                        <select class="form-select" aria-label="male" name="male" id="male">
                            <option value="breakfast" selected>Breakfast</option>
                            <option value="brunch">Brunch</option>
                            <option value="dinner">Dinner</option>
                            <option value="lunch">Lunch</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col">
                    <label for="calories" class="form-label">Calories</label>
                    <input class="form-control" type="number" placeholder="Сalories" aria-label="name"
                           name="calories" id="calories">
                </div>
                <div class="col">
                    <label for="protein" class="form-label">Protein</label>
                    <input class="form-control" type="number" placeholder="Per 100 grams" aria-label="protein"
                           name="protein" id="protein">
                </div>
                <div class="col">
                    <label for="fats" class="form-label">Fats</label>
                    <input class="form-control" type="number" placeholder="Per 100 grams" aria-label="fats"
                           name="fats" id="fats">
                </div>
                <div class="col">
                    <label for="carbohydrates" class="form-label">Carbohydrates</label>
                    <input class="form-control" type="number" placeholder="Per 100 grams" aria-label="carbohydrates"
                           name="carbohydrates" id="carbohydrates">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="20"
                              name="description"></textarea>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="preview_image" class="form-label">Preview image</label>
                    <input class="form-control" type="file" id="preview_image" name="preview_image">
                </div>
            </div>
            <div class="d-flex my-4">
                <button type="submit" class="btn btn-outline-success">Create</button>
                <div class="mx-3">
                    <input type="checkbox" class="form-check-input" id="save_as_draft" name="save_as_draft">
                    <label for="save_as_draft" class="form-label px-2">Save as draft</label>
                </div>
            </div>
        </form>
    </div>

@endsection
