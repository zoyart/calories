@extends('layouts.admin_layout')

@section('head-title')
    Recipes
@endsection


@section('content')
    <div class="panel d-flex flex-row">
        <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark min-h-100 vh-100" style="width: 360px;">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                <span class="fs-4">Calories</span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="{{ route('admin.index') }}" class="nav-link text-white" aria-current="page">
                        Home
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.recipes.index') }}" class="nav-link active">
                        Recipes
                    </a>
                </li>
            </ul>
            <hr>
            <div class="dropdown">
                <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                   id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
                    <strong>mdo</strong>
                </a>
                <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1" style="">
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Logout</a></li>
                </ul>
            </div>
        </div>
        <div class="content m-5 w-100">
            <div class="row mb-3 fs-2">
                <div class="col">
                    Recipes
                </div>
            </div>
            <div class="row pb-4 ">
                <div class="col">
                    <div class="card" style=" margin: 0px 20px 20px 0px;">
                        <div class="card-body text-center">
                            <h5 class="card-title">12</h5>
                            <p class="card-text">Recipes</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="margin: 0px 20px 20px 0px;">
                        <div class="card-body text-center">
                            <h5 class="card-title">3</h5>
                            <p class="card-text">Categories</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style=" margin: 0px 20px 20px 0px;">
                        <div class="card-body text-center">
                            <h5 class="card-title">10</h5>
                            <p class="card-text">Unpublished</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col">
                    <form action="{{ route('admin.recipes.create') }}" method="get">
                        <button type="submit" class="btn btn-outline-success">Create</button>
                    </form>
                </div>
            </div>
            <div class="row pb-4">
                <div class="col">
                    <table class="table table-borderless">
                        <thead>
                        <tr>
                            <th scope="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                </div>
                            </th>
                            <th scope="col">Name</th>
                            <th scope="col">Category</th>
                            <th scope="col">Published</th>
                            <th scope="col">Author</th>
                            <th scope="col">Created at</th>
                            <th scope="col">Updated at</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                </div>
                            </td>
                            <td>
                                <a href="#" class="link-primary">Овсянка</a>
                            </td>
                            <td>Каши</td>
                            <td>Нет</td>
                            <td>Artur</td>
                            <td>123</td>
                            <td>321</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
