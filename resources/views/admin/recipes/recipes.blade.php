@extends('layouts.admin_layout')

@section('head-title')
    Admin home
@endsection


@section('content')
    <div class="panel d-flex flex-row">
        <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark min-h-100 vh-100" style="width: 360px;">
            <a href="/admin" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
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
        <div class="content p-4 w-100">
            <div class="row pb-3">
                <span style="font-size: 32px">Recipes</span>
            </div>
            <div class="row pb-4 d-flex flex-shrink-0 px-2">
                <div class="card" style="max-width: 20rem; margin: 0px 20px 20px 0px;">
                    <div class="card-body text-center">
                        <h5 class="card-title">12</h5>
                        <p class="card-text">Количество рецептов</p>
                    </div>
                </div>
                <div class="card" style="max-width: 20rem; margin: 0px 20px 20px 0px;">
                    <div class="card-body text-center">
                        <h5 class="card-title">3</h5>
                        <p class="card-text">Категорий</p>
                    </div>
                </div>
                <div class="card" style="max-width: 20rem; margin: 0px 20px 20px 0px;">
                    <div class="card-body text-center">
                        <h5 class="card-title">10</h5>
                        <p class="card-text">Не опубликованных</p>
                    </div>
                </div>
            </div>
            <div class="row pb-4">
                <table class="table table-borderless">
                    <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">Название</th>
                        <th scope="col">Категория</th>
                        <th scope="col">Опубликован</th>
                        <th scope="col">Автор</th>
                        <th scope="col">Дата создания</th>
                        <th scope="col">Дата редактирования</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
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

@endsection
